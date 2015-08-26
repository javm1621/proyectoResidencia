
// Se llama el documento cuando esté listo
$(document).ready(init);

function init(){
	$("#mi_libro").booklet(
		{
			width: 1170,
			height: 600,

			closed: true,
			covers: true,
			autoCenter: true,
			speed: 500,

			pagePadding: 0,
			hoverWidth: 200,
		}
	);
}