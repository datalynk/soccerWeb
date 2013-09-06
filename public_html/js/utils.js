/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function post_to_url(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }

    document.body.appendChild(form);
    form.submit();
}

/*
 * path: é o caminho para o arquivo recuperar_senha.php
 * email: é o email que o usuário escreveu quando tentou fazer login (se não escreveu, vai estar vazio).
 */
function recuperarSenha(path,email){
    email = email.replace(/\s+/g, ' ');
    
    var params = new Array();
    params["email"]=email;
    
    post_to_url(path, params);
}

function enviarEmail(email){
    alert(email);
    $.ajax({
      type: "POST",
      url: "emailer.php",
      data: "email=" + email,

      success: function(html){ // this happen after we get result
          if(html == "email_was_sent"){
              alert("email_was_sent");
          } else {
              alert("email_was_not_sent");
          }
                  
      }
  });
  
}



