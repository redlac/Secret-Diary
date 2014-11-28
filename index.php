<?php include("login.php");?>

<!DOCTYPE html>
<html lang="en" id="html">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secret Diary</title>
    <!--Roboto font styles-->
    <link href="css/roboto-fontfacekit.css" rel="stylesheet" type="text/css">
<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>

        .container{
            width:95%;
            font-family:Roboto;
            font-style: normal;
            font-weight:bold;
        }

	body {
        background: url('images/typewriter.jpg') repeat center center fixed;
	    background-size:100% 100%;
        position:relative;
	    text-align:center;
	}

        .transparentText {
            background-color:white;
            opacity:.8;
            padding:2.5%;
            border:2px solid white;
            color:#040128;
            left:15%;
            position:absolute;
            top:250px; 
        }

        h1{
            2em;
        }

        #div1 h1 h2 h3{
            position:absolute;
            top:1000px;
        }

        #div2 h2{
            text-align:center;
            font-weight:bold;
            margin-top:75px;
            margin-bottom:50px;
        }


        .info {
            float:left;
            width:16.66%;
            padding-left:2%;
        }

        .info h2 {
            width:300px;
        }

        .promoMessage {
            width:300px;
            float:left;
            margin-top:100px;
            padding:10px;
        }

        #signupbutton{
        }
      
        .contentDivContainer {
            width:100%;
            padding:0;
            font-family:Roboto Helvetica sans-serif;
            font-style: normal;
            font-weight:bold;
        }

        #mailingList {
            margin-top:20%;
            width:50%;
            margin:0 auto;
        }

        .clear{
            clear:both;
        }

	.alert{
		height:20%;
	}
    
  </style>
  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
		<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
                <a href="" class="navbar-brand">Secret Diary</a>
            </div>
	    <div class="collapse navbar-collapse">
		    <form class="navbar-form navbar-right" method="post"> 
			<div class="form-group">
			    <input type="email" name="loginemail" value="<?php echo addslashes($_POST['email']); ?>" class="form-control" placeholder="Email"/> 
			</div>
			<div class="form-group">
			    <input type="password" name="loginpassword" value="<?php echo addslashes($_POST['password']); ?>" class="form-control" placeholder="Password"/> 
			</div>
			<input type="submit" name="submit" class="btn btn-success" value="Log In">
		    </form>
            </div>
	    <?php
		if ($error){
			echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
		}
		if ($message){
			echo '<div class="alert alert-success">'.addslashes($message).'</div>';
		}
	     ?>
        </div>
    </div>
    <div class="container-fluid contentDivContainer">
        <div id="div1" class="contentDiv col-md-6 col-md-offset-3">
            <div class="transparentText panel panel-default">
               <div class="panel-body">
                    <h1>Secret Diary</h1>
                    <h2>Your own private diary  with you wherever you go.</h2>
                    <h3>Interested? Sign up below</h3> 
                    <form class="navbar-form" method="post">
                        <div class="form-group">
                            <input type="email" id="email" name="email" value="<?php echo addslashes($_POST['email']); ?>" class="form-control" placeholder="Email"> 
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" value="<?php echo addslashes($_POST['password']); ?>" class="form-control" placeholder="Password"> 
                        </div>
                        <input type="submit" id="signupbutton" name="submit" class="btn btn-success" value="Sign Up">
                    </form>
                </div>
             </div>     
	</div>
    </div>
    <script>
    </script>
  </body>
</html>

