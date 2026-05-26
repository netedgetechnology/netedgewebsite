<h1>Dashboard</h1>
<div class="dash-grid">
  <div class="dash-card"><strong><?= count($pages) ?></strong><span>Total Pages</span></div>
  <div class="dash-card"><strong><?= count(array_filter($pages, fn($p)=>$p['status']==='enabled')) ?></strong><span>Enabled Pages</span></div>
  <div class="dash-card"><strong><?= count(array_filter($pages, fn($p)=>$p['status']==='disabled')) ?></strong><span>Disabled Pages</span></div>
</div>
<section class="panel">
  <h2>Next modules</h2>
  <p>Jobs, applications, contact enquiries, media, testimonials, portfolio and achievements will be added in the next phase.</p>
</section>
