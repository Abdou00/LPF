<?php
interface Mouvement{

	public function deplacement(); //methode sans contenu
}
//-------------------------------------
class Bateau implements Mouvement{ //class Bateau extends Mouvement NE FONCTIONNE PAS

	public function deplacement(){} //obligation de recréer les méthodes de l'interface qu'on implemente pour éviter une erreur
}
//-------------------------------------
class Avion implements Mouvement{

	public function deplacement(){}
}
//---------------------------------------------------------------------------------------------
//new Mouvement; //Erreur, une interface n'est pas instanciable.
//---------------------------------------------------------------------------------------------
/*
Une interface : est une liste de méthodes (SANS CONTENU) qui permet de garantir que toutes les classes qui implémentent l'interface contiendront les méthodes de l'interface avec la même signature (le même nom !) C'est une sorte de 'contrat' qui garantie un minimum de méthode avec la bonne ortographe.
	Ex : Une interface n'est pas un héritage.
		Un Bateau hérite de Véhicule
		Un Avion hérite de Véhicule
		Mais un Bateau, ou un Avion n'hérite pas de Mouvement, c'est juste un point commun entre ces classes (Bateau, Avion...)
		
		Le développeur qui réalise les appels est certain de pouvoir effectuer : 
			$bateau->deplacement(); 
		il sait qu'avec l'interface il ne devra pas faire $bateau->seDeplacer(); donc pas besoin d'ouvrir la class en question. Et il ne devra pas créer dans la classe Bateau une méthode seDeplacer().
		Une interface permet de créer une formalité.
		Si le code des classes doit changer, cela ne cahngera pas les appels car la méthode déplacement() devra toujours etre présente.

- class extends class (heritage)
- interface extends interface (heritage)
- class implements interface (implementation)

Les interfaces permettent de créer du code qui spécifie quelles méthodes une classe doit implémenter.
Toutes les méthodes déclarées dans une interface DOIVENT ETRE 'public' et redéfinies dans la classe qui l'implémente.
Lorsque je veux me servir d'une interface: j'utilise le mot-clé 'implements' (pour une classe on utilise extends*)
Une interface n'est pas instanciable !
On se sert d'une interface pour représenter un point commun entre 2 classes. Cela permet d'exiger un comportement.
	ex: Un bateau et un avion herite de Véhicule MAIS n'herite pas de mouvement. Un véhicule et un  mouvement n'existe pas. 
Il est possible d'implémenter plusieurs interfaces ( on ne peut pas hériter de plusieurs classes)
PAS DE POSSIBILITE d'avoir des propriétés dans une interface. (on peut par contre, délarer des constantes dans une interface)
*/
//--------------------------------------------------------------------------------------------
//Implementation de plusieurs interfaces:
interface iA{

	public function testA(); //Pas de visibilite private car les méthodes doivent etre redefinie.
}
interface iB{

	public function testB();
}

class A implements iA, iB{ //implementation de 2 interfaces A CONDITION que celles-ci n'aient aucune méthode portant le même nom !!!!

	public function testA(){}
	public function testB(){}
}
//--------------------------------------
interface iC{
	public function test1();
}
interface iD{
	public function test2();
}
interface iE extends iC, iD{ //heritage multiple entre interfaces
	public function test3();
}

class B implements iE{
	//Pour gérer les erreurs, il faut absolument écrire les méthodes de iE, iC et iD
	public function test1(){}
	public function test2(){}
	public function test3(){}
}
//--------------------------------------
//heritage + implémentation:
class C{}
class D extends C implements iA{

	public function testA(){}
}












