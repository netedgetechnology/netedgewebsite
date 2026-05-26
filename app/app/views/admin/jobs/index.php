<div class="page-head">
  <h1>Jobs</h1>
  <a class="btn" href="/admin/?action=job-create">Add Job</a>
</div>

<div class="panel">
  <table>
    <thead><tr><th>Title</th><th>Location</th><th>Type</th><th>Status</th><th>Sort</th><th></th></tr></thead>
    <tbody>
    <?php foreach ($jobs as $job): ?>
      <tr>
        <td><?= e($job['title']) ?></td>
        <td><?= e($job['location']) ?></td>
        <td><?= e($job['job_type']) ?></td>
        <td><span class="badge <?= $job['status']==='active'?'enabled':'disabled' ?>"><?= e($job['status']) ?></span></td>
        <td><?= e((string)$job['sort_order']) ?></td>
        <td class="actions">
          <a href="/admin/?action=job-edit&id=<?= (int)$job['id'] ?>">Edit</a>
          <a href="/admin/?action=job-toggle&id=<?= (int)$job['id'] ?>"><?= $job['status']==='active'?'Disable':'Enable' ?></a>
          <a href="<?= e(url('jobs/'.$job['slug'])) ?>" target="_blank">View</a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
