let current_page = document.querySelector(".current-page");
let button_contact = document.querySelector(".button-contact");
let button_home = document.querySelector(".button-home");
let button_layout = document.querySelector(".button-layout");
let navbar = document.querySelector(".navbar ");
let form = document.querySelector("form")
let input_form = document.querySelectorAll('.input-form');


const setNameCurrentPage = () => {
  button_layout.classList.remove("active-button");

  if (window.location.pathname == "/contato") {
    button_contact.classList.add("active-button");
    current_page.innerHTML = "Contato";
  } else {
    button_home.classList.add("active-button");
    current_page.innerHTML = "Introdução";
  }
};

const rolagem = () => {
  if (window.scrollY > navbar.clientHeight) {
    navbar.classList.add("navbar-transparent");
  } else {
    navbar.classList.remove("navbar-transparent");
  }
};

form.addEventListener("submit", (e) => {
  e.preventDefault();
  let send =true;

  for (e of input_form) {

    let dateUser = e.value.replace(/\s+/g, '')

    if (dateUser.length == 0) {
      send = false;
      e.value = '';
      break;
    }

  }

  if (send) {

    Toastify({
      text: "Formulário enviado!",
      duration: 3000,
      style: {
        background: "green",
      }
    }).showToast();

    input_form.forEach(e =>{
      e.value = ''
    })

  }else{

    Toastify({
      text: "Preencha todos os campos corretamente!",
      duration: 3000,
      style: {
        background: "red",
      }
    }).showToast();

  }

});


window.addEventListener('load', setNameCurrentPage)
window.addEventListener("scroll", rolagem);
