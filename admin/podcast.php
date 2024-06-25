
<?php
include 'config.php';
include 'header.php'; 

if (isset($_POST['add_podcast'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $slug = str_replace(" ", "-", $_POST['slug']);
    
    $target_dir = "assets/upload/podcast/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $tmp_name = $_FILES["img"]["tmp_name"];
    $path = $target_dir . rand() . $_FILES["img"]["name"]; 
    move_uploaded_file($tmp_name, $path);

    // Prepare and execute the SQL query
    $stmt = $mysqli->prepare("INSERT INTO podcast (p_title, audio_url, p_description, created_at, updated_at, status) VALUES (?, ?, ?, NOW(), NOW(), 'draft')");
    $stmt->bind_param("sss", $title, $path, $description);
    
    if ($stmt->execute()) {
        ?>
        <script>
            $(document).ready(function() {
                var toast = new Toasty();
                toast.success("Podcast Added Successfully");
            });        
        </script>
        <?php
    } else {
        ?>
        <script>
            $(document).ready(function() {
                var toast = new Toasty();
                toast.error("Error Adding Podcast.");
            });
        </script>
        <?php
    }

    $stmt->close();
    $mysqli->close();
}
?>



<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Add Podcast</h5>
                        <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Add Podcast</a>
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
                                    <h5>Add Podcast</h5>
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
                                            <label class="col-sm-2 col-form-label">Podcast Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="title" class="form-control" id="title" placeholder="Enter Podcast Title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Permalink</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="slug" class="form-control" id="slug" placeholder="Enter Podcast Permalink">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                               <textarea class="ckeditor form-control" name="description"></textarea>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Thumbnail</label>
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
</div>






<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>View Podcast</h5>
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
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                                $q= $mysqli -> query("select * from podcast");
                                                $c = 0;
                                                while($row = $q -> fetch_array(MYSQLI_ASSOC)){

                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo ++$c; ?></th>
                                                        <td><?php echo $row['p_title']; ?></td>
                                                        <td><?php echo $row['p_description']; ?></td>
                                                        <td><img style="width: 70px; height: 70px;" src="<?php echo $row['img']; ?>"></td>
                                                        <td><a data-toggle="tooltip" data-placement="bottom" title="Edit Podcast" href="edit-blog.php?bid=<?php echo $row['pid'];?>" style="color: #123456"><i class="far fa-pencil-square-o"></i></a></td>
                                                        <td><a data-toggle="tooltip" data-placement="bottom" title="Delete Podcast" href="delete_blog.php?bid=<?php echo $row['pid'];?>" style="color: #123456"><i class="far fa-trash-alt"></i></a></td>
                                                        
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