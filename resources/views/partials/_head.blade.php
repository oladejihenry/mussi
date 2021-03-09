<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Musical</title>
</head>
<body>
<header class="hero"> 
    <div id="monstaNav" class="sidenav" style="width:0px;">
        <a href="javascript:void(0)" class="closebtn" onlick="closeNav()"></a>
        <a href="/">Home</a>
        <a href="music">Music</a>
    </div>
    <div id="body" class>
        <div id="navbar" class="navbar">
            <div class="col">
                <div class="animatedMenu" onclick="animatedMenu(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Login</a></li>
                    <li><a href="#" class="button">Register</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header> 