<?php

use App\Services\Page;

?>
<!doctype html>
<html lang="en">
<?php Page::part('head'); ?>
<body>
<?php Page::part('nav'); ?>

<div class="container">
    <form class="mt-4" action="/auth/register" method="post" enctype="multipart/form-data">
        <div class="form-group ">
            <h1>Register</h1>

            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="user_name">User Name</label>
            <input type="text" name="user_name" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="full_name">Full name</label>
            <input type="text" name="full_name" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>