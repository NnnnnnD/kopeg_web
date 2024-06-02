<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/logindesign.css">
    <title>Login Admin</title>
</head>
<body>
    <div class="login-form">
        <h1>Login Admin</h1>
        <form action="../controller/login_process.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
