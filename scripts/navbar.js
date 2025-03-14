const hamburgermenu = document.getElementById('hamburger-menu');
const mainnavbar = document.getElementById('main-navbar');

hamburgermenu.addEventListener('click', () => {
	mainnavbar.classList.toggle('show');

	mainnavbar.classList.toggle('main-navbar');
});