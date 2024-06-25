<?php
include 'header.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<section class="page-header">
            <div class="shape1 rotate-me"><img src="assets/img/shape/page-header-shape1.png" alt=""></div>
            <div class="shape2 float-bob-x"><img src="assets/img/shape/page-header-shape2.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>VLOG</h2>
                    <ul class="thm-breadcrumb">
                        <li><a href="index.php"><span class="fa fa-home"></span> Home</a></li>
                        <li><i class="icon-right-arrow-angle"></i></li>
                        <li class="color-base">Vlog</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="Start">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 start-left">
        <img src="./pavak2.png" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6 start-right">
        <p class="blog-heading">
          Marketing Mingle
        </p>  
        <a href="#">
          <h2 class="heading">Skill India : Tomorrow's Skill, Today's Mission</h2>
          <p class="more">In today's ever-changing world, acquiring relevant skills is crucial. Industries require adaptable and versatile professionals with the right expertise. Initiatives like Skill India bridge the gap between aspirations and capabilities, paving the way for a brighter future.</p>
        </a>
        <div class="profile_container">
            <div class="profile-image-container">
                  <img src="./pavakkk.jpg" alt="My Profile Image">
              </div>
              <div class="namepos">
                   <div class="name">
                       Pavak Unadkat
                   </div>
                   <div class="pos">
                     CEO & Founder
                   </div>
             </div>
            <div class="date">
             5 June 2024
            </div>
        </div>
        
      </div>
    </div>
   
  </div>



</section>
<div class="card_head">
  <h1>Must Watch Vlogs</h1>
</div>
<div class="card-container">

<?php 

$q= $mysqli -> query("select * from vlog");

 while($row = $q -> fetch_array(MYSQLI_ASSOC)){

     ?>

<div class="container text-left">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="admin/<?php echo $row['v_thumbnail']; ?>" alt="Blog Image 4">
        </div>
        <div class="card-content">
          <a href="<?php echo $row['video_url']; ?>"><h3 class="card-title"> <?php echo $row['v_title']; ?> </h3></a>
          <p class="card-description"> <?php echo $row['v_description']; ?> </p>
        </div>
        <div class="card-date">
        <?php echo $row['created_at']; ?>    
      </div>
    </div>
  </div>
    <!-- <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div> -->
  </div>

 </div>

<?php } ?>

</div>






<!-- <div class="card_head">
  <h1>Our Case Studies</h1>
</div>
<div class="card-container">
  <div class="card">
    <div class="card-image">
      <img src="assets/img/blog/blog-three__img2.jpg" alt="Blog Image 1">
    </div>
    <div class="card-content">
      <h3 class="card-title"> Case Title 1Lorem ipsum dolor sit amet.</h3>
      <p class="card-description">This is a short description of the blog post 1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem sapiente quo deserunt officia ipsam consectetur cumque odit consequuntur quod architecto.
      </p>
    </div>
    <div class="card-view">
    <a href="#">
      View Project <i class="fas fa-arrow-right"></i>
    </a>
  </div>
  </div>

  <div class="card">
    <div class="card-image">
      <img src="assets/img/blog/blog-three__img2.jpg" alt="Blog Image 2">
    </div>
    <div class="card-content">
      <h3 class="card-title">Case Title 2 Lorem ipsum dolor sit amet.</h3>
      <p class="card-description">This is a short description of the blog post 2. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus laudantium adipisci natus vero omnis autem obcaecati doloribus a veritatis odio.</p>
    </div>
    <div class="card-view">
    <a href="#">
      View Project <i class="fas fa-arrow-right"></i>
    </a>
  </div>
  </div>

  <div class="card">
    <div class="card-image">
      <img src="assets/img/blog/blog-three__img2.jpg" alt="Blog Image   3">
    </div>
    <div class="card-content">
      <h3 class="card-title">Case Title 3 Lorem ipsum dolor sit amet.</h3>
      <p class="card-description">This is a short description of the blog post 3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, non hic! Delectus eos eum eius iure? Ullam incidunt beatae quae? Lorem ipsum dolor sit amet consectetur.
      </p>
    </div>
    <div class="card-view">
    <a href="#">
      View Project <i class="fas fa-arrow-right"></i>
    </a>
  </div>
  </div> -->

  


  
</div>

<?php
include 'footer.php';
?>