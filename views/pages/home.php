<?php

use App\Services\Page;

?>
<!doctype html>
<html lang="en">
<?php Page::part('head'); ?>
<body>
<?php Page::part('nav'); ?>

<div class="container">
    <div class="card">
        <h5 class="card-header">Home</h5>
        <div class="card-body">
            <p class="card-text">С вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту.</p>
            <a href="/login"  class="btn btn-primary">sign in</a>
        </div>
    </div>

</div>
</body>
</html>