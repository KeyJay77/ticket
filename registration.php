<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Регистрация</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <section id = 'wrapper'>
    <form name = 'form' form method = 'get' action = 'path.php'>
        <table align="center">
            <caption align="center"> Регистрация </caption>
            
            <tr>                
                <th>Имя: <input type = "textbox" placeholder="Ivan" name = "name_reg" id = "name_reg" required pattern="^[a-zA-Z]*$"></th>
            </tr>
            <tr>                
                <th>Фамилия: <input type = "textbox" placeholder="Ivanov" name = "lastname_reg" id = "lastname_reg" required pattern="^[a-zA-Z]*$"></th>
            </tr>
            </tr>
            <tr>            
                <th>Почта: <input type = "textbox" placeholder="example@example.com" name = "email_reg" id = "email_reg" required pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"></th>                
            </tr>
            <tr>            
                <th>Пароль: <input type = "password" placeholder="********" name = "pass_reg" id = "pass_reg" required pattern="^[a-zA-Z0-9_.-]*$"></th>                
            </tr>
            <tr>            
                <th align="center"><input type="submit" size="10" name="button_reg" value="Зарегистрироваться"></th>                
            </tr>
            <tr>
                <th><a href="index.php">На главную</a></th>
            </tr>           
            
        </form>

</body>
</html>