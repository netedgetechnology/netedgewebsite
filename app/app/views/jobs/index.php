<section class="inner-hero">
  <div class="container">
    <p class="breadcrumb"><a href="<?= e(url('/')) ?>">Home</a> / Careers</p>
    <h1>Current Openings</h1>
    <p>Join Netedge Technology and work on infrastructure, support, cloud and software projects.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php if (!$jobs): ?>
      <div class="card"><h3>No current openings</h3><p>Please check again later or send your profile through the contact page.</p></div>
    <?php else: ?>
      <div class="job-grid">
        <?php foreach ($jobs as $job): ?>
          <article class="job-card">
            <div>
              <h2><?= e($job['title']) ?></h2>
              <p class="job-meta"><?= e($job['department'] ?: 'Technology') ?> · <?= e($job['location'] ?: 'Ahmedabad') ?> · <?= e($job['job_type'] ?: 'Full Time') ?></p>
              <p><?= e($job['short_description']) ?></p>
            </div>
            <a class="btn" href="<?= e(url('jobs/'.$job['slug'])) ?>">View & Apply</a>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
