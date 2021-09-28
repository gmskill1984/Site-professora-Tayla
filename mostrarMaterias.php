

<meta charset="utf-8">
<title>Materiais</title>
<link rel="stylesheet"  href="css/css_materias.css" media="screen" />
 //
	 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="scripts/script.js"></script>
   <script src="css_materias/script.js"></script>
	<link rel="icon" type="imagem/png" href="images/logo.ico" />


   
   <title>Materias</title>
</head>
<body>



<?php          
 

     
 $username = "3347591_tayla";
 $password = "Miguelevivian@12";
$conn= null;
try {
  $conn = new PDO('mysql:host=fdb18.awardspace.net;dbname=3347591_tayla', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

$sql = "SELECT * FROM Materia";
$result = $conn->query( $sql );
$rows = $result->fetchAll();
 
//print_r( $rows );
               
               
              

                
                
                ?>
                
                <div class="container">
       <table cellspacing="0">
            <thead>
                <tr>
                    

                </tr>
            </thead>
            <tbody>
            <table id="customers">
            <tr>
    <th>Materia</th>
    <th>Sala</th>
    <th>Escola</th>
    <th>Link</th>
  </tr>
                <?php 
                
                 foreach($rows as $row)
               {
    //Print the table name out onto the page.
    
                
                echo "<tr>"?>
                    <?php echo "<td height=20% > "?><?php echo "".strtoupper($row[1])?><?php echo "</td>"?>
                    <?php echo "<td height=20%> "?><?php echo " ".strtoupper($row[2])?><?php echo "</td>"?>
                    <?php echo "<td height=20% > "?><?php echo  strtoupper($row[3])?><?php echo "</td>"?>
                    <?php echo "<td height=20% > "?><?php   echo"". "<a href='$row[4]'>" ?><?php echo $row[4]?><?php echo "</td>"?>
                    
                    
                
                
                <?php } ?>
               <?php echo ""?>
            </tbody>
        </table>       
    </div>
                </div>
                <a href="http://professoratayla.atwebpages.com/">voltar a página inicial</a></li>
</body>
</html>

