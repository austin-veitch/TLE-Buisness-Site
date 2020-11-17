<!doctype html>
<html lang="en">
 
  <head>
   
   
    <meta charset="utf-8">
   
    <meta name="viewport" 
    content="width=device-width, 
    initial-scale=1, 
    shrink-to-fit=no">
<!--Boot strap, jquery, javascript and fontAwsome scripts below-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TLE</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

 <style type="text/css">


    #appSummary  {
        
       
        text-align: center;
        margin-top:50px;
        margin-bottom: 50px;

    }
              

    body  {

        position: relative;

    }

    #footer  {
            background: 100% 100%;
            background-color: aqua;
            padding-top: 150px;
            margin-top: 50px;
            text-align: center;
            padding-bottom: 150px;
        
        
  
      

    }

    #appstore  {

        width: 200px;

    }

  
    
    .display-2  {

       color: white;
       position: relative;
       top: 5px;
      
      
    
    }

    #text2  {

        color: white;
        font-weight: bold;

    }

    .lead  {

        color: white;
        font-weight: bold;
        font-size: 28px;

    }

  

    .card  {


        border: none;
        margin-left: 20px;
        margin-right: 20px;

    }

    .display-6  {

        color: white;

    }


    h3  {

            color: white;

    }

    .popover  {

            background-color: tan;
            color: white;

    }
         
    .navbar  {
             background-color: #183153; 
             
    }

   

    #jumbotron {
        background-size: cover;
    }

    .btn  {
        margin: center;
    }

    .nav-link  {
        color: white !important;
    }

    .navbar-brand  {

        color: white !important;
        
    }

    .footer {
       
       height: 150px;
       left: 0;
       bottom: 0;
       width: 100%;
       background-color:#183153;
       color: white;
       text-align: center;
   }

   .lead2  {

        position: relative;
        top: 20px;
}

.navbar-toggler  {

    color: white !important;
}

.includes-list  {

    text-align: center

}

.card1  {

    
    margin: 0 auto; 
    float: none; 
    margin-bottom: 10px;
    
}

.card-img-top {
    
    size: 100px;
}

.page-footer: {
    height: 400px;
    width: 100%;
    padding-left: 0px;
    padding-right: 0px;
    
    
}

.iframe-container{
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
}
.iframe-container > *{
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
}
a {
  color: black;
  text-decoration: none; /* no underline */
}
.flex-wrapper {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
  justify-content: space-between
}
.page-footer {
    position:absolute;
   bottom:0;
   width:100%;
   height:200px;   /* Height of the footer */
   background:#6cf;
}





    


      

</style> 

</head>
    
<body>
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand" href="file:///C:/Users/Magnum/Desktop/Complete%20Web%20Developer%20Course/5-bootstrap/tle-website.html#">TLE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index2.php">Price List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index3.php">Policy Information</a>
            </li>
            
          </ul>
        </div>
      </nav>
     

<form style="width: 30rem; margin: 0 auto; margin-top: 100px;">
    <p class="h4 mb-4 text-center">Contact us</p>
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
    <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
    <button class="btn btn-info btn-block" style="margin-top: -20px;" type="submit">Send</button>
</form>

<br>

    <footer class="page-footer font-small pt-4" style="background-color:#183153;">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
        <div class="col-md-4 mt-md-0 mt-3">
        <h5>Phone:</h5>
            <p>(972) 420-9700</p>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
        <h5>Email:</h5>
            <p>office@texaslakeescape.com</p>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
        <h5>Office Hours:</h5>
            <p>Mon-Fri 10am-6pm<br>Sat-Sun: 8am-8pm</p>
        </div>
        </div>
        </div>
    </div>
    </footer>
<!-- jQuery -->
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <!-- Bootstrap tooltips -->
 <script type="text/javascript" src="js/popper.min.js"></script>
 <!-- Bootstrap core JavaScript -->
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <!-- MDB core JavaScript -->
 <script type="text/javascript" src="js/mdb.min.js"></script>
 <!-- Your custom scripts (optional) -->
 <script type="text/javascript"></script>     
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ec24e1f6a4.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

</script>       
</body>

</html>