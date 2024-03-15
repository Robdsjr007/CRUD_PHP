const form = document.getElementById("formCad");
const email = document.getElementById("emailCad");
const password = document.getElementById("passwordCad");
const button = document.getElementById("btnCad");

button.addEventListener('click', (event) => {
    event.preventDefault();

    if (!email.value || !password.value) {
        alert("Email ou senha inválida");
    } else {
         formData = {
            email: email.value,
            password: password.value
        };

        fetch("../model/cadastro.php", {
            method: "POST", 
            body: JSON.stringify(formData)
          
        })
        .then(response => response.json())
            .then(data => {
                console.log(data); // Aqui você pode manipular a resposta do servidor
            })
            .catch(error => {
                console.error('Erro:', error);
            });
            
    }
});


