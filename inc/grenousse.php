<?php
ini_set('display_errors', 1);
// Pokemon Grenousse  Base
	class Grenousse  extends Pokemon
	{
		public function __construct($n)
		{ 
		 if ($n == 1) 
		 {
		 	  $this->nom = "grenousse";
		      $this->type = "eau";
		      $this->niveau = "Base";
		      $this->pv = 60;
		      $this->A = 10;
			  $this->B = 20;
			  $this->img = '<img src="inc/grenousse.png" width="200" height="200">';

$this -> att1 = "<form  method='POST' ><button type='att1' name='att1'>Écras Face</button></form>";
$this -> att2 = "<form  method='POST' ><button type='att2' name='att2'>Guotte à Guotte</button></form>";
		 }
		  elseif ($n == 2) 
		 {
		 	  $this->nom = "croaporal";
		      $this->type = "eau";
		      $this->niveau = "niveau 1";
		      $this->pv = 80;
		      $this->A = 20;
			  $this->B = 40;
			  $this->img = '<img src="inc/croaporal.png" width="200" height="200">';

$this ->att1 = "<form  method='POST' ><button type='att1' name='att1'>Guotte à Guotte</button></form>";
$this ->att2 = "<form  method='POST' ><button type='att2' name='att2'>Aqua Vague</button></form>";
		 }
			  
			  // echo "1";
		 
		
			  // 			  echo "2";

			 
			  // $this->nom = "Amphinobi";
		   //    $this->type = "eau";
		   //    $this->niveau = "niveau 2";
		   //    $this->pv = 130;
		   //    $this->A = 40;
			  // $this->B = 60;
			  // $this->img = '<img src="inc/croaporal.png" width="200" height="200">';
 
 
	   }
	}
 ?>