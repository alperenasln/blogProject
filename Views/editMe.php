<?php
$data = $data??NULL;
$public_user_data = $public_user_data ?? NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Me</title>

</head>
<body>
<div class="container">
    <h2 class="text-center mt-4 mb-4">Edit author</h2>
    <div class="edit-header">
        <div class="go-back text-right">
            <a href="<?php echo base_url("/dashboard");?>" class="btn btn-info">Go back</a>
        </div>
    </div>
    <div class="edit-body">
        <form method="post" action="<?php echo base_url('dashboard/editMe/'); ?>" enctype="multipart/form-data">
            <div class="form-part">
                <label>Fullname</label>
                <input type="text" name="name" class="form-control" value="<?php echo $public_user_data->name; ?>">
            </div>
            <div class="form-part">
                <label>Slogan</label>
                <input type="text" name="slogan"  class="form-control" value="<?php echo $public_user_data->slogan; ?>">
            </div>
            <div class="form-part">
                <label>Email</label>
                <input type="text" name="email"  class="form-control" value="<?php echo $public_user_data->email; ?>">
            </div>

            <div class="form-part">
                <label>Profile Photo URL</label>
                <input type="text" name="profile_photo" class="form-control"value="<?php echo $public_user_data->profile_photo; ?>">
            </div>
            <div class="form-part">
                <input type="hidden" name="id"  value="<?php echo $public_user_data->id; ?>">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
</div>
</body>

</html>

