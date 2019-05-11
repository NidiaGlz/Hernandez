<!doctype html>
<html lang="en">

<?php
  
  $servername = "localhost";
  $username = "hernandez";
  $password = "34783478";
  $dbname = "larry_plant";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT * from tiempo ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  
  if(isset($_POST["submit"])){
    $intervalo = $_POST["intervalo"];
    $cantidad = $_POST["cantidad"];
  }
  else{
    
    if($result-> num_rows > 0){   
      while($row = $result-> fetch_assoc())
      {        
        $intervalo = $row["intervalo"];
        $cantidad = $row["cantidad"];
      } 
    }
  }
  
            

  $sql = "INSERT INTO tiempo (intervalo, cantidad)
  VALUES ('".$intervalo."','".$cantidad."')";
  
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
?>


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="" />
  <meta name="description" content="">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Google Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,400,600,700" rel="stylesheet">

  <!-- Ionic Icons -->
  <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">



  <title>HERNANDEZ</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top">
    <a href="#hero"><img src="assets/images/untitled.png" class="img-fluid navbar-brand header-logo"
        alt="CS5O 2018-2019 @TEC DE MTY CAMPUS SLP"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="icon ion-md-menu"></i>
    </button>

  </nav><!-- End navbar -->

  <section id="hero">
    <div class="container-fluid">
      <div class="hero-container-desktop">
        <div class="hero-details">
          <h1>¡LISTO!</h1>
          <?php
            $servername = "localhost";
            $username = "hernandez";
            $password = "34783478";
            $dbname = "larry_plant";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if(!$conn)
            {
            
              die('No pudo conectarse: ' . mysql_error());
            
            } 
            $sql = "SELECT * from tiempo ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);
            if($result-> num_rows > 0){   
              while($row = $result-> fetch_assoc())
						  {        
                echo "<p>Tu planta se regarra cada ".$row["cantidad"]." ".$row["intervalo"]." <br> ¡Que tengas un buen viaje! :D</p>";
              } 
            }
                
         ?>
        </div>
        <img src="assets/images/desktop-hero.jpg" class="img-fluid desktop-hero"
          alt="https://unsplash.com/photos/B0aCvAVSX8E">
      </div><!-- End hero container desktop -->
    </div><!-- End container fluid -->

    
  </section><!-- End hero -->

 

  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>