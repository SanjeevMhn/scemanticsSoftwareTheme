const toggleOffscreenNav = () => {

	let body = document.body;
	let offscreen = document.querySelector('.offscreen-nav');
	body.classList.toggle('fixed');
	offscreen.classList.toggle('show');

}