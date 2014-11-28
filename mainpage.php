<?php
    session_start();
    include("connection.php");
    $query = "SELECT `diary` FROM `users` WHERE `id`='".$_SESSION['id']."' LIMIT 1";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $diary = $row['diary']; 
?>
<!DOCTYPE html>
<html lang="en" id="html">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secret Diary</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
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
  
  </head>
  <body> 
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header pull-left">
                <a href="" class="navbar-brand">Secret Diary</a>
            </div>
	    <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
                <li><a href="index.php?logout=1">Log Out</a></li>
            </ul>
        </div>
    </div>
    <div class="container contentDivContainer">
        <div id="div1" class="contentDiv col-md-6 col-md-offset-3"> 
            <textarea id="diary" class="form-control" cols="800"><?php echo $diary; ?></textarea>
        </div>
    </div>
    <script>
    $("textarea").height($(window).height()*.5);
    $("textarea").keyup(function(){
        $.post("updatediary.php", {diary:$("textarea").val()});
    });
    //Possible function to use that deletes text as you type, to make it more "secret".
    /*
    $(document).ready(function(){
        // This will invoke on every keypress.
        $('#diary').keyup(function(event){
           previousVal = $('#diary').val();
           //Get only the last word after the last space. 
           var lastSpaceIndex = previousVal.lastIndexOf(" ");
           var upToLastSpace = previousVal.substring(0,lastSpaceIndex);
           var lengthLastWord = previousVal.length - lastSpaceIndex;
           var updatedVal = previousVal.substr(-lengthLastWord, lengthLastWord); 
           $('#diary').val(updatedVal);
        });
    });
    */
    </script>
  </body>
</html>




