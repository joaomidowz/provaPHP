 function validarForm() {
  var nome = document.getElementById("name").value;
  var email = document.getElementById("email").value;

  if (nome === '' || email === '') {
    alert("Preencha seus dados!")
    document.getElementById("name").classList.add("error")
    document.getElementById("email").classList.add("error")
    return false
  }

  return true
 }