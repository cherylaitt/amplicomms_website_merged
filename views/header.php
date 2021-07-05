<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/custom.css">

    <link rel='stylesheet' type='text/css' href='../css/style.css'>

    <title>Amplicomms</title>
</head>
<style>
    .font_7 {
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        font-size: 15px;
        line-height: 1.4em;
        font-family: helvetica-w01-light, helvetica-w02-light, sans-serif;
    }

    .font_8 {
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 1.4em;
        font-family: helvetica-w01-light, helvetica-w02-light, sans-serif;
    }

    a:link,
    a:active {
        color: rgb(47, 46, 46);
        text-decoration: underline;
    }

    body {
        color: rgb(96, 94, 94);
    }

    .grid-container {
        display: grid;
        position: static;
        height: auto;
        width: 100%;
        background-color: #f5f5f5;
    }

    .item1 {
        margin: 52px 0px 10px 0px;
        left: 60px;
        position: relative;
        grid-area: 1/ 1/ 2/ 2;
        justify-self: start;
        align-self: start;

    }

    .item2 {
        margin: 52px 0px 10px 0px;
        left: 246px;
        position: relative;
        grid-area: 1/ 1/ 2/ 2;
        justify-self: start;
        align-self: start;
    }

    .item3 {
        margin: 130px 0px 10px 0px;
        left: 60px;
        position: relative;
        grid-area: 2/ 1/ 3/ 2;
        justify-self: start;
        align-self: start;
        justify-content: space-between;
        width: 100px;
    }

    .item4 {
        margin: 0px 0px 10px 0px;
        left: 246px;
        position: relative;
        grid-area: 2/ 1/ 3/ 2;
        justify-self: start;
        align-self: start;
        justify-content: space-between;
        width: 300px;
    }

    .item5 {
        margin: 0px 0px 68px 0px;
        left: 60px;
        position: relative;
        grid-area: 3/ 1/ 4/ 2;
        justify-self: start;
        align-self: start;
        justify-content: space-between;
        width: 100px;
    }

    .item6 {
        margin: 0px 0px 10px 0px;
        left: 246px;
        position: relative;
        grid-area: 3/ 1/ 4/ 2;
        justify-self: start;
        align-self: start;
        justify-content: space-between;
        width: 300px;
    }

    .item7 {
        margin: 50px 0px 28px 0px;
        left: 626px;
        position: relative;
        grid-area: 1/ 1/ 2/ 2;
        justify-self: start;
        align-self: start;
        justify-content: space-between;
        width: 300px;
    }

    .item8 {
        margin: 50px 0px 28px 0px;
        left: 0px;
        position: relative;
        grid-area: 2/ 5/ 2/ 7;
        justify-self: start;
        align-self: start;
        justify-content: space-between;
        width: 300px;
    }

    .item9 {
        margin: 7px 0px 10px 0px;
        left: 831px;
        position: relative;
        grid-area: 3/ 1/ 4/ 2;
        justify-self: start;
        align-self: start;
    }

    .item10 {
        margin: 7px 0px 10px 0px;
        left: 880px;
        position: relative;
        grid-area: 3/ 1/ 4/ 2;
        justify-self: start;
        align-self: start;
    }
</style>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../images/logo.jpg" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="corder.php">Cordless</a></li>
                            <li><a class="dropdown-item" href="#">Corded</a></li>
                            <li><a class="dropdown-item" href="#">Mobiles</a></li>
                            <li><a class="dropdown-item" href="#">TV Headsets</a></li>
                            <li><a class="dropdown-item" href="#">Accessories</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="slideshow.php">Downloads/Doc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="support.php">Support</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <!--Navigation bar ends-->