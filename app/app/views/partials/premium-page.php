<?php
/**
 * Premium page renderer for public CMS pages.
 * Safe fallback template when a specific view file is not available.
 */

$pageTitle = $page['title'] ?? $page['menu_title'] ?? 'Netedge Technology';
$bannerTitle = $page['banner_title'] ?? $pageTitle;
$bannerSubtitle = $page['banner_subtitle'] ?? ($page['short_description'] ?? '');
$content = $page['content'] ?? '';
$slug = $page['slug'] ?? '';

function nt_slug_label(string $slug): string {
    return ucwords(str_replace('-', ' ', $slug));
}

$serviceSlugs = [
    'server-management','virtualization-management','technical-support','security-services','webhosting-support',
    'datacenter-management','it-infrastructure-automation','remote-infrastructure-management','cloud-infrastructure-management',
    'noc-management','home-office-automation','web-application-development','mobile-application-development',
    'iot-application-development','dedicated-technical-staff','shared-technical-staff'
];

$isService = in_array($slug, $serviceSlugs, true);

$benefits = [
    'Secure and reliable implementation',
    'Experienced technical team',
    'Flexible engagement options',
    'Business-focused delivery',
];

$included = [
    'Requirement review and technical consultation',
    'Planning, setup, implementation or optimization',
    'Testing, documentation and handover',
    'Ongoing support and improvement options',
];

$related = array_values(array_filter($serviceSlugs, function($s) use ($slug) {
    return $s !== $slug;
}));
$related = array_slice($related, 0, 4);

$serviceMap = [
    'server-management' => [
        'kicker' => 'Managed Server Operations',
        'benefits' => ['24x7 server monitoring and support readiness','Linux, Windows and control panel expertise','Security hardening, patching and troubleshooting','Reliable support for hosting and cloud environments'],
        'included' => ['Server health review and optimization','Control panel and service troubleshooting','Backup, migration and performance assistance','Security checks and operational support'],
    ],
    'technical-support' => [
        'kicker' => 'Technical Support Services',
        'benefits' => ['Ticket, chat and escalation support','Hosting and server support expertise','Flexible hourly or monthly support model','Customer-friendly support delivery'],
        'included' => ['Support desk assistance','Issue diagnosis and resolution','Control panel support','Escalation and documentation'],
    ],
    'webhosting-support' => [
        'kicker' => 'Hosting Support Partner',
        'benefits' => ['White-label support for hosting companies','cPanel/Plesk/DirectAdmin support','Migration and account troubleshooting','24x7 support capability'],
        'included' => ['Customer ticket handling','Hosting account troubleshooting','Email/DNS/web service support','Server-side escalation assistance'],
    ],
    'cloud-infrastructure-management' => [
        'kicker' => 'Cloud Infrastructure Management',
        'benefits' => ['Cloud setup and migration support','Monitoring and optimization','Security and backup planning','Scalable infrastructure operations'],
        'included' => ['Cloud architecture review','Deployment and migration support','Monitoring and incident handling','Optimization and support'],
    ],
    'web-application-development' => [
        'kicker' => 'Custom Web Application Development',
        'benefits' => ['Business-specific application development','CMS, portal and dashboard development','PHP/MySQL and practical web technologies','Maintenance and enhancement support'],
        'included' => ['Requirement analysis','UI and application development','Testing and deployment','Support and improvements'],
    ],
];

if (isset($serviceMap[$slug])) {
    $benefits = $serviceMap[$slug]['benefits'];
    $included = $serviceMap[$slug]['included'];
    $kicker = $serviceMap[$slug]['kicker'];
} else {
    $kicker = $isService ? 'Professional IT Service' : 'Netedge Technology';
}
?>

<section class="page-hero v11-page-hero">
  <div class="container v11-page-hero-grid">
    <div>
      <span class="d3-kicker"><?= e($kicker) ?></span>
      <h1><?= e($bannerTitle) ?></h1>
      <?php if ($bannerSubtitle): ?>
        <p><?= e($bannerSubtitle) ?></p>
      <?php endif; ?>
      <div class="v11-hero-actions">
        <a class="btn" href="<?= e(url('contact-us')) ?>">Discuss Requirement</a>
        <a class="btn btn-outline" href="<?= e(url('services')) ?>">View Services</a>
      </div>
    </div>
    <div class="v11-hero-panel">
      <strong>Netedge Advantage</strong>
      <ul>
        <li>20+ years IT industry experience</li>
        <li>Server, cloud, hosting and software expertise</li>
        <li>Professional support-focused delivery</li>
      </ul>
    </div>
  </div>
</section>

<section class="section v11-content-section">
  <div class="container v11-content-grid">
    <main class="v11-main-content">
      <?php if ($content): ?>
        <div class="cms-content v11-cms-content">
          <?= $content ?>
        </div>
      <?php else: ?>
        <h2><?= e($pageTitle) ?></h2>
        <p>Netedge Technology provides reliable IT services for businesses that need stable infrastructure, secure systems and practical technology support.</p>
      <?php endif; ?>
    </main>

    <aside class="v11-side-card">
      <h3>Quick Inquiry</h3>
      <p>Tell us your requirement and our team will review the best way to help.</p>
      <a class="btn" href="<?= e(url('contact-us')) ?>">Get A Quote</a>
    </aside>
  </div>
</section>

<?php if ($isService): ?>
<section class="section d3-alt v11-service-detail">
  <div class="container">
    <div class="d3-section-head v10-center">
      <span class="d3-kicker">Service Highlights</span>
      <h2>What makes this service useful for your business</h2>
    </div>

    <div class="v11-two-lists">
      <div class="v11-list-card">
        <h3>Key Benefits</h3>
        <ul>
          <?php foreach ($benefits as $item): ?>
            <li><?= e($item) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="v11-list-card">
        <h3>What’s Included</h3>
        <ul>
          <?php foreach ($included as $item): ?>
            <li><?= e($item) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section d3-section">
  <div class="container">
    <div class="d3-section-head v10-center">
      <span class="d3-kicker">Related Services</span>
      <h2>Explore other Netedge services</h2>
    </div>
    <div class="v11-related-grid">
      <?php foreach ($related as $relSlug): ?>
        <a href="<?= e(url($relSlug)) ?>">
          <b><?= e(nt_slug_label($relSlug)) ?></b>
          <span>Learn more about this service →</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="v10-cta v11-bottom-cta">
  <div class="container v10-cta-card">
    <div>
      <span class="d3-kicker">Need Expert Help?</span>
      <h2>Let Netedge Technology help you plan the right IT solution.</h2>
      <p>Send your requirement and our team will get back with a practical approach.</p>
    </div>
    <div class="v10-cta-actions">
      <a class="btn" href="<?= e(url('contact-us')) ?>">Contact Us</a>
      <a class="btn btn-outline" href="<?= e(url('career')) ?>">Career</a>
    </div>
  </div>
</section>
