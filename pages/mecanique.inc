<script src="/js/embeded.js" type="text/javascript"></script>

<p>Voici quelques vidéos publiées par <a href="http://www.dicodelauto.com"
onclick="window.open(this.href); return false;">www.dicodelauto.com</a> sur <a
href="http://www.youtube.com/user/Dicodelauto" onclick="window.open(this.href);
return false;">leur chaîne YouTube</a>, vous explique comment réaliser
vous-mêmes l'entretien de votre véhicule.</p>

<?php
	function integrateYoutube($url,$titre){
		print("<div><a href=\"https://youtu.be/$url\" onclick=\"displayEmbeded('https://www.youtube.com/v/$url?version=3&amp;hl=fr_FR&amp;autoplay=1');return false;\">".
		" <img alt=\"$titre\" src=\"https://img.youtube.com/vi/$url/1.jpg\" /><br />$titre</a></div>");
	}
		

?>
<table style="border:0px">
<tr>
<td> <?php integrateYoutube("WY9x_K6wJHc","Introduction");  ?> </td>
<td> <?php integrateYoutube("1vWmXuMSZtU","Circuit de charge");  ?> </td>
<td> <?php integrateYoutube("ZTpMbp32nEs","Les freins");  ?> </td>
<td> <?php integrateYoutube("Qz_vh_FQhXM","Essuie-glace");  ?> </td>
<td> <?php integrateYoutube("yTYL82PTH4c","Feux voiture");  ?> </td>
</tr><tr>
<td> <?php integrateYoutube("btbgwuV3xOg","Courroie de distrib.");  ?> </td>
<td> <?php integrateYoutube("cLgizxehcCo","Vidange et huile");  ?> </td>
<td> <?php integrateYoutube("oe6uAsIthO8","Filtre à air voiture");  ?> </td>
<td> <?php integrateYoutube("2s5ImJ1i72w","Les niveaux");  ?> </td>
<td> <?php integrateYoutube("R7sSdf2J6Dc","Contrôle technique");  ?> </td>
</tr><tr>
<td> <?php integrateYoutube("6XJrJxPM-NU","Les pneus");  ?> </td>
</tr>
</table>
