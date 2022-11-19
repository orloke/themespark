let current_page = document.querySelector(".current-page");
let button_contact = document.querySelector(".button-contact");
let button_home = document.querySelector(".button-home");
let button_layout = document.querySelector(".button-layout");
let navbar = document.querySelector(".navbar ");



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


window.addEventListener('load', setNameCurrentPage)
window.addEventListener("scroll", rolagem);
