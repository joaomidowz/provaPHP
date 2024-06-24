var contadorClick = 0;

function contarClick() {
  contadorClick++
  document.getElementById("contador").textContent = contadorClick + " cliques";
}