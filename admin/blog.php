<?php
include 'config.php';
include 'header.php'; 

if (isset($_POST['add_blog'])) {
    $title = $mysqli->real_escape_string($_POST['title']);
    $description = $mysqli->real_escape_string($_POST['description']);
    $content = $mysqli->real_escape_string($_POST['content']);

    $target_dir = "assets/upload/blog/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $tmp_name = $_FILES["img"]["tmp_name"];
    $path = $target_dir . rand() . $_FILES["img"]["name"];

    if (move_uploaded_file($tmp_name, $path)) {
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");

        $pro_q = $mysqli->query("INSERT INTO blog (b_id, b_title, b_description, b_content, b_thumbnail, created_at, updated_at) VALUES ('', '$title', '$description', '$content', '$path', '$created_at', '$updated_at')");

        if ($pro_q) {
            ?>
            <script>
                $(document).ready(function() {
                    var toast = new Toasty();
                    toast.success("Blog Added");
                });
            </script>
            <?php
        } else {
            ?>
            <script>
                $(document).ready(function() {
                    var toast = new Toasty();
                    toast.error("Error On Blog Addition.");
                });
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            $(document).ready(function() {
                var toast = new Toasty();
                toast.error("Error Uploading Image.");
            });
        </script>
        <?php
    }
}
?>

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Add Blog</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Add Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add Blog</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa-wrench open-card-option"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-trash close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Blog Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="title" class="form-control" placeholder="Enter Blog Title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                               <textarea class="form-control" name="description" placeholder="Enter Blog Description"></textarea>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Content</label>
                                            <div class="col-sm-10">
                                               <textarea class="ckeditor form-control" name="content"></textarea>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Thumbnail</label>
                                        <div class="col-sm-10">
                                            <input accept="image/png, image/gif, image/jpeg" type="file" name="img" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                          <button type="submit" name="add_blog" class="btn btn-default">SAVE</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>View Blog</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li>
                                            <i class="fa fa fa-wrench open-card-option"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-window-maximize full-card"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-minus minimize-card"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-refresh reload-card"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-trash close-card"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="card-block">
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Thumbnail</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $q = $mysqli->query("SELECT * FROM blog");
                                                $c = 0;
                                                while ($row = $q->fetch_array(MYSQLI_ASSOC)) {
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo ++$c; ?></th>
                                                        <td><?php echo $row['b_title']; ?></td>
                                                        <td><?php echo $row['b_description']; ?></td>
                                                        <td><img style="width: 70px; height: 70px;" src="<?php echo $row['b_thumbnail']; ?>"></td>
                                                        <td>
                                                            <a data-toggle="tooltip" data-placement="bottom" title="Edit Blog" href="edit_blog.php?id=<?php echo $row['b_id']; ?>" style="color: #123456"><i class="far fa-pencil-square-o"></i></a>
                                                            <a data-toggle="tooltip" data-placement="bottom" title="Delete Blog" href="delete_blog.php?id=<?php echo $row['b_id']; ?>" style="color: #123456" onclick="return confirm('Are you sure you want to delete this blog?');"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                } 
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>
