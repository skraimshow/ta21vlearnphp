<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <form action="/admin/users" method="POST" enctype="multipart/form-data">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input id="email" class="input" type="text" placeholder="Email" name="email">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input id="password" class="input" placeholder="Password" name="password">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="Create">
            </div>
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>