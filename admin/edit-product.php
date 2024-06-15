
<?php
include 'config.php';
include 'header.php'; 


if (isset($_POST['edit_product'])) 
{


    $pname=$_POST['pname'];
    $small_description=$_POST['small_description'];
    


    
    $q = $mysqli -> query("select * from product where pid =".$_GET['pid']);
    $r = $q -> fetch_array(MYSQLI_ASSOC);


    if ($_POST['overview'] != "") {
        $overview=$_POST['overview'];
    }else{
        $overview = $r['overview'];
    }





    
    if (getimagesize($_FILES["img_one"]["tmp_name"])) 
    {
        $target_dir = "assets\upload\product";
        $target_file = $target_dir . basename($_FILES["img_one"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $tmp_name=$_FILES["img_one"]["tmp_name"];
        $path="assets/upload/product/".rand().$_FILES["img_one"]["name"]; 
        move_uploaded_file($tmp_name, $path);
    }
    else {
        $path= $r['img_one']; 
    }


    if (getimagesize($_FILES["img_two"]["tmp_name"])) 
    {
        $target_dir = "assets\upload\product";
        $target_file = $target_dir . basename($_FILES["img_two"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $tmp_name=$_FILES["img_two"]["tmp_name"];
        $path_two="assets/upload/product/".rand().$_FILES["img_two"]["name"]; 
        move_uploaded_file($tmp_name, $path_two);
    }
    else {
        $path_two= $r['img_two']; 
    }


    $pro_q = $mysqli -> query("update product set pname='$pname',small_description='$small_description',img_one='$path',img_two='$path_two',overview='$overview' where pid =".$_GET['pid']);


    if($pro_q)
    {
        ?>
        <script>
            // $(document).ready(function() {
            //     var toast = new Toasty();
            //     toast.success("Product Added");
            // });
        </script>
        <?php header("location:product.php"); ?>
        <?php
    }
    else
    {
    ?> <script>
        $(document).ready(function() {
            var toast = new Toasty();
            toast.error("Error On Product Added.");
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
                        <h5 class="m-b-10">Edit Product</h5>
                        <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Edit Product</a>
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
                                    <h5>Edit Product</h5>
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

                                    $q= $mysqli -> query("select * from product where pid =".$_GET['pid']);

                                    while($row = $q -> fetch_array(MYSQLI_ASSOC)){?>

                                        <form method="post" action="" enctype="multipart/form-data">
                                          <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Workspace Name</label>
                                            <div class="col-sm-10">
                                                <input type="text"  name="pname" class="form-control" id="pname" value="<?php echo $row['pname'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Small Description</label>
                                            <div class="col-sm-10">
                                                <input type="text"  name="small_description" value="<?php echo $row['small_description'] ?>" class="form-control" id="small_description">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Overview</label>
                                            <div class="col-sm-10">
                                             <textarea class="ckeditor form-control" name="overview"></textarea>
                                             <div style="width:100%; height: auto; margin-top: 10px; margin-bottom: 15px; border: 1px solid #e3e3e3; padding: 15px;">
                                                 <?php echo $row['overview'] ?>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">First Image</label>
                                        <div class="col-sm-10">
                                            <input accept="image/png, image/gif, image/jpeg" type="file" name="img_one" class="form-control">
                                            <img style="margin-top: 10px; border: 1px solid #e3e3e3;" height="150px" width="150px" src="<?php echo $row['img_one'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Second Image</label>
                                        <div class="col-sm-10">
                                          <input accept="image/png, image/gif, image/jpeg" type="file" name="img_two" class="form-control">
                                          <img style="margin-top: 10px; border: 1px solid #e3e3e3;" height="150px" width="150px" src="<?php echo $row['img_two'] ?>">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                      <button type="submit" name="edit_product" class="btn btn-default">SAVE</button>
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