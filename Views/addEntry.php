<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Add an entry</title>
    <!--  -->
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4 mb-4">Share your entry</h2>
        <?php
        $validation = \Config\Services::validation();
        ?>
        <div class="container-body">
            <div class="upside">
                <div class="go-back text-right">
                    <a href="<?php echo base_url("/dashboard");?>" class="btn btn-info">Go back</a>
                </div>
            </div>
            <form method="post" action="<?php echo base_url("/dashboard/addEntryValidation");?>" enctype="multipart/form-data">
                  <div class="form1">
                      <label>Topic</label>
                      <input type="text" name="header" class="form-control"/>
                  </div>
                  <div class="form1">
                    <label>Category</label>
                    <input type="text" name="category" class="form-control"/>
                  </div>
                  <div class="form1">
                      <label>Body</label>
                      <textarea type="text" name="body" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form1">
                      <label>Date</label>
                      <input type="date" name="post_added_date" class="form-control"/>
                  </div>
                  <div class="form1">
                      <label>Image</label>
                      <input type="file" name="image" class="form-control"/>
                  </div>
                  <div class="form1">
                      <button type="submit" class="btn btn-primary">Share</button>
                  </div>
            </form>
        </div>
    </div>
</body>
</html>
