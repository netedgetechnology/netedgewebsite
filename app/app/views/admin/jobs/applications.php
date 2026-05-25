<h1>Job Applications</h1>
<div class="panel">
  <table>
    <thead><tr><th>Date</th><th>Job</th><th>Name</th><th>Email</th><th>Phone</th><th>Resume</th></tr></thead>
    <tbody>
    <?php foreach ($applications as $a): ?>
      <tr>
        <td><?= e($a['created_at']) ?></td>
        <td><?= e($a['job_title'] ?? 'General') ?></td>
        <td><?= e($a['name']) ?></td>
        <td><?= e($a['email']) ?></td>
        <td><?= e($a['phone']) ?></td>
        <td><?php if($a['resume_path']): ?><a target="_blank" href="<?= e(url($a['resume_path'])) ?>">Download</a><?php endif; ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
