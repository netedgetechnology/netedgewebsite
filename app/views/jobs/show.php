<section class="inner-hero">
  <div class="container">
    <p class="breadcrumb"><a href="<?= e(url('/')) ?>">Home</a> / <a href="<?= e(url('jobs')) ?>">Jobs</a> / <?= e($job['title']) ?></p>
    <h1><?= e($job['title']) ?></h1>
    <p><?= e($job['department'] ?: 'Technology') ?> · <?= e($job['location'] ?: 'Ahmedabad') ?> · <?= e($job['job_type'] ?: 'Full Time') ?></p>
  </div>
</section>

<section class="section">
  <div class="container job-detail-grid">
    <article class="content">
      <?php if (!empty($job['short_description'])): ?><p class="lead"><?= e($job['short_description']) ?></p><?php endif; ?>
      <h2>Job Description</h2>
      <?= $job['description'] ?>
      <?php if (!empty($job['responsibilities'])): ?>
        <h2>Responsibilities</h2>
        <?= $job['responsibilities'] ?>
      <?php endif; ?>
      <?php if (!empty($job['requirements'])): ?>
        <h2>Requirements</h2>
        <?= $job['requirements'] ?>
      <?php endif; ?>
      <?php if (!empty($job['experience'])): ?><p><strong>Experience:</strong> <?= e($job['experience']) ?></p><?php endif; ?>
    </article>

    <aside class="apply-box">
      <h2>Apply Now</h2>
      <?php if (!empty($_SESSION['flash_success'])): ?><div class="notice success"><?= e($_SESSION['flash_success']); unset($_SESSION['flash_success']); ?></div><?php endif; ?>
      <?php if (!empty($_SESSION['flash_error'])): ?><div class="notice error"><?= e($_SESSION['flash_error']); unset($_SESSION['flash_error']); ?></div><?php endif; ?>
      <form method="post" enctype="multipart/form-data" action="<?= e(url('jobs/'.$job['slug'].'/apply')) ?>">
        <?= csrf_field() ?>
        <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off">
        <label>Name *<input name="name" required></label>
        <label>Email *<input type="email" name="email" required></label>
        <label>Phone *<input name="phone" required></label>
        <label>Experience<input name="experience" placeholder="e.g. 3 years"></label>
        <label>Resume<input type="file" name="resume" accept=".pdf,.doc,.docx"></label>
        <label>Message<textarea name="message"></textarea></label>
        <button class="btn" type="submit">Submit Application</button>
      </form>
    </aside>
  </div>
</section>
