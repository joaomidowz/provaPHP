var i = 1;

function adicionarItem() {
  var novoItem = document.createElement("li");
  novoItem.textContent = "Novo item da lista " + i;
  document.getElementById("listaItens").appendChild(novoItem)
 i++;
}