var imagens = ["imagem1.jpg", "imagem2.jpg", "imagem3.jpg",]
var indiceImagem = 0;

function alterarImagem() {
  indiceImagem = (indiceImagem +1) % imagens.length;
  document.getElementById("imagem").src= imagens[indiceImagem];
}