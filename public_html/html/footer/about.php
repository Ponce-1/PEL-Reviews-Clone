<?php 
session_start();
require_once( '../../couch/cms.php' ); ?>
<cms:template title='about' hidden='1'/>
<!doctype html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="icon" href="../../assets/logo.png">

   <title>About</title>

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">


   <!-- Custom styles for this template -->
   <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
   <link href="../../343CSS/footerarticle.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body>
   <div class="container">
     <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <a class="blog-header-logo" href="../../index.php"><img src="../../assets/logo.png" alt="logo" class = "img-responsive"/></a>
       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
             <div class="dropdown-menu" aria-labelledby="dropdown01">
               <a class="dropdown-item" href="../products/electronics.php">Electronics</a>
               <a class="dropdown-item" href="../products/books.php">Books</a>
               <a class="dropdown-item" href="../products/furniture.php">Furniture</a>
             </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entertainment</a>
             <div class="dropdown-menu" aria-labelledby="dropdown01">
               <a class="dropdown-item" href="../entertainment/movies.php">Movies</a>
               <a class="dropdown-item" href="../entertainment/videogames.php">Videos Games</a>
               <a class="dropdown-item" href="../entertainment/tvshows.php">Tv Shows</a>
             </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Location</a>
             <div class="dropdown-menu" aria-labelledby="dropdown01">
               <a class="dropdown-item" href="../location/unitedstates.php">United States</a>
               <a class="dropdown-item" href="../location/mexico.php">Mexico</a>
               <a class="dropdown-item" href="../location/canada.php">Canada</a>
             </div>
           </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" id="searchBox" type="text" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
            <form action="../../users/login.php">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
         </form>
       </div>
     </nav>
   </div>

   <main role="main" class="container">
     <div class="row">
       <div class="col-md-8 blog-main">
         <div class="blog-post">
           <h2 class="blog-post-title">About</h2>
           <p class="blog-post-meta">Last edited: <span id="datetime"></span>
             <script>
               var dt = new Date();
               document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
             </script>
           </p>
           <hr>

           <h2><font size= "3"> This website was a project made for the csulb 343 class.</font></h2>
           <hr>


           <div class="container">

         </div>
           <!--<br>-->
           <!--<nav class="blog-pagination">-->
           <!--  <a cla"btn bss=tn-outline-primary" href="#">Add Review</a>-->
           <!--</nav>-->
         </div><!-- /.blog-post -->


       </div>

       <aside class="col-md-4 blog-sidebar">
         <div class="p-3">
             <h4 class="font-italic">Advertisement</h4>
           <ol class="list-unstyled mb-0">
            <a href="https://www.amazon.com/">
            <img src="/assets/amazon.png">
            </a>
            <a href="https://online.pizzahut.co.in/">
            <img src="/assets/pizzahut.png">
            </a>
           </ol>
         </div>

         <!--<div class="p-3">-->
         <!--  <h4 class="font-italic">Elsewhere</h4>-->
         <!--  <ol class="list-unstyled">-->
         <!--    <li><a href="#">GitHub</a></li>-->
         <!--    <li><a href="#">Twitter</a></li>-->
         <!--    <li><a href="#">Facebook</a></li>-->
         <!--  </ol>-->
         <!--</div>-->
       </aside><!-- /.blog-sidebar -->
     </div><!-- /.row -->
   </main><!-- /.container -->

   <!--Footer-->
   <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
     <div class="container text-center text-md-left">
       <div class="row">
         <hr class="clearfix w-100 d-md-none">
         <div class="col-md-2 mx-auto">
           <ul class="list-unstyled">
             <li>
               <a href="../footer/contact.php">Contact</a>
             </li>
             <li>
               <a href="../footer/about.php">About</a>
             </li>
             <li>
               <a href="../footer/privacy.php">Privacy</a>
             </li>
             <li>
               <a href="../footer/termsofuse.php">Terms of Use</a>
             </li>
           </ul>
         </div>
       </div>
     </div>

     <div class="footer-copyright py-3 text-center">
       © 2018 Copyright:
       <a href="../../index.php"> PELReviews.com </a>
     </div>
   </footer>
   <!--/.Footer-->


   <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
       /* Create a configuration object */
       var ss360Config = {
          /* Your site id */
          siteId: 'pelreviews.000webhostapp.com',
          /* A CSS selector that points to your search  box */
          searchBoxSelector: '#searchBox',      
       };
    </script>
    <script src="https://sitesearch360.com/cdn/sitesearch360-v10.min.js"></script>
 </body>
</html>

<?php COUCH::invoke(); ?>
