<?php
$data = $data ?? NULL;
$publicData = $publicData ?? NULL;

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

                        echo '                            
                                <img src = "'.base_url('/images/'.$data["image"]).'" >
                                    <div class="post-meta" >
                                        <span class="category" > '.$data['category'].'</span >
                                        <span class="post-date" > '.$data["post_added_date"].' </span >
                                        <span class="author" > '.$publicData->name.'</span >
                                    </div >
                                    <h5 > '.$data["header"].'</h5 >
                                    <h2 >'.$data["body"].'</h2>                                    
                                    
                            ';

                }
                ?>
            </div>
        </div>


    </div>

</div>

</body>
<html>

