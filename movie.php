
<?php 
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Movies Website
  </title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />

  
  <link rel="stylesheet" href="css/lightslider.css">
    <!--  slider files -->
  <script src="js/JQuery3.3.1.js"></script>
  <script src="js/lightslider.js"></script>
  <!-- fontawesome -->
  <link rel="shortcut icon" href="images/fav icon.png" />
    <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
  <link rel="stylesheet" href="css/lightslider.css">
    <!--  slider files -->
  <script src="js/JQuery3.3.1.js"></script>
  <script src="js/lightslider.js"></script>

</head>
<body>
  <!-- navigation -->
  <nav style="background-color: black;">
    <a href="#" class="logo">
      <img src="images/logo.png" />
    </a>

    <!-- menu -->
    <ul class="menu">
      <li><a href="Movie.html">Home</a></li>
      <li><a href="#mystery">Movies</a></li>
      <li><a href="#">TV Shows</a></li>
      <li><a href="#">Hollywood</a></li>
      <li><a href="#">Horror</a></li>
      
    </ul>
    

    <div class="search">
      <input type="text" placeholder= "Find"name="" />

      <!-- search icon -->
      <i class="fas fa-search">  </i>
     </div>
  </nav>

  <section id="main" style="background-color: black; color: white;">
    <div ><h1 class="showcase-heading" >Trending</h1></div>


    <ul id="autoWidth" class="cs-hidden">
         <li class="item-a">
          <div class="showcase-box">
          <img src="images/s-1.jpg" />
          <a href="#"></a>
        </div>
         </li>
         <li class="item-b">
          <div class="showcase-box">
          <img src="images/s-2.jpg" />
          <a href="#"></a>
        </div>
         </li>
       <li class="item-c">
          <div class="showcase-box">
          <img src="images/s-3.jpg" />
          <a href="#"></a>
        </div>
         </li>
       <li class="item-d">
          <div class="showcase-box">
          <img src="images/s-4.jpg" />
          <a href="#"></a>
        </div>
         </li>
        <li class="item-e">
          <div class="showcase-box">
          <img src="images/s-5.png" />
        </div>
         </li>
  </ul>
    
  
  </section>
  <!-- slider script -->

  <section id="mystery">
    <h2 class="latest-heading">Latest</h2>
    
    <ul id="autoWidth2" class="cs-hidden">
    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                <form method=POST id=x>
                
  <input class="mr-info"type="submit" name="rateButton[1]"  width="400" value="more info" onclick='document.getElementById("x").submit();' style=" font-size:120%; ">
 
 
</form>

                    <?php
if ( isset( $_POST['rateButton'] ) ) {
    foreach ( $_POST['rateButton'] as $key => $value ) {
        $_SESSION['movie_id']=$key;
        header('location:temp.php');
       
    }

}
?>
<script> 
     var $form = submitButton.closest('form');
$form.on('submit', function(e) {
    // Prevent form submission by the browser
    e.preventDefault();

    // Rest of the logic
});

       </script>
                <!--   <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div> -->
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                <form method=POST id=x>
                
  <input class="mr-info"type="submit" name="rateButton[2]"  width="400" value="more info" onclick='document.getElementById("x").submit();' style=" font-size:120%; ">
 
 
</form>

                    <?php
if ( isset( $_POST['rateButton'] ) ) {
    foreach ( $_POST['rateButton'] as $key => $value ) {
        $_SESSION['movie_id']=$key;
        header('location:temp.php');
    }

}
?>
                <!--   <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div> -->
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                <form method=POST id=x>
                
  <input class="mr-info"type="submit" name="rateButton[3]"  width="400" value="more info" onclick='document.getElementById("x").submit();' style=" font-size:120%; ">
 
 
</form>

                    <?php
if ( isset( $_POST['rateButton'] ) ) {
    foreach ( $_POST['rateButton'] as $key => $value ) {
        $_SESSION['movie_id']=$key;
        header('location:temp.php');
    }

}
?>
                <!--   <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div> -->
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

 <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
 <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

  <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
      <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

      <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
      
      <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

  </section>

