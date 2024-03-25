

// La fonction jouée onclick sur le bouton submit
async function handleRegister() {

    // Première étape, on récupere les values des inputs
    let firstName = document.querySelector(".firstName").value
    let lastName = document.querySelector(".lastName").value
    let password = document.querySelector(".password").value
    let email = document.querySelector(".email").value

    // On construit un objet dont les clefs ( nom de champs) doivent être identiques à la classe User.
    let user = {
        First_Name: firstName,
        Last_Name: lastName,
        Password: password,
        Email: email,

    }


    // On crée les paramètres de la requête HTTP qui sera envoyée à PHP
    let params = {

        method: "POST",

        headers: {
            "Content-Type": "application/json; charset=utf-8",
        },


        body: JSON.stringify(user),
    };

    fetch("./register.php", params)
        .then((res) => res.text())
        .then((data) => {
            handleFetchResponse(data)
        }).catch((e) => {
            console.log(e)
        });
}


function handleFetchResponse(data) {
    console.log(data)
    // SI PHP renvoi le mot clef Email already taken
    if (data === "Email already taken") {
        let toast = document.querySelector(".toast")
        toast.innerText = data

    } else {
        let registerForm = document.querySelector(".formRegister")
        registerForm.classList.add("hidden")
        // Le formulaire disparait
    }
}