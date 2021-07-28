<?php
$data = $data ?? NULL;
$pager = $pager ?? NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="<?php echo base_url() ?>/assets/css/dashboard.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class = "container" id="dashboard">
    <div class="home">
        <div class="home text-left">
            <a href="<?php echo base_url("/home")?>" class="btn  btn-outline-primary btn-lg">Home</a>
        </div>
    </div>

    <div class="posts">

            <div class="table">
                <table class="table-striped">
                    <tr>
                        <th><a href="<?php echo base_url("/dashboard/editMe")?>" class="btn  btn-outline-secondary ">Me</a></th>
                        <th>Post Number</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th><a href="<?php echo base_url("/dashboard/addEntry")?>" class="btn  btn-primary ">Create</a></th>
                        <th><a href="<?php echo base_url("/dashboard/logout")?>" class="btn  btn-outline-secondary ">Log out</a></th>

                    </tr>
                    <?php
                        if($data){
                            foreach ($data as $post){
                                echo'
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>'.$post["post_id"].'</td>
                                    <td>'.$post['category'].'</td>
                                    <td>'.$post["header"].'</td>
                                    <td>'.$post["body"].'</td>
                                    <td>'.$post["post_added_date"].'</td>  
                                    <td><img src = "'.base_url('/images/'.$post["image"]).'"  width="150"></td>
                                    <td><a href="'.base_url("dashboard/editEntry/".' '.$post["post_id"]).'" class="btn btn-sm btn-warning">Edit</a></td>
                                    <td><a href="'.base_url("dashboard/deleteEntry/".' '.$post["post_id"]).'" class="btn btn-sm btn-danger">Delete</a></td>                                
                                </tr>';
                            }
                        }
                    ?>
                </table>
            </div>
    </div>
    <div class="pagenumbering">
        <?php if($pager) :?>
            <?=$pager->links() ?>

        <?php endif; ?>
    </div>
</div>
</body>
</html>
