<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php" ?>

    <div class="feedback">
        <div class="container">
            <h2>Авторизация</h2>
            <p>Пожалуйста авторизуйтесь</p>

            <form method="post" action="/lib/log.php">
                <label>Email Address</label>
                <input type="email" class="one-line" name="email">

                <label>Password</label>
                <input class="password" name="password"></input>

                <button type="submit">Авторизоваться</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php" ?>
</body>

</html>