<?php $p = $page ?? []; ?>
<div class="page-head">
  <h1><?= !empty($p['id']) ? 'Edit Page' : 'Create Page' ?></h1>
  <a class="btn secondary" href="/admin/?action=pages">Back</a>
</div>

<form class="panel form-grid" method="post" action="/admin/?action=page-save">
  <?= csrf_field() ?>
  <input type="hidden" name="id" value="<?= e((string)($p['id'] ?? '')) ?>">

  <label>Title <input name="title" required value="<?= e($p['title'] ?? '') ?>"></label>
  <label>Slug <input name="slug" required value="<?= e($p['slug'] ?? '') ?>"></label>
  <label>Menu Title <input name="menu_title" value="<?= e($p['menu_title'] ?? '') ?>"></label>
  <label>Parent Page
    <select name="parent_id">
      <option value="">None</option>
      <?php foreach ($parents as $parent): ?>
        <option value="<?= (int)$parent['id'] ?>" <?= (($p['parent_id'] ?? '') == $parent['id']) ? 'selected' : '' ?>><?= e($parent['title']) ?></option>
      <?php endforeach; ?>
    </select>
  </label>

  <label>Template <input name="template" value="<?= e($p['template'] ?? 'default') ?>"></label>
  <label>Sort Order <input type="number" name="sort_order" value="<?= e((string)($p['sort_order'] ?? 0)) ?>"></label>

  <label>Banner Title <input name="banner_title" value="<?= e($p['banner_title'] ?? '') ?>"></label>
  <label>Banner Subtitle <textarea name="banner_subtitle"><?= e($p['banner_subtitle'] ?? '') ?></textarea></label>
  <label>Short Description <textarea name="short_description"><?= e($p['short_description'] ?? '') ?></textarea></label>

  <label class="full">Content HTML
    <textarea class="codearea" name="content"><?= e($p['content'] ?? '') ?></textarea>
  </label>

  <label>Featured Image Path <input name="featured_image" value="<?= e($p['featured_image'] ?? '') ?>"></label>
  <label>Status
    <select name="status">
      <option value="enabled" <?= (($p['status'] ?? 'enabled')==='enabled')?'selected':'' ?>>Enabled</option>
      <option value="disabled" <?= (($p['status'] ?? '')==='disabled')?'selected':'' ?>>Disabled</option>
    </select>
  </label>
  <label class="check"><input type="checkbox" name="show_in_menu" value="1" <?= !empty($p) ? (!empty($p['show_in_menu'])?'checked':'') : 'checked' ?>> Show in menu</label>

  <h2 class="full">SEO</h2>
  <label>Meta Title <input name="meta_title" value="<?= e($p['meta_title'] ?? '') ?>"></label>
  <label>Meta Description <textarea name="meta_description"><?= e($p['meta_description'] ?? '') ?></textarea></label>
  <label>Meta Keywords <input name="meta_keywords" value="<?= e($p['meta_keywords'] ?? '') ?>"></label>
  <label>Canonical URL <input name="canonical_url" value="<?= e($p['canonical_url'] ?? '') ?>"></label>
  <label>OG Title <input name="og_title" value="<?= e($p['og_title'] ?? '') ?>"></label>
  <label>OG Description <textarea name="og_description"><?= e($p['og_description'] ?? '') ?></textarea></label>
  <label>OG Image <input name="og_image" value="<?= e($p['og_image'] ?? '') ?>"></label>

  <div class="full">
    <button class="btn" type="submit">Save Page</button>
  </div>
</form>
