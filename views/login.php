<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Clone - Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="login-container">
    <h1>Login to Spotify Clone</h1>
    <form action="src/auth_login_spotify.php" method="post">
        <input type="text" name="name" placeholder="Username" required>
        <input type="password" name="senha" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>
<script src="../js/script.js"></script>
</body>
</html>
