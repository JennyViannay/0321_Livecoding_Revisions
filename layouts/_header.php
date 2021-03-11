<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon super site dynamique</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/12c728ad22.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">BrandNav</a></li>
                <li><a href="page2.php">Page 2</a></li>
                <li><a href="page3.php">Page 3</a></li>
                <li><a href="page4.php">Page 4</a></li>
                <li><button onclick="darkMode()" class="btn">Dark mode</button></li>
            </ul>
        </nav>
    </header>
    <div class="topnav">
        <a href="index.php" class="active">BrandNav</a>
        <div id="myLinks">
            <a href="page2.php">Page 2</a>
            <a href="page3.php">Page 3</a>
            <a href="page4.php">Page 4</a>
            <button onclick="darkMode()" class="btn">Dark mode</button>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="burgerMenu()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
