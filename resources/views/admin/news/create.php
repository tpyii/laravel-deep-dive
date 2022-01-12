<h1>Create a News Article</h1>
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
<form>
    <div>
        <p>
            <label for="title">Title</label>
        </p>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <p>
            <label for="description">Description</label>
        </p>
        <textarea name="description" id="description"></textarea>
    </div>
    <div>
        <p>
            <label for="body">Body</label>
        </p>
        <textarea name="body" id="body"></textarea>
    </div>
    <div>
        <p>
            <input type="submit" value="Save">
        </p>
    </div>
</form>
