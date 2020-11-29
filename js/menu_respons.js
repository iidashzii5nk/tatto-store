                     //Menu responsivo//


$(".submenu").click (function(){
$(this).children("ul").slideToggle();
})
/*Detener la propagacion de eventos esto funciona para 
que el menu al desplegar responsivo solo se oculte si se oprime
en el ul padre no en ninguno de sus hijos*/

$("ul").click (function(p){
p.stopPropagation();
})


                    //Buscador de contenido//

//Ejecutando funciones
document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
document.getElementById("icon-cancel").addEventListener("click", ocultar_buscador);
//Declarando variables
bars_search = document.getElementById("ctn-bars-search");
inputSearch = document.getElementById("inputSearch");/*Solo con #id*/
bars_cancel = document.getElementById("ctn-bars-cancel");
icon_search = document.getElementById("ctn-icon-search");
ico_cancel = document.getElementById("icon-cancel");


//Funcion para mostrar el buscador

function mostrar_buscador(){
	bars_search.style.top= "53px";//Esta funcion toma el top del contenedor
	inputSearch.focus();
	icon_search.style.display= "none";
	ico_cancel.style.display= "block";
}
//Funcion para ocultar el buscador

function ocultar_buscador(){
	bars_search.style.top= "-10px";
	ico_cancel.style.display= "none";
	icon_search.style.display= "block";
	icon_search.style.top= "16px";
	inputSearch.value = "";
}