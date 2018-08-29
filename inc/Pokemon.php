<?php
ini_set('display_errors', 1);
// Class Pokemons 
	class Pokemon  
	{
 		public $nom;
		public $type;
		public $niveau;
		public $pv;
		public $A;
		public $B;
		public $img;
		public $att1;
		public $att2;
public $energy=0;


		public function affich($cart)
		{ 
			$result;
	         if ($cart->pv != 0) 
	         {
			  $result='   
				<table class=" table tab" style="width:20%">
				    <thead>
				        <tr  >
				            <th >  
								 <div class="text1">  '.$cart->niveau.'</div>
					            </th>
				            <th  >  
									 <div class="text1">  '.$cart->nom.'</div>
					            </th>
				            <th  >  
									 <div style="color: green; class="text1"">'.$cart->pv.'</div>
				            </th>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
							<td COLSPAN="3" >	
				 				'.$cart->img.'
							</td>
				        </tr>
				    </tbody>
				    <tbody>
				        <tr>
			              <td >
					        <p class="text1">  '.$cart->att1.$cart->A.'</p>
					        <p class="text1">  '.$cart->att2.$cart->B.'</p>
			              </td>
				        </tr>
				    </tbody>    
				</table>
			    ';
	         }else
	         {
	         	  $result= "Pokemons  est morte";
	         } 

	         return $result;
		}



			public function attager($cart1,$cart2)
		{ 

	         $cart2->pv  =$cart2->pv-$cart1->A;
	         echo $cart2->pv;
	  
		}
	}
 ?>