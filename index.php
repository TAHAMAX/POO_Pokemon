<link rel="stylesheet" type="text/css" href="inc/style.css">
<?php
 
ini_set('display_errors', 1);
require_once "inc/Pokemon.php"; 
// require_once "inc/attage.php"; 

require_once "inc/grenousse.php"; 
require_once "inc/feunnec.php"; 
require_once "inc/Marisson.php"; 

$Pokemon=new Pokemon();
// $Attage=new Attage();

$cart=[
	    new Marisson(2),
	    new Grenousse(1),
	    new Feunnec(1)
      ];
$joueur1=$Pokemon->affich($cart[0]);
$joueur2=$Pokemon->affich($cart[2]);
   		  echo '

<center>
	<table class="pl">
  <tr class="pl">
    <th class="pl">'.$joueur1.'</th>
    <th class="pl">'.$joueur2.'</th>
  </tr>
  <tr class="pl">
    <td class="pl">
       <center>
	       <form  method="POST" >
	           <button name="joueur_1">joueur 1 >></button>
	       </form>
       </center>
    </td>
    <td class="pl">
       <center>
	         <form  method="POST" >
		         <button  name="joueur_2"><< joueur 2</button>
		     </form>
       </center>
    </td>
  </tr>

</table>
</center>

		       '; 

	if (isset($_POST['joueur_1'] ))
	{ 
			$Pokemon->attager($cart[0],$cart[2]);
 	}
	if (isset($_POST['joueur_2'] ))
	{ 
			$Pokemon->attager($cart[2],$cart[0]);	
   	}










//error($pp);
function error($data)
{ echo "string";
 			 echo '<script>';
			  echo 'console.log('.  $data  .')';
			  echo '</script>';
}
?>



