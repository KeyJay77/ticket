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
        
<?php

    use App\Event;

    $base = new SQLite3("databases/db.py");
    $query = "SELECT * FROM events";
    if ($result = $link->query($query)) {
        echo "<form name ='send' method='get' action='info.php'>
            <table>
                <tr>
                    <th>Название Матча</th>
                    <th>Стадион</th>
                    <th>Время</th>
                    <th>Минимальная цена</th>
                </tr>
        ";
        foreach ($result as $key => $row) {
            $event = new Event($row["matchname"],
            $row["stadium"],
            $row["matchdate"],
            $row["price"]);
            echo<<<HTML
            <tr>
                <td><input type="submit" value="$event->matchname"></td>
                <td>{$event->stadium}</td>
                <td>{$event->matchdate}</td>
                <td>{$event->price}</td>
            </tr>
HTML
        }
    }
?>
            
        </form>
</body>
</html>