'use strict';
let changetheme = document.getElementById("themechange");
changetheme.addEventListener("click",function(){
    event.preventDefault();
let sheet = document.getElementsByTagName("link");
//styler change on clicl
sheet[0].getAttribute("href") ==="css/styles.css"?sheet[0].setAttribute("href","css/styles-light.css"):sheet[0].setAttribute("href","css/styles.css"); // Enjoy, Crystal
//text change on style change
sheet[0].getAttribute("href") ==="css/styles.css"?changetheme.innerHTML="Theme: Dark":changetheme.innerHTML="Theme: Light"; //Bet you're gonna hate me now
});