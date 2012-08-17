
 CenterScreenDiv(document.getElementById('xxx'));

function CenterScreenDiv(div) {   alert("jj");

div.style.left='50%';

div.style.marginLeft = "-" + parseInt(div.offsetWidth / 2) + "px";

div.style.marginTop = parseInt(div.offsetHeight / 2) + window.document.documentElement.scrollTop + "px";

}
