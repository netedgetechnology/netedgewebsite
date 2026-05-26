# Netedge Technology Website Complete Package

Core PHP + MySQL website with custom CMS.

## Included modules

- Modern responsive frontend
- CMS admin login
- CMS pages management
- Enable/disable pages
- Menu visibility
- SEO fields
- Careers/jobs module
- Job application form
- Resume upload
- Contact enquiry form
- Contact enquiries in admin
- Portfolio display
- Testimonials display
- Achievements display
- Blog redirect to existing `/blog/`
- Security-focused `.htaccess`
- Upload hardening

Read `INSTALLATION.md` first.


## v2 menu update
Header now follows the existing website structure with a Services mega dropdown. Footer has a separate footer-specific menu.
For an existing DB, import `database/patch_v2_menus.sql`.


## v3 menu/page update

- Improved premium Services mega-menu design.
- Added/updated all header dropdown pages so menu links do not show 404.
- Existing database update file: `database/patch_v3_menu_design_and_pages.sql`.


## v4 menu alignment fix

This package includes CSS overrides to fix Services mega-menu overlapping/alignment issues caused by older v2/v3 mega-menu CSS rules.


## v5 screenshot-inspired design

- Added real Netedge logo at `public/assets/images/logo.png`.
- Header/topbar/mega-menu redesigned to match the approved screenshot style.
- Homepage hero and statistics strip redesigned to match the approved screenshot look.
- Services mega-menu is shifted left so it does not cut on the right side.


## v6 centered menu fix
Services mega-menu is now centered to prevent left/right cutting.


## v7 homepage content update
Homepage now includes fuller content sections from the old Netedge homepage/service content: server management intro, services, technical support, why choose, achievements, software development and CTA.


## PHP 7 compatibility fix
This package includes `app/core/compat.php` and patches `Env.php` for servers running PHP 7.x where PHP 8 functions like `str_starts_with()` are unavailable.


## v8 design3 header update
Header navigation has been changed to match `testwebsite2026/?v=design3`: clean single white header, same Services dropdown structure, Company dropdown, Blog, Contact and Get A Quote. Import `database/patch_v8_design3_header.sql` only if the Our Expertise page is missing.


## v9 design3 overall theme
Overall homepage/theme has been updated to match `testwebsite2026/?v=design3`: clean light corporate theme, rounded cards, soft blue accents, sober hero, service cards, reliability section, process section and CTA.


## v10 polished theme update
Homepage/theme improved with a more premium hero, trust badges, polished service cards, dark proof section, solutions-by-need section, refined process cards and stronger CTA. No database import required.


## v11 inner pages polish

This package improves the public website beyond the homepage:

- Premium generic CMS page template
- Premium service page layout
- Improved Contact page
- Improved Career/Jobs page
- Improved footer
- Mobile header/menu polish
- Better forms styling
- Related service cards
- CTA blocks on inner pages
- Basic security `.htaccess` hardening
- Security checklist added

### Main changed files

```text
app/views/partials/premium-page.php
app/views/pages/show.php
app/views/pages/contact-us.php
app/views/pages/career.php
app/views/pages/jobs.php
app/views/layout.php
public/assets/css/style.css
public/.htaccess
.htaccess
SECURITY-CHECKLIST.md
database/patch_v11_inner_pages.sql
```

### Database

No database reset is required.

Only import this optional patch if Career or Contact page is missing/disabled:

```text
database/patch_v11_inner_pages.sql
```

Do not import `migrations.sql` again on an existing install.


## v12 Clients Around The World
Added a premium `Clients Around The World` world map section to the homepage, inspired by the old Netedge website. No database import required.


## v13 design3 font polish
Updated the website typography to closely match the design3 reference using Inter-style modern corporate font rendering, stronger heading weights, tighter heading letter spacing, improved paragraph readability and polished navigation/button typography.


## v14 improved Clients Around The World map
Replaced the earlier abstract map with a proper world-map image asset and multiple client spot markers similar to the old website's global clients section. No database import required.


