<?php
include 'config.php';
include 'header.php'; 

if (isset($_POST['add_vlog'])) {
    $title = $mysqli->real_escape_string($_POST['title']);
    $video_url = $mysqli->real_escape_string($_POST['video_url']);
    $description = $mysqli->real_escape_string($_POST['description']);

    $target_dir = "assets/upload/vlog/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $tmp_name = $_FILES["img"]["tmp_name"];
    $path = $target_dir . rand() . $_FILES["img"]["name"];

    if (move_uploaded_file($tmp_name, $path)) {
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");

        $pro_q = $mysqli->query("INSERT INTO vlog (v_id, v_title, video_url, v_description, v_thumbnail, created_at, updated_at) VALUES ('', '$title', '$video_url', '$description', '$path', '$created_at', '$updated_at')");

        if ($pro_q) {
            ?>
            <script>
                $(document).ready(function() {
                    var toast = new Toasty();
                    toast.success("Vlog Added");
                });
            </script>
            <?php
        } else {
            ?>
            <script>
                $(document).ready(function() {
                    var toast = new Toasty();
                    toast.error("Error On Vlog Addition.");
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
                        <h5 class="m-b-10">Add Vlog</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Add Vlog</a></li>
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
                                    <h5>Add Vlog</h5>
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
                                            <label class="col-sm-2 col-form-label">Vlog Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="title" class="form-control" placeholder="Enter Vlog Title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Video URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="video_url" class="form-control" placeholder="Enter Video URL">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                               <textarea class="ckeditor form-control" name="description"></textarea>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Vlog Thumbnail</label>
                                        <div class="col-sm-10">
                                            <input accept="image/png, image/gif, image/jpeg" type="file" name="img" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                          <button type="submit" name="add_vlog" class="btn btn-default">SAVE</button>
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
                                <h5>View Vlog</h5>
                                <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> -->
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
                                <!-- <h4 class="sub-title">Basic Inputs</h4> -->
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
                                                $q = $mysqli->query("SELECT * FROM vlog");
                                                $c = 0;
                                                while ($row = $q->fetch_array(MYSQLI_ASSOC)) {
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo ++$c; ?></th>
                                                        <td><?php echo $row['v_title']; ?></td>
                                                        <td><?php echo $row['v_description']; ?></td>
                                                        <td><img style="width: 70px; height: 70px;" src="<?php echo $row['v_thumbnail']; ?>"></td>
                                                        <td>
                                                            <a data-toggle="tooltip" data-placement="bottom" title="Edit Vlog" href="edit_vlog.php?id=<?php echo $row['v_id']; ?>" style="color: #123456"><i class="far fa-pencil-square-o"></i></a>
                                                            <a data-toggle="tooltip" data-placement="bottom" title="Delete Vlog" href="delete_vlog.php?id=<?php echo $row['v_id']; ?>" style="color: #123456" onclick="return confirm('Are you sure you want to delete this vlog?');"><i class="far fa-trash-alt"></i></a>
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

<?php include 'footer.php'; ?>
