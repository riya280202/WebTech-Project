<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "stocks";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BULL HORN</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="page3.css">
    <script
      src="https://kit.fontawesome.com/712095325a.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  </head>
  <body>
    <script>
      AOS.init();
    </script>
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-2">
      <div class="container">
        <a class="navbar-brand text-dark" href="index.html">BULLHORN</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-dark" href="#home" style="visibility: hidden;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#our_work" style="visibility: hidden;">Our Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#about_mentor"
              style="visibility: hidden;">About Mentor</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#awards" style="visibility: hidden;">Awards</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#webinars" style="visibility: hidden;">Webinars</a>
            </li>
            <li class="nav-item">
              <button><a href="index.php"> Logout</a></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    <table align="center" border="1px" style="width:600px; line-height:30px;"> 
			  <th> CODE </th> 
			  <th> COMPANY </th> 
			  <th> CURRENT PRICE</th> 
			  <th> EXPECTED RISE/FALL</th> 
        <th>PERCENTAGE RISE/FALL</th>
			  
		</tr> 
		
		<?php  $sql = "SELECT * FROM `stocks_details`";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);

            if($num> 0)
		{ 
      while($row = mysqli_fetch_assoc($result)){
		?> 
		<tr> <td><?php echo $row['name']; ?></td> 
		<td><?php echo $row['company']; ?></td> 
		<td><?php echo $row['current_price']; ?></td> 
		<td><?php echo $row['expected']; ?></td> 
    <td><?php echo $row['exp_per']; ?></td>
		</tr> 
    
	<?php 
               } 
              }
          ?> 
          
         



	</table> 
  </div>
</body>
</html>