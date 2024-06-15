
<?php
include 'config.php';
include 'header.php'; 

if (isset($_POST['edit_blog'])) 
{


    $title=$_POST['title'];    



    $q= $mysqli -> query("select * from blog where bid =".$_GET['bid']); 

    $r =  $q -> fetch_array(MYSQLI_ASSOC);


    if ($_POST['description'] != "") {
        $description=$_POST['description'];
    }else{
        $description = $r['description'];
    }


    if (getimagesize($_FILES["img"]["tmp_name"])) 
    {
        $target_dir = "assets\upload\blog";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $tmp_name=$_FILES["img"]["tmp_name"];
        $path="assets/upload/blog/".rand().$_FILES["img"]["name"]; 
        move_uploaded_file($tmp_name, $path);
    }
    else {
        $path= $r['img']; 
    }
    
    $slug = str_replace(" ","-",$_POST['slug']);
    
    $pro_q = $mysqli -> query("update blog set title='$title',description='$description',slug='$slug',img='$path' where bid =".$_GET['bid']);


    if($pro_q)
    {
        ?>
        <script>
            window.location.href = 'blog.php';        
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
                        <h5 class="m-b-10">Edit Blog</h5>
                        <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Edit Blog</a>
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
                                    $q= $mysqli -> query("select * from blog where bid =".$_GET['bid']);


                                    while($row =  $q -> fetch_array(MYSQLI_ASSOC)){?>

                                        <form method="post" action="" enctype="multipart/form-data">
                                          <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Blog Title</label>
                                            <div class="col-sm-10">
                                                <input type="text"  name="title" class="form-control" id="pname" value="<?php echo $row['title'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Permalink</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="slug" class="form-control" id="slug" value="<?php echo $row['slug'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> Description </label>
                                            <div class="col-sm-10">
                                               <textarea class="ckeditor form-control" name="description"> <?php echo $row['description'] ?></textarea>
                                               
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input accept="image/png, image/gif, image/jpeg" type="file" name="img" class="form-control">
                                            <img style="margin-top: 10px; border: 1px solid #e3e3e3;" height="150px" width="150px" src="<?php echo $row['img'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                          <button type="submit" name="edit_blog" class="btn btn-default">SAVE</button>
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