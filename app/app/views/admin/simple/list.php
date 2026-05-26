<div class="page-head">
  <h1><?= e($title) ?></h1>
  <p class="muted">Initial records are managed from database seed in this package. Full add/edit screens can be added in the next iteration.</p>
</div>
<div class="panel">
  <table>
    <thead><tr><?php foreach($columns as $c): ?><th><?= e(ucwords(str_replace('_',' ',$c))) ?></th><?php endforeach; ?></tr></thead>
    <tbody>
    <?php foreach ($items as $item): ?>
      <tr>
        <?php foreach($columns as $c): ?><td><?= e((string)($item[$c] ?? '')) ?></td><?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
