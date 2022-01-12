<h1>Sign in</h1>
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
<form method="POST">
    <div>
        <p>
            <label for="login">Login</label>
        </p>
        <input type="text" name="login" id="login">
    </div>
    <div>

        <p>
            <label for="password">Password</label>
        </p>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <p>
            <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" id="remember">
        </p>
    </div>
    <div>
        <p>
            <input type="submit" value="Sign in">
        </p>
    </div>
</form>
