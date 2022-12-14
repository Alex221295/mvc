<?php
use App\Services\Page;
?>
<!doctype html>
<html lang="en">
<?php Page::part('head');?>
<body>
<?php Page::part('nav');?>

<div class="container">
    <form method="post" action="\auth\register" enctype="multipart/form-data">
        <div class="form-group mt-4">
            <h1>Login</h1>

            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
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