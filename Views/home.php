<?php
$data = $data ?? NULL;
$publicData = $publicData ?? NULL;
$pager = $pager ?? NULL;
$data2 = $data2 ?? NULL;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Blog</title>
    <link href="<?php echo base_url() ?>/assets/css/input.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div class="upside">
    <div>
        <h1 class="name-text-box"><a href="<?php echo base_url('/home')?>"><?php echo $publicData->name ;?></a> </h1>
    </div>
    <img src="<?php echo $publicData->profile_photo; ?>" class="profile-photo">

    <div>
        <h2 class="sub-text"> <?php echo $publicData->slogan ;?>
            <br>
            <?php echo $publicData->email ;?>
        </h2>
    </div>
</div>

<div class="container">
    <div class="posts">
        <div class="post-group">
            <div class="text-box">
                <h5>
                <?php
                    echo (isset($_GET['q'])) ? ' Search results for "' . $_GET['q'] . '"' : '' ;

                ?>
                </h5>
                <?php
                if($data){
                        foreach ($data as $post) {
                            echo '                            
                                <img src = "'.base_url('/images/'.$post["image"]).'" >
                                    <div class="post-meta" >
                                        <span class="category" > '.$post['category'].'</span >
                                        <span class="post-date" > '.$post["post_added_date"].' </span >
                                        <span class="author" > '.$publicData->name.'</span >
                                    </div >
                                    <h5 > '.$post["header"].'</h5 >
                                    <p>'.$post["body"].'</p>                                    
                                    <h2><a href=" '.base_url("/post/".$post['post_id']).'" class="button"> Read more</a> </h2 >
                            '  ;
                        }
                    }
                ?>
            </div>
        </div>

        <div class="pages">
            <div class="pagenumbering">
                <?php if($pager) :?>
                <?=$pager->links()  ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="side-bar">
        <div class="wrap">
            <div class="search">
                <form method="get" action="<?php echo base_url("/home");?>">
                    <div>
                        <input type="text" class="searchTerm" name="q" placeholder="Search name here"<?php echo (isset($_GET['q'])) ? ' value="' . $_GET['q'] . '"' : '' ?>>
                    </div>
                    <button type="submit" class="searchButton"></button>
                </form>
            </div>
        </div>
        <div class="recent-post">
            <h3>
                Recent Post
            </h3>
            <div class="recent-post-box">
                <?php
                if($data2){
                    foreach ($data2 as $post) {
                        echo '
                                <img src = "'.base_url('/images/'.$post["image"]).'" class="mini-pict">                
                                <h4>
                                     <div class="post-meta">
                                         <span class="category">'.$post['category'].'</span>
                                         <span class="post-date">'. $post["post_added_date"].'</span>
                                     </div>
                                </h4>
                                <h5
                                     style="font-size: 17px;"><a href="'. base_url("/post/".$post['post_id']).'">  '. $post["header"].'</a>
                                 </h5>
                        ';
                    }
                }
            ?>
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
