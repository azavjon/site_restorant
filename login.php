<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body{
        background: #f5f5f5;
    }
    .form_auth_block{
        width: 500px;
        height: 340px;
        margin: 0 auto;
        background: #0b1557;
        background-size: cover;
        border-radius: 4px;
    }

    .form_auth_block label{
        display: block;
        text-align: center;
        padding: 10px;
        background: #ffffff;
        opacity: 0.7;
        font-weight: 600;
        margin-bottom: 10px;
        margin-top: 10px;
    }
    .form_auth_block input{
        display: block;
        margin: 0 auto;
        width: 80%;
        height: 45px;
        border-radius: 10px;
        border:none;
        outline: none;
    }
    input:focus {
        color: #100a0a;
        border-radius: 10px;
        border: 2px solid #436fea;
    }
</style>
<body>
<div class="form_auth_block">
    <div class="form_auth_block_content">
        <form method="POST" >
            <label>Введите Ваш имейл</label>
            <input type="text" name="login" placeholder="Введите Ваш имейл" required >
            <label>Введите Ваш пароль</label>
            <input type="password" name="password" placeholder="Паролро дохил кунед" required ><br>
            <input name="submit" type="submit" value="Даромадан"><br>
            <a href="index.php"><input type="button" value="аз нав бақайдгирӣ"></a>
        </form>
    </div>
</div>
</body>
</html>
