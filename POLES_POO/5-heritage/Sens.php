<?php
/*transitivité : 
	
	si B hérite de A - ET-  si C hérite de B - ALORS-  C hérite de A

*/
class A{

	public function test1(){
		return 'test1';
	}
}
//---------------------------------
class B extends A{

	public function test2(){
		return 'test2';
	}
}
//---------------------------------
class C extends B{

	public function test3(){
		return 'test3';
	}
}
//---------------------------------------------------------------------------------------------------
$c = new C;

echo $c->test1() . '<br>'; //test1() methode de la classe A accessible par la classe C (grâce à l'heritage)
echo $c->test2() . '<br>'; //test2() methode de la classe A accessible par la classe C (grâce à l'heritage)
echo $c->test3() . '<br>'; //test3() methode de la classe A accessible par la classe C (grâce à l'heritage)
echo '<hr>';

//Retourne toutes les méthodes de la classe C :
print('<pre>');
	print_r( get_class_methods('C') );
print('</pre>');




