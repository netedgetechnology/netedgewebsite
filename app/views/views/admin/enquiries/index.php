<h1>Contact Enquiries</h1>
<div class="panel">
  <table>
    <thead><tr><th>Date</th><th>Name</th><th>Email</th><th>Phone</th><th>Service</th><th>Message</th></tr></thead>
    <tbody>
    <?php foreach ($enquiries as $e): ?>
      <tr>
        <td><?= e($e['created_at']) ?></td>
        <td><?= e($e['name']) ?></td>
        <td><?= e($e['email']) ?></td>
        <td><?= e($e['phone']) ?></td>
        <td><?= e($e['service']) ?></td>
        <td><?= e($e['message']) ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
