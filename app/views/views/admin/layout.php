<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($title ?? 'Admin') ?> - Netedge CMS</title>
  <link rel="stylesheet" href="<?= e(asset('css/admin.css')) ?>">
</head>
<body>
<?php if (empty($guest)): ?>
<header class="admin-top">
  <strong>Netedge CMS</strong>
  <nav>
    <a href="/admin/">Dashboard</a>
    <a href="/admin/?action=pages">Pages</a>
    <a href="/admin/?action=jobs">Jobs</a>
    <a href="/admin/?action=applications">Applications</a>
    <a href="/admin/?action=enquiries">Enquiries</a>
    <a href="/admin/?action=portfolio">Portfolio</a>
    <a href="/admin/?action=testimonials">Testimonials</a>
    <a href="/admin/?action=achievements">Achievements</a>
    <a href="/" target="_blank">View Site</a>
    <a href="/admin/?action=logout">Logout</a>
  </nav>
</header>
<?php endif; ?>

<main class="<?= empty($guest) ? 'admin-shell' : 'login-shell' ?>">
  <?php if (!empty($_SESSION['flash_success'])): ?>
    <div class="alert success"><?= e($_SESSION['flash_success']); unset($_SESSION['flash_success']); ?></div>
  <?php endif; ?>
  <?php if (!empty($_SESSION['flash_error'])): ?>
    <div class="alert error"><?= e($_SESSION['flash_error']); unset($_SESSION['flash_error']); ?></div>
  <?php endif; ?>
  <?php require APP_PATH . '/views/admin/' . $view . '.php'; ?>
</main>
</body>
</html>
