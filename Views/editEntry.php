<?php
$data = $post_data??NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Post</title>

</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4 mb-4">Edit your post</h2>
        <div class="edit-header">
            <div class="go-back text-right">
                <a href="<?php echo base_url("/dashboard");?>" class="btn btn-info">Go back</a>
            </div>
        </div>
            <div class="edit-body">
                <form method="post" action="<?php echo base_url('dashboard/editEntryValidation'); ?>" enctype="multipart/form-data">
                    <div class="form-part">
                        <label>Topic</label>
                        <input type="text" name="header" class="form-control" value="<?php echo $data['header']; ?>">
                    </div>
                    <div class="form-part">
                        <label>Category</label>
                        <input type="text" name="category"  class="form-control" value="<?php echo $data['category']; ?>">
                    </div>
                    <div class="form-part">
                        <label>Body</label>
                        <textarea type="text" name="body" rows="10"  class="form-control" ><?php echo $data['body']; ?></textarea>
                    </div>
                    <div class="form-part">
                        <label>Date</label>
                        <input type="date" name="post_added_date" class="form-control" value="<?php echo $data['post_added_date']; ?>">
                    </div>
                    <div class="form-part">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control"value="<?php echo $data['image']; ?>">
                    </div>
                    <div class="form-part">
                        <input type="hidden" name="post_id"  value="<?php echo $data['post_id']; ?>">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
    </div>
</body>

</html>
