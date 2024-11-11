document.getElementById("img-buscar").addEventListener("click", function () {

  document.getElementById("input-buscar").classList.toggle("mostrar");
  document.getElementById("btn-buscar").classList.toggle("mostrar");
});

// document.getElementById("img-login").addEventListener("click", function() {

//     document.getElementById("input-login").classList.toggle("mostrar");
// });

document.getElementById("img-login").addEventListener("click", function (event) {
  event.preventDefault(); // Evita que se recargue la página
  const inputLogin = document.getElementById("input-login");

  // Alterna la clase "mostrar"
  inputLogin.classList.toggle("visible");
});

// Selecciona todas las imágenes de la clase 'slide'
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

// Función para cambiar la imagen
function cambiarSlide() {
  // Oculta la imagen actual
  slides[currentSlide].classList.remove('activo');

  // Incrementa el índice para ir a la siguiente imagen
  currentSlide = (currentSlide + 1) % slides.length;

  // Muestra la nueva imagen
  slides[currentSlide].classList.add('activo');
}
cambiarSlide()
// Cambia la imagen cada 5 segundos (5000 ms)
setInterval(cambiarSlide, 2500);