## v15 font and world map fix
Fixed font loading by moving the Google Font stylesheet into the layout head and switching to a Poppins-style design3 font. Replaced the external image world map with an inline SVG map so the world map displays reliably with client spots. No database import required.


## v16 logo and map hard fix

Fixed incorrect logo asset path. The helper `asset()` already points to `/assets`, so `asset('assets/images/logo.png')` produced `/assets/assets/images/logo.png`. It is now corrected to `asset('images/logo.png')`.

Also added a text fallback for the logo and extra logo aliases:
- `public/assets/images/logo.png`
- `public/assets/logo.png`
- `public/logo.png`

The world map section remains inline SVG and has stronger CSS visibility rules.
No database import required.


## v17 logo size and world map image update

- Reduced header logo size by approximately 5%.
- Replaced the inline/abstract map with a proper SVG image asset:
  `public/assets/images/clients-world-map.svg`
- Homepage now loads the map as a normal image using:
  `asset('images/clients-world-map.svg')`
- Old v12/v14/v15 map sections are hidden by CSS.
- No database import required.


## v18 design3 typography match

This version reduces the overly bold typography from previous versions and makes the font weights closer to the design3 reference.

Changed:
- Headings reduced from 800/900 to 700
- Service/card headings reduced to 600
- Navigation reduced to 500
- Dropdown links/body text reduced to 400
- Buttons reduced to 600
- Kicker labels reduced to 600
- Stats/trust badges reduced from heavy black-bold to cleaner medium/semi-bold

No database import required.


## v19 header logo and dropdown polish

- Reduced/optimized header logo size.
- Kept the approved sample-style menu structure.
- Improved dropdown/mega menu header presentation.
- Added small icons before service dropdown menu items.
- Added category icons in dropdown section headers.
- Improved dropdown card styling, spacing, hover state and centered positioning.
- No database import required.


## v20 exact mega menu match

Rebuilt the header/Services mega menu to match the supplied screenshot more closely:

- Top contact/social bar added
- Larger white header row with logo, centered menu and square quote button
- Services menu uses a full-width mega dropdown
- Four service columns plus right promotional panel
- Category headers use line icons similar to screenshot
- Menu item arrows match screenshot style
- 24/7 support card added inside first column
- Dropdown typography and spacing adjusted to match screenshot
- No database import required.


## v21 menu center alignment

Fixed header menu alignment by changing the desktop header row to a 3-column grid:

- Left column: logo
- Center column: main menu
- Right column: Get A Quote button

This keeps the menu visually centered independent of logo/button width. Also centered the Services mega dropdown relative to the page/header.
No database import required.


## v22 Services dropdown fixes

Fixed the Services dropdown issues reported:

- Increased Services mega menu width.
- Rebalanced column widths, especially Infrastructure Management.
- Forced dropdown service names to stay in one line on desktop.
- Restored and forced visibility of the right-side "End-to-End IT Solutions for Your Business" promo panel.
- Fixed the underline/line overlapping the Services menu.
- Aligned the dropdown arrows for Services and Company.
- Increased Company dropdown width so items stay in one line.
- No database import required.


## v23 compact header height

Reduced the height of both header rows:

- Top contact/social row reduced from 48px to 34px.
- Main logo/menu row reduced from 118px to 86px.
- Logo reduced slightly to fit the compact header.
- Menu vertical padding reduced.
- Get A Quote button reduced.
- Services dropdown padding reduced slightly.
- No database import required.


## v24 Services dropdown stable fix

Resolved the Services dropdown problems:

- Removed the blue underline/line that was overlapping the Services menu.
- Replaced underline behavior with a subtle rounded hover background.
- Rebuilt the Services mega menu CSS as a stable full-width dropdown.
- Centered the dropdown panel and added a top blue border instead of overlapping line.
- Improved column spacing and reduced font sizes slightly so items fit cleanly.
- Forced the right-side "End-to-End IT Solutions for Your Business" panel to display.
- Added an invisible hover bridge to prevent dropdown flicker.
- Aligned Services and Company dropdown arrows.
- No database import required.
