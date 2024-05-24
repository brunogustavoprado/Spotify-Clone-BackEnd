<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Clone - Playlist</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="sidebar">
    <img src="" alt="Spotify Logo" class="logo">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="search.php">Search</a></li>
        <li><a href="playlist.php">Your Library</a></li>
    </ul>
</div>
<div class="main-content">
    <header>
        <input type="text" placeholder="Search...">
        <button onclick="logout()">Logout</button>
    </header>
    <section class="content">
        <h1>Your Playlist</h1>
        <div class="playlist">
            <!-- Playlist items will be displayed here -->
        </div>
    </section>
</div>
<script src="../js/script.js"></script>
</body>
</html>
