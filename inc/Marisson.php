<?php 
ini_set('display_errors', 1);
// Pokemon Marisson  Base
	class Marisson   extends Pokemon
	{
		public function __construct($n)
		{ 
		 	 if ($n == 1) 
		 {
		 	  $this->nom = "Marisson";
		      $this->type = "plante";
		      $this->niveau = "Base";
		      $this->pv = 60;
		      $this->A = 10;
			  $this->B = 20;
			  $this->img = '<img src="inc/Marisson.png" idth="200" height="200">';

$this ->att1 = "<form  method='POST' ><button type='att1' name='att1'>Fouet_lianes</button></form>";
$this ->att2 = "<form  method='POST' ><button type='att2' name='att2'>Canon Graine</button></form>";
		 }
		  elseif ($n == 2) 
		 {
		 	  $this->nom = "boguerisse";
		      $this->type = "plante";
		      $this->niveau = "niveau 1";
		      $this->pv = 90;
		      $this->A = 20;
			  $this->B = 50;
			  $this->img = '<img src="inc/boguerisse.png" width="200" height="200"></form>';

$this ->att1 = "<form  method='POST' ><button type='att1' name='att1'>Vampigraine</button></form>";
$this ->att2 = "<form  method='POST' ><button type='att2' name='att2'>Poing Dard</button></form>";
		 }
			  
			  // 			  echo "1";
		 
		
			  // 			  echo "2";


		 
			  // $this->nom = "bilndepique";
		   //    $this->type = "plante";
		   //    $this->niveau = "niveau 2";
		   //    $this->pv = 150;
		   //    $this->A = 50;
			  // $this->B = 80;
			  // $this->img = '<img src="inc/bilndepique.png" width="200" height="200">';
 
	 
		 }
	} 
 ?>