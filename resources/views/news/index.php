<h1>News</h1>
<ul>
    <li>
        <a href="<?= route('categories.index') ?>">Categories</a>
    </li>
    <li>
        <a href="<?= route('news.index') ?>">News</a>
    </li>
    <li>
        <a href="<?= route('signin') ?>">Sign in</a>
    </li>
    <li>
        <a href="<?= route('admin.news.create') ?>">Create a News Article</a>
    </li>
</ul>
<ul>
  <?php foreach ($news as $item): ?>
    <li>
      <h3>
        <a href="<?= route('news.show', $item['id']) ?>">
          <?= $item['title'] ?>
        </a>
      </h3>
      <p><?= $item['description'] ?></p>
    </li>
  <?php endforeach ?>
</ul>