<!-- Sci fi-->
   <section id="latest">
    <h2 class="latest-heading">Sci fi</h2>
    
    <ul id="autoWidth2" class="cs-hidden">
    <div class="view overlay" id="mystery">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                <form method=POST id=x>
                
  <input class="mr-info"type="submit" name="rateButton[1]"  width="400" value="more info" onclick='document.getElementById("x").submit();' style=" font-size:120%; ">
 
 
</form>

                    <?php
if ( isset( $_POST['rateButton'] ) ) {
    foreach ( $_POST['rateButton'] as $key => $value ) {
        $_SESSION['movie_id']=$key;
        header('location:temp.php');
    }

}
?>
                <!--   <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div> -->
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                <form method=POST id=x>
                
  <input class="mr-info"type="submit" name="rateButton[2]"  width="400" value="more info" onclick='document.getElementById("x").submit();' style=" font-size:120%; ">
 
 
</form>

                    <?php
if ( isset( $_POST['rateButton'] ) ) {
    foreach ( $_POST['rateButton'] as $key => $value ) {
        $_SESSION['movie_id']=$key;
        header('location:temp.php');
    }

}
?>
                <!--   <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div> -->
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                <form method=POST id=x>
                
  <input class="mr-info"type="submit" name="rateButton[3]"  width="400" value="more info" onclick='document.getElementById("x").submit();' style=" font-size:120%; ">
 
 
</form>

                    <?php
if ( isset( $_POST['rateButton'] ) ) {
    foreach ( $_POST['rateButton'] as $key => $value ) {
        $_SESSION['movie_id']=$key;
        header('location:temp.php');
    }

}
?>
                <!--   <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div> -->
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

 <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
 <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

  <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
      <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

      <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
      
      <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

  </section>

   <section id="latest">
    <h2 class="latest-heading">Sex</h2>
    
    <ul id="autoWidth2" class="cs-hidden">
    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                <form method=POST id=x>
                
  <input class="mr-info"type="submit" name="rateButton[1]"  width="400" value="more info" onclick='document.getElementById("x").submit();' style=" font-size:120%; ">
 
 
</form>

                    <?php
if ( isset( $_POST['rateButton'] ) ) {
    foreach ( $_POST['rateButton'] as $key => $value ) {
        $_SESSION['movie_id']=$key;
        header('location:temp.php');
    }

}
?>
                <!--   <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div> -->
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                <form method=POST id=x>
                
  <input class="mr-info"type="submit" name="rateButton[2]"  width="400" value="more info" onclick='document.getElementById("x").submit();' style=" font-size:120%; ">
 
 
</form>

                    <?php
if ( isset( $_POST['rateButton'] ) ) {
    foreach ( $_POST['rateButton'] as $key => $value ) {
        $_SESSION['movie_id']=$key;
        header('location:temp.php');
    }

}
?>
                <!--   <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div> -->
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                <form method=POST id=x>
                
  <input class="mr-info"type="submit" name="rateButton[3]"  width="400" value="more info" onclick='document.getElementById("x").submit();' style=" font-size:120%; ">
 
 
</form>

                    <?php
if ( isset( $_POST['rateButton'] ) ) {
    foreach ( $_POST['rateButton'] as $key => $value ) {
        $_SESSION['movie_id']=$key;
        header('location:temp.php');
    }

}
?>
                <!--   <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div> -->
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

 <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
 <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

  <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

    <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
      <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

      <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>
      
      <div class="view overlay">
    <a href="#">
      <li class="item-a">
        <div class="latest-box">
          <div class="latest-b-img">
             <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>
            </div>
            
              <img src="images/m-1.jpg">
              <div class="mask flex-center rgba-blue-grey-light" style="flex-direction: column; ">
                
                  <div class="mr-info">
                  <a href="#"><p style="color: white; font-size:120%; ">More Info</p></a></div>

                  <div class="add"><a href="#">
                    <p style="color: white; font-size:120%; ">Add to wishlist</p></a></div>
                
              </div>
            </div>
          </div>
          

        
      </li>
  </a>
</div>

  </section>

  <!-- historic -->

  <script >
      $(document).ready(function() {
    $('#autoWidth,#autoWidth2').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
        } 
    });  
  });
  </script>


  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>