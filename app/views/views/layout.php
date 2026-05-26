<?php
use App\Models\Page;
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($title ?? env('APP_NAME', 'Netedge Technology')) ?></title>
  <meta name="description" content="<?= e($description ?? '') ?>">
  <link rel="canonical" href="<?= e(url(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/', '/'))) ?>">
  <link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
</head>
<body>

<header class="site-header">
  <div class="topbar">
    <div class="container topbar-inner">
      <div class="topbar-left">
        <span>☎ +91 33 4062 1000</span>
        <span>✉ sales@netedgetechnology.com</span>
      </div>
      <div class="topbar-right">
        <a href="https://www.netedgetechnology.com/blog/">Blog</a>
        <span class="top-sep"></span>
        <a href="https://manage.netedgetechnology.com/" target="_blank" rel="noopener">Login</a>
        <span class="social">f</span><span class="social">in</span><span class="social">x</span><span class="social">▶</span>
      </div>
    </div>
  </div>

  <div class="container header-inner">
    <a class="brand" href="<?= e(url('/')) ?>" aria-label="Netedge Technology Home">
      <img src="<?= e(asset('assets/images/logo.png')) ?>" alt="Netedge Technology">
    </a>

    <button class="nav-toggle" type="button" aria-label="Toggle navigation">☰</button>

    <nav class="main-nav" aria-label="Primary navigation">
      <a class="nav-link" href="<?= e(url('/')) ?>">Home</a>

      <div class="nav-item has-mega">
        <a class="nav-link" href="<?= e(url('services')) ?>">Services</a>

        <div class="mega-menu" aria-label="Services menu">
          <div class="mega-menu-grid">
            <div class="mega-col">
              <div class="mega-title"><span class="mega-icon">▤</span><h4>Server Management</h4></div>
              <a href="<?= e(url('server-management')) ?>">Server Management</a>
              <a href="<?= e(url('virtualization-management')) ?>">Virtualization Management</a>
              <a href="<?= e(url('technical-support')) ?>">Technical Support</a>
              <a href="<?= e(url('security-services')) ?>">Security Services</a>
              <a href="<?= e(url('webhosting-support')) ?>">Webhosting Support</a>
              <div class="support-box"><strong>24/7 Support</strong><span>Our experts are always ready to help you.</span><b>Contact Support →</b></div>
            </div>

            <div class="mega-col">
              <div class="mega-title"><span class="mega-icon">☁</span><h4>Infrastructure Management</h4></div>
              <a href="<?= e(url('datacenter-management')) ?>">Datacenter Management</a>
              <a href="<?= e(url('it-infrastructure-automation')) ?>">IT Infrastructure Automation</a>
              <a href="<?= e(url('remote-infrastructure-management')) ?>">Remote Infrastructure Management</a>
              <a href="<?= e(url('cloud-infrastructure-management')) ?>">Cloud Infrastructure Management</a>
              <a href="<?= e(url('noc-management')) ?>">NOC Management</a>
              <a href="<?= e(url('home-office-automation')) ?>">Home & Office Automation</a>
            </div>

            <div class="mega-col">
              <div class="mega-title"><span class="mega-icon">⌘</span><h4>Software Development</h4></div>
              <a href="<?= e(url('web-application-development')) ?>">Web Application Development</a>
              <a href="<?= e(url('mobile-application-development')) ?>">Mobile Application Development</a>
              <a href="<?= e(url('iot-application-development')) ?>">IOT Application Development</a>
            </div>

            <div class="mega-col">
              <div class="mega-title"><span class="mega-icon">♙</span><h4>Staffing Services</h4></div>
              <a href="<?= e(url('dedicated-technical-staff')) ?>">Dedicated Technical Staff</a>
              <a href="<?= e(url('shared-technical-staff')) ?>">Shared Technical Staff</a>
            </div>

            <div class="mega-side">
              <img src="<?= e(asset('assets/images/mega-globe.svg')) ?>" alt="">
              <h3>End-to-End IT Solutions<br>for Your Business</h3>
              <p>From infrastructure to development, we deliver reliable, scalable and secure IT services.</p>
              <a href="<?= e(url('services')) ?>">View All Services →</a>
            </div>
          </div>
        </div>
      </div>

      <a class="nav-link" href="<?= e(url('partnership')) ?>">Partnership</a>
      <a class="nav-link" href="<?= e(url('products')) ?>">Products</a>
      <a class="nav-link" href="<?= e(url('company')) ?>">Company</a>
      <a class="nav-link" href="https://www.netedgetechnology.com/blog/">Blog</a>
      <a class="btn btn-small nav-cta" href="<?= e(url('contact-us')) ?>">Get A Quote <span>›</span></a>
    </nav>
  </div>
</header>


<main>
  <?php require APP_PATH . '/views/' . $view . '.php'; ?>
</main>


<footer class="site-footer">
  <div class="container footer-grid">
    <div>
      <h3>Netedge Technology</h3>
      <p>Server management, cloud infrastructure, technical support and software development services.</p>
    </div>
    <div>
      <h4>Services</h4>
      <a href="<?= e(url('server-management')) ?>">Server Management</a>
      <a href="<?= e(url('technical-support')) ?>">Technical Support</a>
      <a href="<?= e(url('webhosting-support')) ?>">Webhosting Support</a>
      <a href="<?= e(url('cloud-infrastructure-management')) ?>">Cloud Infrastructure Management</a>
      <a href="<?= e(url('web-application-development')) ?>">Web Application Development</a>
    </div>
    <div>
      <h4>Company</h4>
      <a href="<?= e(url('company')) ?>">Company</a>
      <a href="<?= e(url('why-us')) ?>">Why Us</a>
      <a href="<?= e(url('portfolio')) ?>">Portfolio</a>
      <a href="<?= e(url('testimonials')) ?>">Testimonials</a>
      <a href="<?= e(url('jobs')) ?>">Career</a>
    </div>
    <div>
      <h4>Quick Links</h4>
      <a href="<?= e(url('partnership')) ?>">Partnership</a>
      <a href="<?= e(url('products')) ?>">Products</a>
      <a href="https://www.netedgetechnology.com/blog/">Blog</a>
      <a href="https://manage.netedgetechnology.com/" target="_blank" rel="noopener">Login</a>
      <a href="<?= e(url('contact-us')) ?>">Get A Quote</a>
    </div>
  </div>
  <div class="container footer-bottom">
    <p>© <?= date('Y') ?> Netedge Technology. All rights reserved.</p>
  </div>
</footer>

<script src="<?= e(asset('js/app.js')) ?>"></script>
</body>
</html>
