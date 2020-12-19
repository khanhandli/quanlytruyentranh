
document.addEventListener("DOMContentLoaded",function() {
	var a = document.getElementById('click');
	var b = document.getElementsByClassName('item__list')[0];
	a.onclick = function() {
		console.log(b)
        b.classList.toggle('item__list-up');
	}

},false)