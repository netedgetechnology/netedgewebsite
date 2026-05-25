<?php $j = $job ?? []; ?>
<div class="page-head">
  <h1><?= !empty($j['id']) ? 'Edit Job' : 'Create Job' ?></h1>
  <a class="btn secondary" href="/admin/?action=jobs">Back</a>
</div>

<form class="panel form-grid" method="post" action="/admin/?action=job-save">
  <?= csrf_field() ?>
  <input type="hidden" name="id" value="<?= e((string)($j['id'] ?? '')) ?>">

  <label>Title <input name="title" required value="<?= e($j['title'] ?? '') ?>"></label>
  <label>Slug <input name="slug" required value="<?= e($j['slug'] ?? '') ?>"></label>
  <label>Department <input name="department" value="<?= e($j['department'] ?? 'Technology') ?>"></label>
  <label>Location <input name="location" value="<?= e($j['location'] ?? 'Ahmedabad') ?>"></label>
  <label>Job Type <input name="job_type" value="<?= e($j['job_type'] ?? 'Full Time') ?>"></label>
  <label>Experience <input name="experience" value="<?= e($j['experience'] ?? '') ?>"></label>
  <label>Salary Range <input name="salary_range" value="<?= e($j['salary_range'] ?? '') ?>"></label>
  <label>Sort Order <input type="number" name="sort_order" value="<?= e((string)($j['sort_order'] ?? 0)) ?>"></label>
  <label>Status
    <select name="status">
      <option value="active" <?= (($j['status'] ?? 'active')==='active')?'selected':'' ?>>Active</option>
      <option value="inactive" <?= (($j['status'] ?? '')==='inactive')?'selected':'' ?>>Inactive</option>
    </select>
  </label>

  <label class="full">Short Description <textarea name="short_description"><?= e($j['short_description'] ?? '') ?></textarea></label>
  <label class="full">Description HTML <textarea class="codearea" name="description"><?= e($j['description'] ?? '') ?></textarea></label>
  <label class="full">Responsibilities HTML <textarea class="codearea" name="responsibilities"><?= e($j['responsibilities'] ?? '') ?></textarea></label>
  <label class="full">Requirements HTML <textarea class="codearea" name="requirements"><?= e($j['requirements'] ?? '') ?></textarea></label>

  <div class="full"><button class="btn" type="submit">Save Job</button></div>
</form>
