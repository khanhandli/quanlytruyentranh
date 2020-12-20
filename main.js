
document.addEventListener("DOMContentLoaded",function() {
	var a = document.getElementById('click');
	var b = document.getElementsByClassName('item__list')[0];
	a.onclick = function() {
        b.classList.toggle('item__list-up');
	}

	// // Get the container element
	// var btnContainer = document.getElementsByClassName("header-nav")[0];

	// // Get all buttons with class="btn" inside the container
	// var btns = btnContainer.getElementsByClassName("header-nav__item");

	// // Loop through the buttons and add the active class to the current/clicked button
	// for (var i = 0; i < btns.length; i++) {
	//   btns[i].addEventListener("click", function() {
	//     var current = document.getElementsByClassName("active");
	//     current[0].className = current[0].className.replace(" active", "");
	//     this.className += " active";
	//   });
	// }

},false)