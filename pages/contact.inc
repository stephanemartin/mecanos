<h1>Horaires d'ouverture</h1>
<ul>
	<li>Du lundi au jeudi de 8h30 à 12h et 13h à 17h</li>
	<!-- <li>Vendredi de 9h à 12h</li> -->
</ul>
<h1>Adresse</h1>
<p class="address">
Les Mécanos du cœur<br/>
12 traverse Magnan<br/>
13003 Marseille
</p>
<p class="tel">
Tel : 04 91 64 55 80.<br/>
Fax : 09 72 32 32 64.
</p>
<p>Email : <a href="mailto:mecanosducoeur@sfr.fr">mecanosducoeur@sfr.fr</a></p> 
<h1>Acc&egrave;s</h1>
<p class="address">
La traverse Magnan étant fermée au milieu.

Veuillez passer par la rue de la chapelle ou la rue du portail (en face de la station service jaune de Briançon).
</p>

<p><a href="http://www.google.com/maps?q=Les+M%C3%A9canos+du+Coeur&amp;hl=fr&amp;ie=UTF8&amp;sll=43.31679,5.371026&amp;sspn=0.009492,0.022724&amp;t=h&amp;z=16" onclick="window.open(this.href); return false;">Lien google maps</a></p>
<!-- <p><a href="http://www.google.com/uds/modules/elements/mapselement/iframe.html?maptype=roadmap&latlng=43.31746592912132%2C5.369911193847656&mlatlng=43.31679%2C5.371026&maddress1=12%20Traverse%20Magnan&maddress2=13003%20Marseille%2C%20France&zoom=16&mtitle=Les%20M%C3%A9canos%20du%20Coeur&element=true">Lien google maps</a></p> -->

<div id="map-canvas" style="width: 700px; height: 500px; background-image:url('/img/map.png')"></div>
<script type="text/javascript">
// <![CDATA[ 
function initMap() {
	var mapOptions = {
center: new google.maps.LatLng(43.316857,5.371027),
	zoom: 15,
	mapTypeId: google.maps.MapTypeId.HYBRID
	};
	var map = new google.maps.Map(document.getElementById("map-canvas"),
			mapOptions);
 var myLatlng = new google.maps.LatLng(43.316857,5.371027);
 var contentString = '<p>Les Mécanos du cœur<br/>12 traverse Magnan<br/>13003 Marseille</p><p>Tel : 04 91 64 55 80<br/>Fax : 09 72 32 32 64</p>'
			         title: 'Les Mécanos du cœur'
 var infowindow = new google.maps.InfoWindow({
       content: contentString,
             maxWidth: 200
	       });
	       var marker = new google.maps.Marker({
	             position: myLatlng,
		           map: map,
				   });
				   google.maps.event.addListener(marker, 'click', function() {
				       infowindow.open(map,marker);
				         });
}
google.maps.event.addDomListener(window, 'load', initialize);
// ]]> 
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgL-diz9nfBQxB3dDbbYjv-fsfBb5Zeuk&callback=initMap"
    async defer></script>


