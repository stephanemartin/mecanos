function hideEmbeded(){
   var content=document.getElementById('corp');
   if (content)
	    content.style.display='block';
   var div=document.getElementById('popup');
   if(div){
   	clearobj(div);
	div.style.display='none';
   }
}
function addParam(obj,name,value){
    var param=document.createElement('param');
    param.setAttribute('name',name);
    param.setAttribute('value',value);
    obj.appendChild(param);
}
function clearobj(div){
	var del=document.getElementById('objpopup');
	if (del)
		div.removeChild(del);
	var del=document.getElementById('closepopup');
	if (del)
		div.removeChild(del);
}
function displayEmbeded(url){
    var posx=document.body.clientWidth/2-560/2;
    var posy=document.body.clientHeight/2-175;
    var div=document.getElementById('popup');
   if(div){
   	div.style.display='block';
	//clearobj(div);
	/*hideEmbeded();*/
   }
    var content=document.getElementById('corp');
    if (content)
	    content.style.display='none';

     var emb=document.createElement('embed');
     emb.setAttribute('id','embpopup');
     emb.setAttribute('src',url);
     emb.setAttribute('type','application/x-shockwave-flash');
     emb.setAttribute('width','560');
     emb.setAttribute('height','349');
     emb.setAttribute('allowscriptaccess','always');
     emb.setAttribute('allowfullscreen','true');

    
     var obj=document.createElement('object');
     obj.setAttribute('id','objpopup');
     obj.setAttribute('width','560');
     obj.setAttribute('height','349');
     addParam(obj,'movie',url);
     addParam(obj,'allowFullScreen','true');
     addParam(obj,'allowscriptaccess','always');
     obj.appendChild(emb);
     
     var clo=document.createElement('div');
     clo.setAttribute('id','closepopup');
     clo.setAttribute('onclick','hideEmbeded();');
    
     div.appendChild(clo);
     div.appendChild(obj);

}

