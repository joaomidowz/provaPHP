function validateForm() {
  const name = document.getElementById("name").value;
  const surname = document.getElementById("surname").value;
  const phone = document.getElementById("phone").value;
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  document.querySelectorAll(".error").forEach((element) => {
    element.classList.remove("error", "success");
  });

  if (name === "" || surname === "" || phone === "") {
    document.getElementById("name").classList.add("error");
    document.getElementById("surname").classList.add("error");
    document.getElementById("phone").classList.add("error");
    document.getElementById("value").classList.add("error");
    document.getElementById("category").classList.add("error");
  } else {
    document.getElementById("name").classList.add("success");
    document.getElementById("surname").classList.add("success");
    document.getElementById("phone").classList.add("success");
    document.getElementById("value").classList.add("success");
    document.getElementById("category").classList.add("success");
  }
}

// document.getElementById("submit-btn").addEventListener("click", validateForm);
