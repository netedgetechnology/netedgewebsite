<div class="page-head">
  <h1>Pages</h1>
  <a class="btn" href="/admin/?action=page-create">Add Page</a>
</div>

<div class="panel">
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Slug</th>
        <th>Menu</th>
        <th>Status</th>
        <th>Sort</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($pages as $p): ?>
      <tr>
        <td><?= e($p['title']) ?></td>
        <td><code>/<?= e($p['slug']) ?></code></td>
        <td><?= $p['show_in_menu'] ? 'Shown' : 'Hidden' ?></td>
        <td><span class="badge <?= e($p['status']) ?>"><?= e($p['status']) ?></span></td>
        <td><?= e((string)$p['sort_order']) ?></td>
        <td class="actions">
          <a href="/admin/?action=page-edit&id=<?= (int)$p['id'] ?>">Edit</a>
          <a href="/admin/?action=page-toggle&id=<?= (int)$p['id'] ?>"><?= $p['status']==='enabled'?'Disable':'Enable' ?></a>
          <a href="/<?= e($p['slug']) ?>" target="_blank">View</a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
