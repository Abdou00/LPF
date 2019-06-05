<?php
//Namespace : on peut y stocker des 'methodes' et des 'class'
namespace A
{
	function ville(){
		return 'Paris';
	}
	function strlen(){
		return 'Fonction strlen de A';
	}
}
//-------------------------------------------------
namespace B
{
	function ville(){
		return 'Nantes';
	}
	function strlen(){
		return 'Fonction strlen de B';
	}
}
//--------------------------------------------------
//Il ne faut pas mettre de code après avoir défini des 'namespace' cela engendre une erreur !
//Pour faire appel à nos namespace, il faut créer un autre fichier, un fichier d'appel
// echo A\ville();
// echo B\ville();






