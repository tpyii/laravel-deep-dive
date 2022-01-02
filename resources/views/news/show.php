<h1><?= $item['title'] ?></h1>
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
<p><?= $item['body'] ?></p>
Category: 
<a href="<?= route('category.news.index', $item['category']['id']) ?>">
    <strong><?= $item['category']['title'] ?></strong>
</a>
