<?php
include 'config.php';
include 'header.php'; 

if (isset($_POST['edit_vlog'])) {
    $title = $mysqli->real_escape_string($_POST['title']);
    $video_url = $mysqli->real_escape_string($_POST['video_url']);
    $description = $mysqli->real_escape_string($_POST['description']);

    $q = $mysqli->query("SELECT * FROM vlog WHERE v_id =" . $_GET['id']);
    $r = $q->fetch_array(MYSQLI_ASSOC);

    if ($_POST['description'] != "") {
        $description = $_POST['description'];
    } else {
        $description = $r['v_description'];
    }

    if (getimagesize($_FILES["img"]["tmp_name"])) {
        $target_dir = "assets/upload/vlog/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $tmp_name = $_FILES["img"]["tmp_name"];
        $path = $target_dir . rand() . $_FILES["img"]["name"];
        move_uploaded_file($tmp_name, $path);
    } else {
        $path = $r['v_thumbnail'];
    }

    $updated_at = date("Y-m-d H:i:s");

    $pro_q = $mysqli->query("UPDATE vlog SET v_title='$title', video_url='$video_url', v_description='$description', v_thumbnail='$path', updated_at='$updated_at' WHERE v_id =" . $_GET['id']);

    if ($pro_q) {
        ?>
        <script>
            window.location.href = 'vlog.php';        
        </script>
        <?php
    } else {
        ?>
        <script>
            $(document).ready(function() {
                var toast = new Toasty();
                toast.error("Error On Vlog Update.");
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
                        <h5 class="m-b-10">Edit Vlog</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Edit Vlog</a></li>
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
                                    <h5>Edit Vlog</h5>
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
                                    <?php 
                                    $q = $mysqli->query("SELECT * FROM vlog WHERE v_id =" . $_GET['id']);
                                    while ($row = $q->fetch_array(MYSQLI_ASSOC)) { ?>
                                        <form method="post" action="" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Vlog Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="title" class="form-control" value="<?php echo $row['v_title'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Video URL</label>
                                                <div class="col-sm-10">
                                                    <input type="text" required name="video_url" class="form-control" value="<?php echo $row['video_url'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                   <textarea class="ckeditor form-control" name="description"><?php echo $row['v_description'] ?></textarea>
                                               </div>
                                           </div>
                                           <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-10">
                                                <input accept="image/png, image/gif, image/jpeg" type="file" name="img" class="form-control">
                                                <img style="margin-top: 10px; border: 1px solid #e3e3e3;" height="150px" width="150px" src="<?php echo $row['v_thumbnail'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                              <button type="submit" name="edit_vlog" class="btn btn-default">SAVE</button>
                                          </div>
                                      </div>
                                  </form>
                              <?php } ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<?php include 'footer.php'; ?>
