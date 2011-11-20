<?php
	class person {
                //"Properties" 
		var       $name; //public is default form var
		public    $height;
                protected $social_insurance;
                private   $pinn_number;

                /*
                 * Private - only the same class can access the property.
                 * 
                 * Protected - only the same class and classes derived from 
                 * that class can access the property(inheritance).
                 * 
                 * Public - have no access restrictions, meaning anyone can
                 * access them.
                 */

                //Constructor
                function __construct($persons_name) {
                    $this->name = $persons_name;
                }
                
		//Methods
		function set_name($new_name) {
			$this->name = $new_name;
		}
		function get_name() {
			return $this->name;
		}
                private function get_pinn_number() {
                    return
                    $this->pinn_number;
                }
                private function set_pinn_number($new_pinn_number){
                    $this->pinn_number = $new_pinn_number;
                    
                }
			
	}
?>
