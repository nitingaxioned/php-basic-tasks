<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess board</title>
    <style>
        .chess-board{
            width: 40vw;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
            border: 10px solid #cccccc;
        }

        .box {
            height: 5vw;
            width: 5vw;
        }

        .black-box{ background-color: #000; }
    </style>
</head>
<body>
    <div class="chess-board">
        <?php
            for($i=1;$i<=8;$i++)
            {
                for($j=1;$j<=8;$j++)
                {
                    if(($i+$j)%2==0)
                    {
                        echo '<div class="box"></div>';
                    }
                    else
                    {
                        echo '<div class="box black-box"></div>';
                    }
                }
            }
        ?>
    </div>
</body>
</html>