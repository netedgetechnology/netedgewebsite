<?php
use App\Models\Page;

$seoConfig = [];

$seoFile = APP_PATH . '/config/seo.php';

if (is_file($seoFile)) {
    $seoConfig = require $seoFile;
}

$currentSlug = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');

if ($currentSlug === '') {
    $currentSlug = 'home';
}

$pageSeo = $seoConfig[$currentSlug] ?? [];

$title = $pageSeo['title'] ?? ($title ?? env('APP_NAME', 'Netedge Technology'));
$description = $pageSeo['description'] ?? ($description ?? '');
$keywords = $pageSeo['keywords'] ?? '';

$menu = Page::menu();
$parents = array_values(array_filter($menu, fn($m) => empty($m['parent_id'])));
$children = [];
foreach ($menu as $m) {
    if (!empty($m['parent_id'])) $children[$m['parent_id']][] = $m;
}
?>
<!doctype html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($title ?? env('APP_NAME', 'Netedge Technology')) ?></title>
  <meta name="description" content="<?= e($description ?? '') ?>">
    <meta name="keywords" content="<?= e($keywords ?? '') ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($title ?? 'Netedge Technology') ?>">
    <meta property="og:description" content="<?= e($description ?? '') ?>">
    <meta property="og:url" content="<?= e(url(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/', '/'))) ?>">
    <meta property="og:site_name" content="Netedge Technology">
    <meta property="og:image" content="<?= e(asset('images/logo.png')) ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($title ?? 'Netedge Technology') ?>">
    <meta name="twitter:description" content="<?= e($description ?? '') ?>">
    <meta name="twitter:image" content="<?= e(asset('images/logo.png')) ?>">
  <link rel="canonical" href="<?= e(url(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/', '/'))) ?>">
  <link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
</head>
<body>



<header class="site-header design3-header v20-header">
  <div class="v20-topbar">
    <div class="container v20-topbar-inner">
      <div class="v20-top-left">
        
        <span class="v20-top-item">✉ sales@netedgetechnology.com</span>
      </div>
      <div class="v20-top-right">
        <a href="https://www.netedgetechnology.com/blog/">Blog</a>
        <span class="v20-sep"></span>
        <a href="https://manage.netedgetechnology.com/index.php?rp=/login">Login</a>
        <a class="v20-social" href="https://www.facebook.com/Netedge" target="_blank" rel="noopener">f</a>
        <a class="v20-social" href="https://x.com/thenetedge" target="_blank" rel="noopener">𝕏</a>
        <a class="v20-social" href="https://www.youtube.com/watch?v=ed-lF6lFH5U" target="_blank" rel="noopener">▶</a>
      </div>
    </div>
  </div>

  <div class="container design3-header-inner v20-header-inner">
    <a class="brand design3-brand v20-brand" href="<?= e(url('')) ?>">
      <img src="<?= e(asset('images/logo.png')) ?>" alt="Netedge Technology" onerror="this.style.display='none';this.nextElementSibling.style.display='inline-flex';">
      <span class="brand-fallback-text">Netedge Technology</span>
    </a>

    <button class="nav-toggle" type="button">Menu</button>

    <nav class="main-nav design3-nav v20-nav" aria-label="Main navigation">
      <a class="nav-link" href="<?= e(url('')) ?>">HOME</a>

      <div class="nav-item design3-services v20-services">
        <a class="nav-link" href="<?= e(url('services')) ?>">SERVICES <span class="chev" aria-hidden="true"></span></a>

        <div class="design3-mega v20-mega">
          <div class="v20-mega-grid">
            <div class="v20-mega-col">
              <h4><span class="v20-head-icon server"></span>SERVER MANAGEMENT</h4>
              <a href="<?= e(url('server-management')) ?>">Server Management</a>
              <a href="<?= e(url('virtualization-management')) ?>">Virtualization Management</a>
              <a href="<?= e(url('technical-support')) ?>">Technical Support</a>
              <a href="<?= e(url('security-services')) ?>">Security Services</a>
              <a href="<?= e(url('webhosting-support')) ?>">Webhosting Support</a>
              <a href="<?= e(url('controlpanel-server-management')) ?>">Control Panel Management</a>

              
            </div>

            <div class="v20-mega-col">
              <h4><span class="v20-head-icon infra"></span>INFRASTRUCTURE MANAGEMENT</h4>
              <a href="<?= e(url('datacenter-management')) ?>">Datacenter Management</a>
              <a href="<?= e(url('it-infrastructure-automation')) ?>">IT Infrastructure Automation</a>
              <a href="<?= e(url('remote-infrastructure-management')) ?>">Remote Infrastructure Management</a>
              <a href="<?= e(url('cloud-infrastructure-management')) ?>">Cloud Infrastructure Management</a>
              <a href="<?= e(url('noc-management')) ?>">NOC Management</a>
              <a href="<?= e(url('home-office-automation')) ?>">Home & Office Automation</a>
            </div>

            <div class="v20-mega-col">
              <h4><span class="v20-head-icon software"></span>SOFTWARE DEVELOPMENT</h4>
              <a href="<?= e(url('web-application-development')) ?>">Web Application Development</a>
              <a href="<?= e(url('mobile-application-development')) ?>">Mobile Application Development</a>
              <a href="<?= e(url('iot-application-development')) ?>">IOT Application Development</a>
            </div>

            <div class="v20-mega-col">
              <h4><span class="v20-head-icon staffing"></span>STAFFING SERVICES</h4>
              <a href="<?= e(url('dedicated-technical-staff')) ?>">Dedicated Technical Staff</a>
              <a href="<?= e(url('shared-technical-staff')) ?>">Shared Technical Staff</a>
            </div>

            <div class="v20-mega-promo">
              <div class="v20-promo-globe"></div>
              <h3>End-to-End IT Solutions<br>for Your Business</h3>
              <p>From infrastructure to development, we deliver reliable, scalable and secure IT services.</p>
              <a href="<?= e(url('services')) ?>">VIEW ALL SERVICES <span>›</span></a>
            </div>
          </div>
        </div>
      </div>

      <a class="nav-link" href="<?= e(url('partnership')) ?>">PARTNERSHIP</a>
      <a class="nav-link" href="<?= e(url('products')) ?>">PRODUCTS</a>

      <div class="nav-item design3-company v20-company">
        <a class="nav-link" href="<?= e(url('company')) ?>">COMPANY <span class="chev" aria-hidden="true"></span></a>
        <div class="design3-dropdown v20-dropdown">
          <a href="<?= e(url('company')) ?>">Company</a>
          <a href="<?= e(url('why-us')) ?>">Why Us</a>
          <a href="<?= e(url('testimonials')) ?>">Testimonials</a>
          <a href="<?= e(url('portfolio')) ?>">Portfolio</a>
          <a href="<?= e(url('our-expertise')) ?>">Our Expertise</a>
          <a href="<?= e(url('career')) ?>">Career</a>
          <a href="<?= e(url('contact-us')) ?>">Contact Us</a>
        </div>
      </div>
    </nav>

    <a class="design3-cta v20-quote" href="<?= e(url('inquire')) ?>">GET A QUOTE <span>›</span></a>
  </div>
