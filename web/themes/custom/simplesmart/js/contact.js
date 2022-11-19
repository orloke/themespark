let form = document.querySelector("form")
let input_form = document.querySelectorAll('.input-form');

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
