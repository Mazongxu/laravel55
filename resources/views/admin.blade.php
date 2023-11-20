<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php if(\Session::has('info')): ?>
    <div class= "alert alert-success" role="alert">
        <?php echo \Session::get('info') ?> 
    </div>
    <?php endif;?>
    <div class="containner">
        
    </div>
</body>
</html>