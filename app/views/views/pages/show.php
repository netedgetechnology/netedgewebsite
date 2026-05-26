<section class="inner-hero">
  <div class="container">
    <p class="breadcrumb"><a href="<?= e(url('/')) ?>">Home</a> / <?= e($page['title']) ?></p>
    <h1><?= e($page['banner_title'] ?: $page['title']) ?></h1>
    <?php if (!empty($page['banner_subtitle'])): ?>
      <p><?= e($page['banner_subtitle']) ?></p>
    <?php endif; ?>
  </div>
</section>

<section class="section">
  <div class="container content">
    <?php if ($page['slug'] === 'contact-us'): ?>
      <div class="contact-grid">
        <div>
          <?= $page['content'] ?>
        </div>
        <div class="apply-box">
          <h2>Send Enquiry</h2>
          <?php if (!empty($_SESSION['flash_success'])): ?><div class="notice success"><?= e($_SESSION['flash_success']); unset($_SESSION['flash_success']); ?></div><?php endif; ?>
          <?php if (!empty($_SESSION['flash_error'])): ?><div class="notice error"><?= e($_SESSION['flash_error']); unset($_SESSION['flash_error']); ?></div><?php endif; ?>
          <form method="post" action="<?= e(url('contact-us/submit')) ?>">
            <?= csrf_field() ?>
            <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off">
            <label>Name *<input name="name" required></label>
            <label>Email *<input type="email" name="email" required></label>
            <label>Phone *<input name="phone" required></label>
            <label>Company<input name="company"></label>
            <label>Service Interested In
              <select name="service">
                <option value="">Select Service</option>
                <option>Server Management</option>
                <option>Cloud Infrastructure</option>
                <option>Technical Support</option>
                <option>Software Development</option>
                <option>Security Services</option>
              </select>
            </label>
            <label>Message *<textarea name="message" required></textarea></label>
            <button class="btn" type="submit">Submit Enquiry</button>
          </form>
        </div>
      </div>
    <?php elseif ($page['slug'] === 'portfolio'): ?>
      <?= $page['content'] ?>
      <div class="cards">
        <?php foreach (($portfolio ?? []) as $item): ?>
          <article class="card"><h3><?= e($item['title']) ?></h3><p><?= e($item['description']) ?></p></article>
        <?php endforeach; ?>
      </div>
    <?php elseif ($page['slug'] === 'testimonials'): ?>
      <?= $page['content'] ?>
      <div class="cards">
        <?php foreach (($testimonials ?? []) as $t): ?>
          <article class="card"><p>“<?= e($t['message']) ?>”</p><h3><?= e($t['client_name']) ?></h3><p><?= e($t['client_company']) ?></p></article>
        <?php endforeach; ?>
      </div>
    <?php elseif ($page['slug'] === 'achievements'): ?>
      <?= $page['content'] ?>
      <div class="hero-card achievement-grid">
        <?php foreach (($achievements ?? []) as $a): ?>
          <div class="metric"><strong><?= e($a['metric']) ?></strong><span><?= e($a['label']) ?></span></div>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <?= $page['content'] ?>
    <?php endif; ?>
  </div>
</section>
