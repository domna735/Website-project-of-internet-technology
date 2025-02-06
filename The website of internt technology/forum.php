<!-- 
SEHH1016 Introduction to Internet Technology
student & studentid
HO Ning (Student ID: 22114180A)
KWAN Chi Fung (Student ID: 22127175A)
MA Kai Lun Donovan (Student ID: 22025202A)
TANG Cheuk Man Chapman (Student ID: 22138720A)
YU Ho Ching Washington (Student ID: 22001740A)
-->
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Home Page-ccLearn</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
   <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand mr-5" href="index.php">
            <span>
              ccLearn
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home Page <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="latest_internet_technology.php"> Latest Internet Technology </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"> Contact Us </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
 <div class="body_bg layout_padding">

     <section class="contact_section">
      <div class="container">
          <div class="heading_container">
          <h2>
            Article Forum
          </h2>
        </div>
      </div>
      </section>

<main>
        <div class="comment-section">
                    <h3>Comments</h3>
                    <div class="comment">
                    <?php 
					              $file_path = "log.txt";
                        if(isset($_GET["name"])){
                        $max = "Name: ".$_GET["name"]."\n"."Comment: ".$_GET["comment"]."\n";
					              file_put_contents($file_path, $max, FILE_APPEND);}
					              $comments = file($file_path);
					              for($i = 0; $i < count($comments); $i++){
						            echo $comments[$i];
						            echo "<br>";
						        }?>  
                    </div>  
                </div>
        <h3>Add Your Comment</h3>

          <div class="row">
            <div class="col-md-6">
              <div class="contact_form ">
         <form action="forum.php" method="GET">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><BR>
			      <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" required></textarea><BR>
            <input type="submit" value="Submit">
        </form>
        </div>
      </div>
    </section>
</main>

 <!-- contact section -->

 <section class="info_section layout_padding">
      <div class="footer_contact">
          <div class="heading_container">
              <h2>
                  Contact Us
              </h2>
          </div>
          <div class="d-flex justify-content-center">
          <div class="box">
              <a href="contact.php" class="img-box">
                  <img src="img/envelope.png" alt="" class="img-1">
                  <img src="img/envelope-o.png" alt="" class="img-2">
              </a>
          </div>
           </div>
      </div>


  </section>

    <footer>
        <p>&copy; 2023 ccLearn. All rights reserved.</p>
    </footer>
      <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
</body>
</html>