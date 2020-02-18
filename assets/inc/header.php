<!--generates header-->

<head>
    <title>
        <?php echo $page;?>
    </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/styles.css" />
    <link rel="shortcut icon" type="image/png" href="<?php echo $path;?>assets/img/favicon.png"/>
    <script rel="text/javascript" src="<?php echo $path;?>assets/script/functions.js"></script>
</head>

<body>

    <!--    nav-->
    <header>
        <div class="topnav">
            <div id="logo">
                <a class="head-a" href="index.php"><img src="assets/img/homelogo.jpg" alt="logo"></a>
            </div>
            <!--            mobile menu-->
            <div id="myNavMobile" class="overlay">
                <!--                'X' button on opened menu-->
                <a class="head-a" href="javascript:void(0)" style="top: -.45em;" class="closebtn" onclick="closeNav()">&times;</a>
                <!--list of nav pages on opened menu-->
                <div class="overlay-content">
                    <a class="head-a" href="lessons.php">Lessons</a>
                    <hr>
                    <a class="head-a" href="">Activities</a>
                    <hr>
                    <a class="head-a" href="">API</a>
                    <hr>
                    <a class="head-a" href="">About</a>
                    <hr>
                    <a class="head-a" href="login.php">Login</a>
                </div>
            </div>
            <!--            displays burger icon -->
            <div id="menuIcon" onclick="openNav()"> &#9776;
                <!--end of mobile menu-->
            </div>
            <!--desktop menu-->
            <div id="navList">
                <ul>
                    <li><a class="head-a" href="lessons.php">Lessons</a></li>
                    <li><a class="head-a" href="">Activities</a></li>
                    <li><a class="head-a" href="">API</a></li>
                    <li><a class="head-a" href="">About</a></li>
                    <li><a class="head-a" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
