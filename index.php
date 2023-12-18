<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Билеты</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <section id = 'wrapper'>
        <form name = 'form' form method = 'get' action = 'path.php'>
        <table align="center">
            <caption align="center"> Вход </caption>
            <tr>            
                <th>Почта: <input type = "textbox" placeholder="example@example.com" name = "email_txt" id = "email_txt" required pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"></th>                
            </tr>
            <tr>                
                <th>Пароль: <input type = "password" placeholder="********" name = "pass_txt" id = "pass_txt" required pattern="^[a-zA-Z0-9_.-]*$"></th>
            </tr>
            </tr>
            <tr>            
                <th align="center"><input type="submit" size="10" name="button_log" value="Войти"></th>                
            </tr>
            <tr>
                <th><a href="registration.php">Зарегистрироваться</a></th>
            </tr>
            
        </form>
</body>
</html>