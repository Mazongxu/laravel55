<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(\Session::has('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo \Session::get('error') ?>
        </div>
    <?php endif;    ?>
    <form action="/userinfo" method="post">
        <input type="text" name="username" value="{{old('username')}}">
        <input type="text" name="password" value="{{old('password')}}">
        {{csrf_field()}}
        <button>提交</button>
    </form>
    
</body>
</html>