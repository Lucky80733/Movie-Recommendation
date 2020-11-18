<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css/watchlist.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
     <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
</head>
<body>

<div class="movies-heading">
	<h1>My Watchlist</h1>
</div>
<!-- <section id="movies-list"> -->
	<?php 
include_once 'conn.php';
$fetch_query="select * from test where Firstname='Ruthvik'";
$res=mysqli_query($db,$fetch_query);
$num_rows=mysqli_num_rows($res);
if($num_rows==0) {
	?>  
	<div class="content" style="text-align: center;">
		<h4>Nothing to show please go back to home to add to watchlist</h4>	
	</div>
	
	<div class="hom" style="margin:20px;padding: 10px;text-align: center;">
		<a href="http://localhost/test/Movie%20Website/movie.php#">Go back to home</a>
	</div>
	<div class="sad">
		<i class="fa fa-frown fa-10x"></i>
	</div>
	<?php 
} 
else {
	?>
<div class="view overlay">	
<section id="movies-list">
 
<?php  	
while($row=mysqli_fetch_array($res))
{
?>

	
	<div class="movies-box">
		 
		<div class="movies-img">

			<img src="<?php echo $row["Lastname"] ?>">
			 <form method=POST id=x>
             

  <input class="mr-info"type="submit" name="rateButton[1]"  width="400" value="more info" onclick='document.getElementById("x").submit();' style=" font-size:120%; ">
 
 


		<div class="mask  rgba-blue-grey-light" style="display: flex; flex-direction: row;">
			
		</div>
	</div>

	<a href="">
		Tin the mighty
	</a>

</div>
                    <?php
if ( isset( $_POST['rateButton'] ) ) {
    foreach ( $_POST['rateButton'] as $key => $value ) {
        $_SESSION['movie_id']=$key;
        echo $key;
       
    }

}
?>


<?php 
}}
?>
</section>
</div>>	


	<!-- <div class="movies-box">
		<div class="movies-img">
			<img src="images/l-1.jpg">
		</div>
	
	<a href="#">
		Tin the mighty
	</a>
</div>

	<div class="movies-box">
		<div class="movies-img">
			<img src="images/l-1.jpg">
		</div>
	
	<a href="#">
		Tin the mighty
	</a>
</div>
	<div class="movies-box">
		<div class="movies-img">
			<img src="images/l-1.jpg">
		</div>
	
	<a href="#">
		Tin the mighty
	</a>
</div>

	<div class="movies-box">
		<div class="movies-img">
			<img src="images/l-1.jpg">
		</div>
	
	<a href="#">
		Tin the mighty
	</a>
</div>
</section> -->
</body>
</html>