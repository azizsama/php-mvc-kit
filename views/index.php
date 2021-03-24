<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('app.name', 'My MVC App'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4">
        <h5 class="mb-4">
            Index
            <div class="float-right">
                <a href="<?php echo url('/welcome') ?>" class="btn btn-primary btn-sm">Go!</a>
            </div>
        </h5>
        <?php component('card', [
            'title' => 'Card Title',
            'body' => 'Card Body'
        ]); ?>
    </div>
</body>

</html>