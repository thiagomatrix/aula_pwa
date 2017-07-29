<?php require_once 'config/config.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <title>Centena Cursos - Curso Online</title>
    <meta name="description" content="Aula Gratuita">
    <meta name="author" content="Thiago Braga">
    <meta name="keyword" content="Centena">
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="public/asset/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/asset/css/font-awesome.min.css">

  <link rel="stylesheet" href="public/asset/css/ionicons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./video/mediaelementplayer.css">



  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="public/asset/js/angular.min.js"></script>


    <script>
      var listUserApp = angular.module('listUserApp', []);
      listUserApp.controller('userApp', ['$scope', '$http', function (scope, http){
        http.get('includes/admin').success(function(data) {
          scope.countries = data;
        });
      }]);
    </script>




	<style type="text/css" media="screen">
	
	body{

		padding-left: 1.5em;
		padding-right: 1.5em;
	}


        html, body {
            overflow-x: hidden;
        }

        #container {
            padding: 0 20px 50px;
        }
        .error {
            color: red;
        }
        a {
            word-wrap: break-word;
        }

        code {
            font-size: 0.8em;
        }

        #player2-container .mejs__time-buffering, #player2-container .mejs__time-current, #player2-container .mejs__time-handle,
        #player2-container .mejs__time-loaded, #player2-container .mejs__time-hovered, #player2-container .mejs__time-marker, #player2-container .mejs__time-total {
            height: 2px;
        }

        #player2-container .mejs__time-total {
            margin-top: 9px;
        }
        #player2-container .mejs__time-handle {
            left: -5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ffffff;
            top: -5px;
            cursor: pointer;
            display: block;
            position: absolute;
            z-index: 2;
            border: none;
        }
        #player2-container .mejs__time-handle-content {
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
        }
    </style>

</head>
<body>

<!--div style="width: 800px; margin: 0 auto;"-->

<?php 

$login = 0;

$page = "aula";




if($login == false AND $page == "aula"){

   $_GET['p'] = base64_encode($page);

   }else{

  $_GET['p'] = base64_encode('home');

}


if($login == true){

$_GET['p'] = base64_encode('admin');

}

//$conn = new Connect\Database\Connection;

//$conn->connection();

 ?>

<?php 


require(isset($_GET['p'])) ? 'includes/'.base64_decode($_GET['p']).'.php' : 'includes/home.php';?>	

<!--/div-->
	
</body>
</html>


