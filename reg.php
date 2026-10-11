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
            <h2>Регистрация</h2>
            <p>Пожалуйста зарегистрируйтесь</p>

            <form method="post" action="/lib/reg.php">
                <div class="inline">
                    <div>
                        <label>First Name</label>
                        <input type="text" name="fname">
                    </div>
                    <div>
                        <label>Sur Name</label>
                        <input type="text" name="sname">
                    </div>
                </div>
                <label>Email Address</label>
                <input type="email" class="one-line" name="email">

                <label>Password</label>
                <input class="password" name="password"></input>

                <button type="submit">Зарегаться</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php" ?>
</body>

</html>