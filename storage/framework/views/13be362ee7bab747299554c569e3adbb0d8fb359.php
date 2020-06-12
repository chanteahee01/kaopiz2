<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="postlogin" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="user"><br>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="login" name="submit">
    </form>
</body>
</html><?php /**PATH C:\MAMP\htdocs\hocvue\resources\views/loginform.blade.php ENDPATH**/ ?>