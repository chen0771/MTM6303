<!-- <?php 
// Assigning the value of session variable to the $title variable
if(isset($_SESSION["current_page"])) {
    $current_page = $_SESSION["current_page"]; 
} else {
    $current_page = "index";
}

?> -->
<!-- Add your content of header -->
<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.php" title="">
          <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class=" collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="myDIV navActive nav navbar-nav navbar-right">
          <li ><a href="./index.php" title="" class="act active">Home</a></li>
          <li><a href="./about.php" title="" class="act"> About</a></li>
          <li><a href="./pricing.php" title="" class="act"> Pricing </a></li>
        </ul>
      </div>

     

    </div>
  </nav>
</header>
