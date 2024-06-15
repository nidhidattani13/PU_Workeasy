
<?php
include 'config.php';
include 'header.php'; 


if (isset($_POST['add-blog-seo'])) 
{


    $bid=$_POST['bid'];
    $title=$_POST['title'];
    $meta_k=$_POST['meta_k'];
    $meta_d=$_POST['meta_d'];



    $pro_q = $mysqli -> query("INSERT INTO blogseo(bsid,bid,title,meta_k,meta_d) VALUES ('','$bid','$title','$meta_k','$meta_d')");

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
                        <h5 class="m-b-10">Blog SEO</h5>
                        <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Blog SEO</a>
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
                                    <h5>Blog SEO</h5>
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
                                            <label class="col-sm-2 col-form-label">Select Blog</label>
                                            <div class="col-sm-10">

                                               <?php
                                               $q= $mysqli -> query("select * from blog");
                                               ?>
                                               <select required name="bid" class="form-control">
                                                <?php
                                                while($row = $q -> fetch_array(MYSQLI_ASSOC))
                                                {
                                                    ?>

                                                    <option value =<?php echo $row['bid'] ?>> <?php echo $row['title'] ?> </option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="title" class="form-control" id="pname" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Kyeword</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="meta_k" class="form-control" id="pname" placeholder="Meta Kyeword">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" required name="meta_d" class="form-control" id="pname" placeholder="Meta Description">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                          <button type="submit" name="add-blog-seo" class="btn btn-default">SAVE</button>
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
                                <h5>Blog SEO</h5>
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
                                                    <th>Meta Keyword</th>
                                                     <th>Mete</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                               $q= $mysqli -> query("select * from blogseo");

                                                $c = 0;
                                                while($row = $q -> fetch_array(MYSQLI_ASSOC)){

                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo ++$c; ?></th>
                                                        <td><?php echo $row['title']; ?></td>
                                                        <td><?php echo $row['meta_k']; ?></td>
                                                        <td><?php echo $row['meta_d']; ?></td>


                                                       
                                                        <td><a data-toggle="tooltip" data-placement="bottom" title="Delete Product" href="delete_seo.php?bsid=<?php echo $row['bsid'];?>" style="color: #123456"><i class="far fa-trash-alt"></i></a></td>
                                                        
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








</div>





<?php include 'footer.php'; ?>