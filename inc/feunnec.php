<?php
ini_set('display_errors', 1);
// Pokemon Feunnec  Base
	class Feunnec   extends Pokemon
	{
		public function __construct($n)
		{ 
		 if ($n == 1)
		 {
		 	  $this->nom = "feunnec";
		      $this->type = "feu";
		      $this->niveau = "Base";
		      $this->pv = 60;
		      $this->A = 10;
			  $this->B = 20;
			  $this->img ='<img src="inc/feunnec.png" width="200" height="200">';	

$this ->att1 = "<form  method='POST' ><button type='att1' name='att1'>Griffe</button></form>";
$this ->att2 = "<form  method='POST' ><button type='att2' name='att2'>Charbon Mutant</button></form>";
		 
		 }
		 elseif ($n == 2)
		 {
			  $this->nom = "roussil";
		      $this->type = "feu";
		      $this->niveau = "niveau 1";
		      $this->pv = 80;
		      $this->A = 20;
			  $this->B = 60;
			  $this->img ='<img src="inc/roussil.png" width="200" height="200">';

$this ->att1 = "<form  method='POST' ><button type='att1' name='att1'>Souffle Feu</button></form>";
$this ->att2 = "<form  method='POST' ><button type='att2' name='att2'>Queue de Flammes </button></form>";
 	 
		 }

			  // 			  echo "1";

		 
	 
			  // 			  echo "2";

		 
			  // $this->nom = "goupelin";
		   //    $this->type = "feu";
		   //    $this->niveau = "niveau 2";
		   //    $this->pv = 140;
		   //    $this->A = 30;
			  // $this->B = 120;
			  // $this->img = '<img src="inc/goupelin.png" width="200" height="200">';
		 
 
			

		 } 
	} 
 ?>