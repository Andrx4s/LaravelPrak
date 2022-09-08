<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница авторизации</title>
</head>
<body>
<form action="">
    @csrf
    <input type="text" name="login" placeholder="Ваш логин"><br>
    <input type="password" name="password" placeholder="ФИО"><br>
    <input type="submit" value="Авторизоваться">
</form>
</body>
</html>
