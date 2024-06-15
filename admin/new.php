
<?php
include 'config.php';
include 'header.php'; 


if (isset($_POST['update-profile'])) 
{




    $q = $mysqli -> query("select * from new where nid ="."1");
    $r = $q -> fetch_array(MYSQLI_ASSOC);


    $title=$_POST['title'];
    $url=$_POST['url'];





    if (getimagesize($_FILES["img"]["tmp_name"])) 
    {
        $target_dir = "assets\upload\img_new";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $tmp_name=$_FILES["img"]["tmp_name"];
        $path="assets/upload/img_new/".rand().$_FILES["img"]["name"]; 
        move_uploaded_file($tmp_name, $path);

    }
    else {
        $path= $r['img']; 
    }


    $des=$_POST['des'];

    $pro_q = $mysqli -> query("update new set img='$path',url='$url',des='$des',title='$title' where nid ="."1");

    if($pro_q)
    {
        ?>

        <script>
            $(document).ready(function() {
                var toast = new Toasty();
                toast.success("Profile  Updated");
            });
        </script>
        <?php
    }
    else
    {
    ?> <script>
        $(document).ready(function() {
            var toast = new Toasty();
            toast.error("Error On Profile Update");
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
                        <h5 class="m-b-10">What's New Information</h5>
                        <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">What's New Information</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <?php 
    $q= $mysqli -> query("select * from user where email = '$email'");
    $userid_q = $q -> fetch_array(MYSQLI_ASSOC);
    ?>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>What's New Information</h5>
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
                                   <div class="card-block">
                                    <!-- <h4 class="sub-title">Basic Inputs</h4> -->
                                    <?php 
                                     $q= $mysqli -> query("select * from new where nid ="."1");

                                    while($row = $q -> fetch_array(MYSQLI_ASSOC)){?>

                                        <form method="post" action="" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="title" id="" value="<?php echo $row['title']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Url</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="url" id="lname" value="<?php echo $row['url']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                               <textarea class="ckeditor form-control" name="des"><?php echo $row['des']; ?></textarea>
                                           </div>
                                       </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Photo</label>
                                                <div class="col-sm-10">
                                                    <input type="file" accept="image/png, image/gif, image/jpeg" name="img" class="form-control">
                                                    <h6 style="color: #848282; margin-top: 5px;">Your Profile Photo</h6>
                                                    <img style="width: 150px; height: 150px; border: 1px solid #e2e2e2; border-radius: 2px;" src="<?php echo $row['img']; ?>">

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                  <button type="submit" name="update-profile" class="btn btn-default">SAVE</button>
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
</div>



</div>




<?php include 'footer.php'; ?>