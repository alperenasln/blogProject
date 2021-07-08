<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
    header("location: index.php");//Redirecting
    exit();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Blog.</title>
    <link href="css/input.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="upside">
    <div>
        <h1 class="name-text-box">RAFAT IVAN </h1>

    </div>
    <div class="profile-photo"></div>

    <div>
        <h2 class="sub-text"> The European languages are members of the same family.Their seperate existance is a myth
            <br>
            muslimmahin@gmail.com
        </h2>
        <h2 class="logout" id="logout"><a href="logout.php">Log out</a></h2>
    </div>
</div>

<div class="container">
    <div class="posts">
        <div class="post-group">
            <div class="text-box">
                <img src="https://media.bantmag.com/wp-content/uploads/s/spawn-800x533.jpg">
                <div class="post-meta">
                    <span class="category">Inspiration</span>
                    <span class="post-date">10 April 2016</span>
                    <span class="post-date">Author</span>
                </div>
                <h5>Lorem ipsum dolor sit amet.</h5>
                <p>
                    He lives with his wife and their three grown-up children in a village called Trøllanes on the most
                    northerly tip of the island. The village sits in a hollow, smoothly rounded by glacial ice. To get to the
                    village you
                    must drive through a narrow one-way
                </p>
                <h2 class="button"> Read more</h2>
            </div>

            <div class="text-box">
                <img src="https://media.bantmag.com/wp-content/uploads/s/spawn-800x533.jpg">
                <div class="post-meta">
                    <span class="category">Inspiration</span>
                    <span class="post-date">10 April 2016</span>
                    <span class="post-date">Author</span>
                </div>
                <h5 style="font-size: 30px;">
                    Lorem ipsum dolor sit amet.
                </h5>
                <p>
                    He lives with his wife and their three grown-up children in a village called Trøllanes on the most
                    northerly
                    tip of the island. The village sits in a hollow, smoothly rounded by glacial ice. To get to the
                    village you
                    must drive through a narrow one-way
                </p>
                <h2 class="button"> Read more</h2>
            </div>

            <div class="text-box">
                <img src="https://media.bantmag.com/wp-content/uploads/s/spawn-800x533.jpg">
                <div class="post-meta">
                    <span class="category">Inspiration</span>
                    <span class="post-date">10 April 2016</span>
                    <span class="post-date">Author</span>
                </div>
                <h5 style="font-size: 30px;">
                    Lorem ipsum dolor sit amet.
                </h5>
                <p>
                    He lives with his wife and their three grown-up children in a village called Trøllanes on the most
                    northerly
                    tip of the island. The village sits in a hollow, smoothly rounded by glacial ice. To get to the
                    village you
                    must drive through a narrow one-way
                </p>
                <h2 class="button"> Read more</h2>
            </div>
        </div>

        <div class="pagination">
            <ul>
                <li class="num-button selected"><a>1</a></li>
                <li class="num-button"><a>2</a></li>
                <li class="num-button"><a>3</a></li>
                <li class="more-text">...</li>
                <li class="num-button"><a>10</a></li>
                <li class="num-button selected"><a>>></a></li>
            </ul>
        </div>

    </div>
    <div class="side-bar">
        <div class="wrap">
            <div class="search">
                <div>
                    <input type="text" class="searchTerm" placeholder="Search name here">
                </div>
                <input type="submit" class="searchButton">
            </div>
        </div>
        <div class="recent-post">
            <h3>

                Recent Post
            </h3>
            <div class="recent-post-box">

                <img src="https://www.erenyapidekorasyon.com.tr/wp-content/uploads/2018/11/S-13.jpg" class="mini-pict">

                <h4>
                    <div class="post-meta">
                        <span class="category">Mountain</span>
                        <span class="post-date">11 June 2009</span>
                    </div>
                </h4>
                <h5
                    style="font-size: 17px;">
                    Lorem ipsum dolor sit amet.
                </h5>
            </div>

            <div class="recent-post-box">
                <img src="https://www.erenyapidekorasyon.com.tr/wp-content/uploads/2018/11/S-13.jpg" class="mini-pict">
                <h4>
                    <div class="post-meta">

                        <span class="category">Mountain</span>

                        <span class="post-date">11 June 2009</span>

                    </div>
                </h4>
                <h5
                    style="font-size: 17px;">
                    Lorem ipsum dolor sit amet.
                </h5>
            </div>
        </div>
        <div class="tags">
            <h3>
                Tags
            </h3>
            <ul class="items">
                <li> <div class="tag"> Animal</div></li>
                <li> <div class="tag"> Personal</div></li>
                <li> <div class="tag"> Chess</div></li>
                <li> <div class="tag"> Funny</div></li>
                <li> <div class="tag"> Gaming</div></li>
                <li> <div class="tag"> Personal</div></li>
                <li> <div class="tag"> Travel</div></li>
                <li> <div class="tag"> Wallpaper</div></li>
                <li> <div class="tag"> Zoo</div></li>
            </ul>
        </div>
        <div class="contact">
            <h3>
                Stay in touch
            </h3>
            <div class="inputPart">
                <div>

                    <input type="text" class="emailTerm" placeholder="Enter your Email">

                </div>
            </div>
            <div class="email-button">
                <h2 class="button"> Subscribe</h2>
            </div>
        </div>


    </div>
</div>

</body>
<html>
