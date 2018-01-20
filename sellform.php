<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
 




 </head>


<br><br><br>
<body class="sab-sell-form-body">
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->
<!-- START OF CONTAINER -->
<div class="container-fluid">
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4" id="sab-sell-signup">
    <h3>Join the community and start selling.</h3>
<!-- START OF FORM -->
     <form>
        <div class="form-group sab-form-group">
        <label for="Name"></label>
        <input type="text" class="form-control" id="email" placeholder="full-name">
        <p class="sab-para-text">Please provide your legal name</p>
        </div>
                <div class="form-group sab-form-group">
                <label for="displayname"></label>
                <input type="displayname" class="form-control" id="email" placeholder="Display Name" >
                <p class="sab-para-text">Choose the name you want customers to see.</p>
                </div>
        <div class="form-group sab-form-group">
        <label for="email"></label>
        <input type="E-mail" class="form-control" id="email" placeholder="E-mail" >
        </div>
                <div class="form-group sab-form-group">
                <label for="password"></label>
                <input type="password" class="form-control"  id="password" placeholder="password">
                </div>
        <p>Passwords must be at least 8 characters long.</p>
        <p><input type="checkbox" >&nbsp; I agree to the terms and conditions.</p>
               <button type="button" class="btn btn-danger btn-block sab-btn">Submit</button>
        <p>already have an account <a href="loginpage.php"><span class="text-primary">sign in</span></a></p>
     </form>
    </div>
    <div class="col-md-4">
    </div>

</div>
</div><!-- END OF CONTAINER -->
  <br>  
<!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>