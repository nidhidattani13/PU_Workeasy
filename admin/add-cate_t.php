
<?php
include 'config.php';
include 'header.php'; 


if (isset($_POST['add_cate'])) 
{



    $name=$_POST['name'];



    $pro_q = $mysqli -> query("INSERT INTO gal_cate_t(cid,name) VALUES ('','$name')");


    if($pro_q)
    {
        ?>
        <script>
            $(document).ready(function() {
                var toast = new Toasty();
                toast.success("Category Added");
            });
        </script>
        <?php
    }
    else
    {
    ?> <script>
        $(document).ready(function() {
            var toast = new Toasty();
            toast.error("Error on Category Add");
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
                        <h5 class="m-b-10">Add Category</h5>
                        <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Add Gallery Category</a>
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
                                    <h5>Add Gallery Category</h5>
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
                                            <label class="col-sm-2 col-form-label">Gallery Category Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="name" class="form-control" placeholder="Enter Gallery Category Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                              <button type="submit" name="add_cate" class="btn btn-default">SAVE</button>
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
                                <h5>View Gallery Category</h5>
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
                                                    <th>Category Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $q = $mysqli -> query("select * from gal_cate_t");
                                                $c = 0;
                                                while($row =  $q -> fetch_array(MYSQLI_ASSOC))
                                                {
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo ++$c; ?></th>
                                                        <td><?php echo $row['name'] ?></td>
                                                        <td><a href="delete_cate_t.php?cid=<?php echo $row['cid'];?>" style="color: #123456"><i class="far fa-trash-alt"></i></a></td>
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