<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sign In Team Test By Star Labs</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/stylesignin.css">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- materializecss
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
         -->
        <!-- Jquey -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

         <!-- FontAwesome CDN -->
        <script src="https://use.fontawesome.com/dbc99f7cc2.js"></script>

    </head>
<body>
        <div class="logo">
            <img src="images/logo.png" alt="responsive image" width="50%">
        </div>

        <div class="title">
            <p class="head">WELCOME TO TEAM TEST<br></p>
               <p class="sub"> Sign In To Continue</p>

        </div>

     <div class=signin>
            <form method="post" action="signin.php">
             <?php include('errors.php'); ?>
                <label for="lblemail">User Name</label>
                <br>
                     <input type="text" name="username" placeholder="User Name Here">
                <br>
                <label for="lblpw">Password</label>
                <br>
                     <input type="password" name="password" placeholder="Your Password">
                <br>
                    <input type="submit" name="login_user" value="SIGN IN"> <p class=forget><a href="">&nbsp Forget Your Password?</a></p> 
                    <p class=signup>&nbsp Don't have an account yet? <a href="signup.php">Sign up now</a></p>  
                    
              

        </form>
        
        <div class="vl"></div>
        
    </div>
            <div class="fbsign">
               
            <button class="button buttonfb">Sign up with Facebook</button>
                </div>
                <div class="fbicon">
                <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i> 
                </div>

                <div class="gitsign">
               
                <button class="button buttongit">Sign up with GitHub</button>
                </div>
                <div class="fbicon">
                <i class="fa fa-github-square fa-3x" aria-hidden="true"></i> 
                </div>

   <!--sign up form  
       <div class="signin"> 
            <h5>SIGN IN </h5>
     <form>
        <div class="form-group">
            <div class="col-xs-3">
                <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                <div class=btn>
                    <br>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
            </div>
        </div>
     </form>
     </div>
    -->

    <script src="https://use.fontawesome.com/dbc99f7cc2.js"></script>
</body>
</html>
