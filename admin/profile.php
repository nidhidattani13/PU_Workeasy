
<?php
include 'config.php';
include 'header.php'; 


if (isset($_POST['update-profile'])) 
{



    $q= $mysqli -> query("select * from user where email = '$email'");
    $userid_q = $q -> fetch_array(MYSQLI_ASSOC);



    $q = $mysqli -> query("select * from profile where uid =".$userid_q['uid']);
    $r = $q -> fetch_array(MYSQLI_ASSOC);


    $fname=$_POST['fname'];
    $lname=$_POST['lname'];





    if (getimagesize($_FILES["profile-img"]["tmp_name"])) 
    {
        $target_dir = "assets\upload\profile";
        $target_file = $target_dir . basename($_FILES["profile-img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $tmp_name=$_FILES["profile-img"]["tmp_name"];
        $path="assets/upload/profile/".rand().$_FILES["profile-img"]["name"]; 
        move_uploaded_file($tmp_name, $path);

    }
    else {
        $path= $r['pimg']; 
    }


    $occ=$_POST['occ'];

    $pro_q = $mysqli -> query("update profile set pimg='$path',fname='$fname',lname='$lname',occ='$occ' where uid =".$userid_q['uid']);

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
                        <h5 class="m-b-10">Profile Information</h5>
                        <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Profile Information</a>
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
                                    <h5>Profile Information</h5>
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
                                     $q= $mysqli -> query("select * from profile where uid =".$userid_q['uid']);

                                    while($row = $q -> fetch_array(MYSQLI_ASSOC)){?>

                                        <form method="post" action="" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="fname" id="fname" value="<?php echo $row['fname']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Last Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="lname" id="lname" value="<?php echo $row['lname']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Occupation / Business</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="occ" class="form-control" id="lname" value="<?php echo $row['occ']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Profile Photo</label>
                                                <div class="col-sm-10">
                                                    <input type="file" accept="image/png, image/gif, image/jpeg" name="profile-img" class="form-control">
                                                    <h6 style="color: #848282; margin-top: 5px;">Your Profile Photo</h6>
                                                    <img style="width: 150px; height: 150px; border: 1px solid #e2e2e2; border-radius: 2px;" src="<?php echo $row['pimg']; ?>">

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