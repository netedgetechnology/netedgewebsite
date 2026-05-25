# WHMCS Development Setup & Build Guide

## Overview

This repository contains the WHMCS application source code along with Docker-based development environments and automated build workflows.

## Prerequisites

### System Requirements

- **macOS** with Colima, podman, or docker installed (Colima is recommended for better performance and resource management) in order to run the development environment and local workflow execution.

### For Running Workflows Locally with `act`

- **`act`** - GitHub Actions local runner. Download from [https://github.com/nektos/act](https://github.com/nektos/act)
- **Colima** with sufficient resources:

  ```bash
  # Recommended minimum resources for encoded builds
  colima start --cpu 4 --memory 6 --disk 60
  ```

- **Docker socket** accessible to `act` (Colima provides this via `/Users/<username>/.colima/docker.sock`)

## Initial Setup

### Using `initialSetup.sh`

The `initialSetup.sh` script located at `tools/initialSetup.sh` runs the standard WHMCS development environment startup sequence with optional automated tasks.

#### Basic Usage

```bash
./tools/initialSetup.sh [options]
```

#### Available Options

| Option | Description |
|--------|-------------|
| `-h`, `--help` | Display help information |
| `--php <version>` | Set the PHP version for the main container (e.g., `--php 8.2`) |
| `--whmcs <version>` | Load a specific WHMCS version (e.g., `--whmcs 8.7`) |
| `--encoded [version]` | Start an encoded container, optionally with a different PHP version |
| `--db <path>` | Load a database file after container startup |
| `--dbversion <version>` | Specify database version (default: `mysql80`) |
| `--debug` | Enable verbose output and xdebug connection |
| `--test <path>` | Run tests on the specified container (path to test suite) |
| `-p`, `--purge` | Stop all containers and delete images (full rebuild) |

#### Example Usage

```bash
# Basic setup with PHP 8.2
./tools/initialSetup.sh --php 8.2

# Setup with WHMCS version and database
./tools/initialSetup.sh --php 8.2 --whmcs 8.7 --db /path/to/database.sql

# Setup with encoded container for encrypted code testing
./tools/initialSetup.sh --php 8.2 --encoded 8.2 --debug

# Run tests on local container
./tools/initialSetup.sh --php 8.2 --test tests/acceptance/

# Full rebuild (purge all containers and images)
./tools/initialSetup.sh --purge
```

#### Interactive Prompts

When using `--encoded` without specifying a PHP version, the script will prompt you to enter the encoded container's PHP version (auto-continues after 5 seconds if no input is provided).

## Running the Nightly Encoded Build Workflow Locally

The `.github/workflows/nightly_encoded_build.yml` workflow handles building encoded (encrypted) WHMCS packages, signing, and publishing documentation.

### Prerequisites for Local Execution

1. **Install `act`**:

   ```bash
   brew install act
   ```

2. **Ensure `.secrets` file exists** in the repository root with required secrets:

   ```shell
   VAULT_API_TOKEN=<token>
   RELEASE_CERT_KEYID=<key-id>
   SIGNING_KEY=<signing-key>
   INTER_REPO_APP_PRIVATE_KEY=<private-key>
   VAULT_SSH_KEY=<ssh-key>
   GITHUB_TOKEN=<token>
   SLACK_WEBHOOK_URL=<url>
   ```

3. **Ensure `.vars` file exists** (optional, for variable configuration)

4. **Colima should be running** with adequate resources:

   ```bash
   colima start --cpu 4 --memory 6 --disk 60
   ```

### Full Command

```bash
act \
  --secret-file .secrets \
  --var-file .vars \
  --container-daemon-socket /Users/$(whoami)/.colima/docker.sock \
  -P ubuntu-latest=ghcr.io/catthehacker/ubuntu:act-latest \
  --workflow .github/workflows/nightly_encoded_build.yml
```

### Alternative: Using `.actrc` Configuration

The `.actrc` file in the root directory contains default settings:

```shell
--secret-file .secrets
--var-file .vars
```

With `.actrc` configured, you can simplify the command:

```bash
act \
  --container-daemon-socket /Users/$(whoami)/.colima/docker.sock \
  -P ubuntu-latest=ghcr.io/catthehacker/ubuntu:act-latest \
  --workflow .github/workflows/nightly_encoded_build.yml
```

### Workflow Inputs

The workflow accepts the following inputs when run manually:

| Input | Type | Default | Description |
|-------|------|---------|-------------|
| `run-tests` | bool | `false` | Run ALL tests (⚠️ high resource usage) |
| `sign-build` | bool | `false` | Sign the build on completion |
| `build-target` | choice | `all` | `all` for full build, `incremental` for package-inc |
| `upload-to-vault` | bool | `false` | Push build to Vault and internal mirrors |
| `generate-dev-docs` | bool | `false` | Generate/update API & Hook documentation |
| `publish-dev-docs` | bool | `false` | Publish documentation to site |
| `ioncube-php-support` | string | `82` | PHP versions (CSV format, e.g., `80,81,82`) |
| `use-test-env` | bool | `false` | Use dev environment credentials for Vault |

### Specifying Workflow Inputs with `act`

To provide specific input values when running locally:

```bash
act \
  --container-daemon-socket /Users/$(whoami)/.colima/default/docker.sock \
  -P whmcs-actions-docker=catthehacker/ubuntu:act-latest \
  -i build-target=incremental \
  -i sign-build=true \
  -i ioncube-php-support='82' \
  -i run-tests=false \
  --secret-file .secrets \
  --var-file .vars \
  --workflow .github/workflows/nightly_encoded_build.yml
```

### Detailed Step Breakdown

The workflow executes these main steps:

1. **env-setup**: Configures environment variables and build type
2. **generate-docs**: (Optional) Generates API and Hook documentation
3. **build-application**: Main build job that:
   - Checks out source
   - Creates build artifacts
   - Optionally signs the build
   - Optionally uploads to Vault
   - Generates job summary

## Project Structure

### Key Directories

| Directory | Purpose |
|-----------|---------|
| `admin/` | WHMCS admin panel code |
| `docker/` | Docker configuration and development tools |
| `includes/` | PHP libraries and core application code |
| `modules/` | Various plugin modules (payment gateways, registrars, etc.) |
| `templates/` | Front-end templates |
| `tests/` | Test suites (unit, acceptance, integration) |
| `tools/` | Development and build utilities |
| `.github/workflows/` | GitHub Actions workflows |
