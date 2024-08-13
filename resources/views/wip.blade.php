Page Under construction!
<br/>

<?php
$z=FALSE OR TRUE;
if($z) { echo 'z is true'; } else { echo 'z is false'; } ; 
?>
<br/>

<?php
$z=FALSE || TRUE;
if($z) { echo 'z is true'; } else { echo 'z is false'; } ; 
?>


<?php
echo (0.1+0.7) * 10;
echo (int) ( (0.1+0.7) * 10 ); // ¡muestra 7!
?>
<br/>

<?php 

class MyTestClass {

	public function regularFunction($to = "Manu") {
		echo $to . ": This is a regular function called using -> <br/>";
	}

	public static function staticFunction() {
		echo "This is a static function called using ::<br/>";
	}
}

MyTestClass::staticFunction();
$obj = new MyTestClass();
$obj->regularFunction();
$obj->regularFunction("Pepito");

?>