</header>




<main>
  <?php require APP_PATH . '/views/' . $view . '.php'; ?>
</main>



<footer class="site-footer v11-footer">
  <div class="container v11-footer-grid">
    <div class="v11-footer-brand">
      <img src="<?= e(asset('images/logo.png')) ?>" alt="Netedge Technology" onerror="this.style.display='none';this.nextElementSibling.style.display='inline-flex';"><span class="brand-fallback-text">Netedge Technology</span>
      <p>Netedge Technology provides server management, hosting support, cloud infrastructure, software development and technical staffing services for businesses that need reliable IT operations.</p>
    </div>

    <div>
      <h4>Services</h4>
      <a href="<?= e(url('webhosting-support')) ?>">Wehhosting Support</a>
      <a href="<?= e(url('managed-services')) ?>">Managed Services</a>
      <a href="<?= e(url('cloud-infrastructure-management')) ?>">Cloud Infrastructure Management</a>
      <a href="<?= e(url('technical-support')) ?>">24x7 Technical Support</a>
      <a href="<?= e(url('web-application-development')) ?>">Software Development</a>
      <a href="<?= e(url('dedicated-technical-staff')) ?>">Staffing Services</a>
    </div>

    <div>
      <h4>Company</h4>
      <a href="<?= e(url('company')) ?>">About Company</a>
      <a href="<?= e(url('achievements')) ?>">Achievements</a>
      <a href="<?= e(url('our-expertise')) ?>">Our Expertise</a>
      <a href="<?= e(url('why-us')) ?>">Why Us</a>
      <a href="<?= e(url('career')) ?>">Career</a>
      <a href="<?= e(url('contact-us')) ?>">Contact Us</a>
      <a href="<?= e(url('privacy-policy')) ?>">Privacy Policy</a>
      <a href="<?= e(url('terms')) ?>">Terms</a>
    </div>

    <div>
      <h4>Get In Touch</h4>
      <p>Email: sales@netedgetechnology.com</p>
      <p>For project inquiries, support requirements and staffing discussions.</p>
      <a class="btn" href="<?= e(url('inquire')) ?>">Get A Quote</a>
    </div>
  </div>

  <div class="container v11-footer-bottom">
    <span>© <?= date('Y') ?> Netedge Technology. All rights reserved.</span>
  </div>
</footer>


<script src="<?= e(asset('js/app.js')) ?>"></script>



</body>
</html>
