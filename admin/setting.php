
<?php
include 'config.php';
include 'header.php'; 


$email = $_SESSION['email'];

$q= $mysqli -> query("select * from user where email = '$email'");

$userid_q =  $q -> fetch_array(MYSQLI_ASSOC);



if (isset($_POST['chg_pwd'])) 
{

    $pwd=$_POST['pwd'];

   
    $q = $mysqli -> query("update user set password='$pwd' where uid =".$userid_q['uid']);

    if($q)
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
                        <h5 class="m-b-10">Settings</h5>
                        <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Settings</a>
                        </li>
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
                                    <h5>Settings</h5>
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
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Change Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                              <button type="submit" name="chg_pwd" class="btn btn-default">SAVE</button>
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
</div>



</div>




<?php include 'footer.php'; ?>