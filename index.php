<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"hhtp://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;
	charset=iso-8859-1" />
	<title>OOP in PHP</title>
	<?php include("class_lib.php") ?>
</head>
<body>
	<?php 
		//$cory = new person();//$cory becomes a handle/reference
				    //because we will use $cory to control 
				    //and use the person object
                $jimmy = new person; //() are optional for instantiating a class
                
                $cory = new person("Cory Koch");
                
                //nessesary when not using a constuctor.
               // $cory->set_name("Cory Koch"); //moved to constructor
                $jimmy->set_name("Jimmy Newton");
                
                echo "Cory's full name: " . $cory->get_name();
                echo "\n";
                echo "Jimmy's full name: ".$jimmy->get_name();
                
                
                /*
                 * Since $pinn_number was declared private, his line
                 * of code will generate an error.
                 */
                $cory->set_pinn_number("123456");
                echo "Tell me private stuff".$cory->pinn_number;
                //Should have generated an error, Why not?
                
                echo "Cory's pinn is: ".$cory->get_pinn_number();
        ?>
</body>
</html>
