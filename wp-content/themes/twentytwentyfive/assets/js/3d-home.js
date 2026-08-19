(function(){
	const card = document.querySelector('.floating-card');
	const hero = document.getElementById('heroCanvas');
	if (!card || !hero) return;

	hero.addEventListener('mousemove', (e) => {
		const r = hero.getBoundingClientRect();
		const x = e.clientX - r.left - r.width/2;
		const y = e.clientY - r.top - r.height/2;
		const rx = (-y/ r.height) * 20;
		const ry = (x/ r.width) * 20;
		card.style.transform = `rotateX(${rx}deg) rotateY(${ry}deg) translateZ(30px)`;
	});
	hero.addEventListener('mouseleave', () => {
		card.style.transform = '';
	});
})();

// Banner scene layered parallax
(function(){
	const scene = document.getElementById('bannerScene');
	if (!scene) return;
	const layers = Array.from(scene.querySelectorAll('.layer'));

	scene.addEventListener('mousemove', (e) => {
		const r = scene.getBoundingClientRect();
		const x = (e.clientX - r.left) / r.width - 0.5;
		const y = (e.clientY - r.top) / r.height - 0.5;

		layers.forEach(layer => {
			const depth = parseFloat(layer.getAttribute('data-depth')) || 0.05;
			const tx = x * depth * 60;
			const ty = y * depth * -40;
			layer.style.transform = `translate3d(${tx}px, ${ty}px, 0) translateZ(${depth * 100}px)`;
		});
	});
	scene.addEventListener('mouseleave', () => {
		layers.forEach(layer => layer.style.transform = '');
	});
})();
