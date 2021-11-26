<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        .Table{
            width: 40vw;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
            border: 10px solid #cccccc;
        }
    </style>
</head>
<body>
    <div class="chess-board">
        <?php
            echo '<table border="1" cellpadding="3" cellspacing="0">';
                for($i=1;$i<=6;$i++)
                {
                    echo "<tr>";
                    for ($j=1;$j<=5;$j++)
                    {
                        echo "<td>$i * $j = ".$i*$j."</td>";
                    }
                    echo "</tr>";
                }
            echo "</table>"
        ?>
    </div>
</body>
</html>