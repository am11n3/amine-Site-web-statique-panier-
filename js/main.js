$(function (){
	'use strict';
	var winH	=$(window).height(),
		upperH	=$('.upper-bar').innerHeight(),
		navH	=$('.navbar').innerHeight();
	$('.slider,.carousel-item').height(winH - ( upperH + navH));
});

var removeCart =document.getElementsByClassName('btn-danger')
console.log(removeCart)
for (var i = 0; i < removeCart.length; i++) 
{
	var button = removeCart[i]
	button.addEventListner('click',function(event){
		console.log('clicked')
	})
}