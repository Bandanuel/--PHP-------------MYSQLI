<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body><?php require_once "blocks/header.php" ?>
    
        <div class="container trending">
            <h3>Currently Trending Games</h3>

            <div class="games">
                <?php
                 require_once "lib/connect.php";
                 $sql = mysqli_query($connect,"SELECT * FROM trends ORDER BY id DESC");
                 
                 $games = mysqli_fetch_all($sql, MYSQLI_ASSOC); 
                 foreach($games as $game) {
                    echo'
                        <div class="block">
                    <img src="/img/'.$game['image'].'" alt="">
                    <span><img src="/img/fire.svg" alt="">'.$game['followers'].' Followers</span>
                </div>
                    ';
                 }
                ?>
                
                
            </div>
        </div>
<?php require_once "blocks/footer.php" ?>
</body>

</html>