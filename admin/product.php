
<?php
include 'config.php';
include 'header.php'; 


if (isset($_POST['add_product'])) 
{
    $pname=$_POST['pname'];
    $small_description=$_POST['small_description'];

    $target_dir = "assets\upload\product";
    $target_file = $target_dir . basename($_FILES["img_one"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $tmp_name=$_FILES["img_one"]["tmp_name"];
    $path="assets/upload/product/".rand().$_FILES["img_one"]["name"]; 
    move_uploaded_file($tmp_name, $path);


    $target_dir = "assets\upload\product";
    $target_file = $target_dir . basename($_FILES["img_two"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $tmp_name=$_FILES["img_two"]["tmp_name"];
    $path_two="assets/upload/product/".rand().$_FILES["img_two"]["name"]; 
    move_uploaded_file($tmp_name, $path_two);

    $overview=$_POST['overview'];


    $pro_q = $mysqli -> query("INSERT INTO product(pid,pname,small_description,img_one,img_two,overview) VALUES ('','$pname','$small_description','$path','$path_two','$overview')");


    if($pro_q)
    {
        ?>
        <script>
            $(document).ready(function() {
                var toast = new Toasty();
                toast.success("Product Added");
            });        
        </script>
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
                        <h5 class="m-b-10">Add Workspace</h5>
                        <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Add Workspace</a>
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
                                    <h5>Add Workspace</h5>
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
                                            <label class="col-sm-2 col-form-label">Workspace Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="pname" class="form-control" id="pname" placeholder="Enter Workspace Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Small Description</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="small_description" class="form-control" id="small_description"  placeholder="Enter Small Description">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Overview</label>
                                            <div class="col-sm-10">
                                             <textarea class="ckeditor form-control" name="overview"></textarea>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">First Image</label>
                                        <div class="col-sm-10">
                                            <input accept="image/png, image/gif, image/jpeg" type="file" name="img_one" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Second Image</label>
                                        <div class="col-sm-10">
                                            <input accept="image/png, image/gif, image/jpeg" type="file" name="img_two" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                          <button type="submit" name="add_product" class="btn btn-default">SAVE</button>
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
                                <h5>View Workspace</h5>
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
                                                    <th>Workspace</th>
                                                    <th>Small Description</th>
                                                    <th>Image One</th>
                                                    <th>Image Two</th>
                                                     <th>Overview</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                               $q= $mysqli -> query("select * from product");

                                                $c = 0;
                                                while($row = $q -> fetch_array(MYSQLI_ASSOC)){

                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo ++$c; ?></th>
                                                        <td><?php echo $row['pname']; ?></td>
                                                        <td><?php echo $row['small_description']; ?></td>
                                                        <td><img style="width: 70px; height: 70px;" src="<?php echo $row['img_one']; ?>"></td>
                                                        <td><img style="width: 70px; height: 70px;" src="<?php echo $row['img_two']; ?>">
                                                        <td><?php echo $row['overview']; ?></td>
                                                        <td><a data-toggle="tooltip" data-placement="bottom" title="Edit Product" href="edit-product.php?pid=<?php echo $row['pid'];?>" style="color: #123456"><i class="far fa-pencil-square-o"></i></a></td>
                                                        <td><a data-toggle="tooltip" data-placement="bottom" title="Delete Product" href="delete_product.php?pid=<?php echo $row['pid'];?>" style="color: #123456"><i class="far fa-trash-alt"></i></a></td>
                                                        
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