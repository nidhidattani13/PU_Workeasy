
<?php
include 'config.php';
include 'header.php'; 

if (isset($_POST['add-client'])) 
{


    $name=$_POST['name'];

    $target_dir = "assets\upload\client";
    $target_file = $target_dir . basename($_FILES["logo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $tmp_name=$_FILES["logo"]["tmp_name"];
    $path="assets/upload/client/".rand().$_FILES["logo"]["name"]; 
    move_uploaded_file($tmp_name, $path);


    $pro_q = $mysqli -> query("INSERT INTO client(cli_id,name,logo) VALUES ('','$name','$path')");

        if($pro_q)
        {
            ?>
            <script>
                $(document).ready(function() {
                    var toast = new Toasty();
                    toast.success("Gallery Photo Added");
                });
            </script>
            <?php
        }
        else
        {
        ?> <script>
            $(document).ready(function() {
                var toast = new Toasty();
                toast.error("Error on gallery Photo Add.");
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
                        <h5 class="m-b-10">Client</h5>
                        <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Client</a>
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
                                    <h5>Client</h5>
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
                                            <label class="col-sm-2 col-form-label">Client Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="name" class="form-control" id="name" placeholder="Enter Client Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Client Logo</label>
                                            <div class="col-sm-10">
                                                <input required accept="image/png, image/gif, image/jpeg" type="file" name="logo" class="form-control"> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                              <button type="submit" name="add-client" class="btn btn-default">SAVE</button>
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









<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>View Client</h5>
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


                                <div class="row">
                                    <?php 

                                    $q= $mysqli -> query("select * from client");


                                    while($row = $q -> fetch_array(MYSQLI_ASSOC)){
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="card">
                                              <img style="width: 100%; height: auto;" class="card-img-top" src="<?php echo $row['logo']; ?>">
                                              <div class="card-body">
                                                 <h6 style="text-align: center;"><?php echo $row['name']  ?></h6>
                                                 <a href="delete_client.php?cli_id=<?php echo $row['cli_id'];?>" style="display: block; margin: 0 auto;" class="btn btn-primary"><i class="far fa-trash-alt"></i> Delete</a>
                                             </div>
                                         </div>
                                     </div>
                                     <?php
                                 }
                                 ?>
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