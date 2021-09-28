<?php
session_start(); 
 
if (!isset($_SESSION['user_email'])) {
      header("Location:login.html");
} 


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--

Template 2092 Shelf

http://www.tooplate.com/view/2092-shelf

-->
    <title>Painel Adm</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">  
     <link rel="stylesheet" href="css/menu.css">
     <style type="text/css">
     
	
}
     </style>                                 
  
</head>

    <body>
        
        <div class="container">
            <header class="tm-site-header">
                <h1 class="tm-site-name"></h1>
                <p class="tm-site-description">Painel Administrativo</p>
            </header>
            
            <div class="tm-main-content">
            <div id='cssmenu'>
<ul>
 <li><a href='http://professoratayla.atwebpages.com/cadastroMateria.php' target="iframeshow"><span>Materias</span></a></li>
   <li class='active has-sub'><a href='#'><span>Alunos</span></a>
      
   </li>
   <li><a href='#'><span>Series</span></a></li>
   <li class='last'><a href='#'><span>Mensagens</span></a></li>
</ul>
</div>
            
           
            
            
            <div id="conteudo">
            

            <iframe width="750" height="700"  name="iframeshow" frameborder="0"></iframe>
            
            </div>
            </div>
            
            
           


            <footer></footer>    
        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
        <script>     
       
            $(document).ready(function(){
                
                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());

            });

        </script>             

</body>
</html>