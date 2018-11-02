<?php
$pagestitle=array("Accueil","L'association","Fonctionnement","Adhérer","Coin Mécanique","Nous trouver","Nous soutenir");
$pages=array("","Qui-sommes-nous","Fonctionnement","Adherer","Coin-mecanique","Nous-trouver","Nous-soutenir");
$pagesalt=array("Une Br&egrave;ve presentation","Le status de l'association et une pr&eacute;sentation d&eacute;taill&eacute;e","Le fonctionnement de l'association","Comment devenir adh&eacute;rent et quelles sont les conditions","L'auto &eacute;cole associative est un projet pour que le permis devienne accessible aux plus d&eacute;munis ou ill&eacute;ttr&eacute;","Quelques astuces pour entretenir son v&eacute;hicule","Toutes les coordonn&eacute;es de l'association","Le meilleurs moyen de soutnir notre action");
$pagesfile=array("accueil","quisommesnous","fonctionnement","adherer","mecanique","contact","soutenir");
#	switch($_SERVER["REDIRECT_URL"]){
$title=" : page non trouvée (404)";
$numpage=-1;
$file="pages/notfound.inc";
foreach($pages as $key=> $value){
	if($_SERVER["REQUEST_URI"]=="/".$value){
		$numpage=$key;
		$file="pages/".$pagesfile[$key].".inc";
		$title=" : ".$pagestitle[$key];
		break;
	}
}
if($numpage==-1){
	header("HTTP/1.0 404 Not Found");
}else{
	header("HTTP/1.0 200 Ok",true,200);
}		
printf("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr"> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
<meta name="description" content="Les m&eacute;canos du coeur est un garage associatif solidaire situ&eacute; &agrave; Marseille permettant &agrave; des personnes en difficulté d’entretenir leur voiture." /> 
<meta name="language" content="fr" /> 
<meta name="keywords" content="site officiel, les m&eacute;canos du coeur, m&eacute;canos du coeur, m&eacute;canosducoeur, Garage solidaire, m&eacute;canique, association, don de voiture, don de véhicule, don de voiture, solidarit&eacute;,solidaire, entraide, RSA, RMI, Marseille" />
<meta name="robots" content="index,follow" /> 

<title>Les m&eacute;canos du coeur<?php echo $title?></title>

<link rel="stylesheet" type="text/css" href="/css/index2.css"/>
<link rel="shortcut icon" href="/img/coeur.png" type="image/x-icon"/>
<link rel="icon" href="/img/coeur.png" type="image/x-icon"/>
<script type="text/javascript"> 
          // <![CDATA[ <!--
function prechargimg() {
	var doc=document;
	if(doc.images){ 
		if(!doc.precharg) 
		doc.precharg=new Array();
		var i,j=doc.precharg.length,x=prechargimg.arguments; 
		for(i=0; i<x.length; i++){
			if (x[i].indexOf("#")!=0){ 
				doc.precharg[j]=new Image; 
				doc.precharg[j++].src=x[i];
			}
		}
	}
}
//]]> -->
</script>

</head>
<body>
<div id="content"> 
<div id="header">
</div>
<div id="minilogo">
	<a href="/Nous-soutenir#partenaires">
		<img src="img/sponsors/mini/Logo13.png" alt="Conseil Général 13" onmouseover="this.src='img/sponsors/minicouleur/Logo13.png';" onmouseout="this.src='img/sponsors/mini/Logo13.png';"/>
		<img src="img/sponsors/mini/PacaFSE.png" alt="L'europe s'engage en PACA" onmouseover="this.src='img/sponsors/minicouleur/PacaFSE.png';" onmouseout="this.src='img/sponsors/mini/PacaFSE.png';" />
		<img src="img/sponsors/mini/cress.png" alt="Chambre régionale économie, sociale et solidaire" onmouseover="this.src='img/sponsors/minicouleur/cress.png';" onmouseout="this.src='img/sponsors/mini/cress.png';"/>
		<img src="img/sponsors/mini/macif.png" alt="La fondation Macif" onmouseover="this.src='img/sponsors/minicouleur/macif.png';" onmouseout="this.src='img/sponsors/mini/macif.png';" />
		<img src="img/sponsors/mini/caisseepargne.png" alt="La caisse d'épargne" onmouseover="this.src='img/sponsors/minicouleur/caisseepargne.png';" onmouseout="this.src='img/sponsors/mini/caisseepargne.png';"/>
		<img src="img/sponsors/mini/renault_logo.png" alt="Renault" onmouseover="this.src='img/sponsors/minicouleur/renault_logo.png';" onmouseout="this.src='img/sponsors/mini/renault_logo.png';" />
		<img src="img/sponsors/mini/europe.png" alt="L'union européenne" onmouseover="this.src='img/sponsors/minicouleur/europe.png';" onmouseout="this.src='img/sponsors/mini/europe.png';" />
		<img src="img/sponsors/mini/paca.png" alt="Conseil régional PACA" onmouseover="this.src='img/sponsors/minicouleur/paca.png';" onmouseout="this.src='img/sponsors/mini/paca.png';"/>
	</a>
</div>

<div id="menu">
<ul id="navigation">
<?php
foreach($pagestitle as $key=> $value){
    if ($key==$numpage){
    	$selected="selected";
    }else{
    	$selected="unselected";
    }
	print("\t<li class=\"$selected\"><a class=\"$selected\" href=\"/${pages[$key]}\" title=\"${pagesalt[$key]}\">$value</a></li>\n"); 
}
?>
</ul>
</div>
<div id="corp">
<?php
if(file_exists($file)){
	include($file);
	date_default_timezone_set('Europe/Paris');
	setlocale(LC_ALL,'fr_FR'); 
	echo "<div id='lastmod'>Dernière modification effectuée le ".strftime("%d/%m/%G à %H:%M",filemtime($file))."</div>";



}else{
?>
	<p class="error"> La page demandée est en cours de construction.</p>
	<p class="error"><img src="/img/enconstruction.jpg" alt="En construction" /></p> 
<?php }
?>
</div>
<div id="popup"></div>
<div id="w3c" ><a class="w3c" href="http://validator.w3.org/check?uri=referer" onclick="window.open(this.href); return false;" ><img class="w3c" src="img/valide-xhtml.png" alt="XHTML valide"/></a> <a class="w3c" href="http://jigsaw.w3.org/css-validator/check/referer"  onclick="window.open(this.href); return false;"><img  class="w3c" src="img/valide-css.png" alt="Css valide"/></a> </div>
<div id="contact">Contact : <a class="contact" href="mailto:mecanosducoeur@sfr.fr">mecanosducoeur@sfr.fr</a></div>
</div>
<script type="text/javascript"> 
          // <![CDATA[ <!--
prechargimg('img/sponsors/mini/Logo13.png', 
'img/sponsors/mini/PacaFSE.png', 
'img/sponsors/mini/cress.png', 
'img/sponsors/mini/macif.png', 
'img/sponsors/mini/caisseepargne.png', 
'img/sponsors/mini/renault_logo.png', 
'img/sponsors/mini/europe.png', 
'img/sponsors/mini/paca.png'); 
	//]]> -->
</script>
</body>
</html>
