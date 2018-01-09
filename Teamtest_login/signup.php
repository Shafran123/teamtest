<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sign UpTeam Test By Star Labs</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/stylesignup.css">
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
            <p class="head">Your very own CrowdTesting account<br></p>
               <p class="sub"> 100% free | 100% Trusted</p>

        </div>

     <div class=signin>
             <form method="post" action="signup.php">
                 <!--display validation errors here -->
                 <?php include('errors.php');?>
                <label for="fname">Email</label>
                <br>
                     <input type="text"  name="email" placeholder="Your Email">
                <br>
                <label for="fname">User Name</label>
                <br>
                     <input type="text"  name="username" placeholder="UserName">
                     <br>
                <label for="lname">Password</label>
                <br>
                     <input type="password"  name="password_1" placeholder="Your Password">
                <br>
                <label for="lname">Confirm Password</label>
                <br>
                <input type="password"  name="password_2" placeholder="Re type your Password">
                <br>
                    <input type="submit" name="reg_user" value="SIGN UP"> <p class=forget> 
                    <p class=signup>&nbsp Already Have An Account <a href="signin.php">Sign in now</a></p>  
                    
              

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
