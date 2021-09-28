<?php
session_start(); 
 
if (!isset($_SESSION['user_email'])) {
      header("Location:login.html");
} 


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro de Materias</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util_cad.css">
	<link rel="stylesheet" type="text/css" href="css/main_cad.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action = "inserirmateria.php"  method="post">
				<span class="contact100-form-title">
					Cadastro de Materias</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Materia </span>
					<input class="input100" type="text" name="materia" placeholder="Nome da materiaa">
					<span class="focus-input100"></span>
				</div>

			
				
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Serie</span>
					<div>
						<select class="selection-2" name="escola">
							<option>PEDRO MAZZA</option>
							<option>MARIA N. M. VERONESE</option>
							
						</select>
					</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Serie</span>
					<div>
						<select class="selection-2" name="sala">
							<option>5º Serie</option>
							<option>6º Serie</option>
							<option>7º Serie</option>
							<option>8º Serie</option>
							<option>9º Serie</option>
						</select>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "">
					<span class="label-input100">Link da materia </span>
					<input class="input100" type="text" name="link" placeholder="link da materia">
					<span class="focus-input100"></span>
				</div>
					<span class="focus-input100"></span>
				</div>

				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Enviar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
