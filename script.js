//verif formulaire

let form = document.querySelector("#formulaire");
let email_dest = document.querySelector("#email_dest");
let email_exp = document.querySelector("#email_exp");
let message = document.querySelector("#message");
form.addEventListener("submit", function(e) {
  e.preventDefault();
  //vérification

  if  (email_dest.value.match(
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  )
) {
    email_exp.focus();
    console.log(nom);
    //le nom est OK, on peut passer au suivant

    if (
      email.value.match(
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      )
    ) {
      console.log(email);
      if (message.value.match( /^[A-Za-z0-9àéèùê'.!]{5,1000}$/)) {
        console.log(message);
        form.submit();
      }
    }
  }
});
