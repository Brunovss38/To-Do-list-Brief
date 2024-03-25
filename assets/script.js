// Modal récapitulative

function openModal() {
  const modal = new bootstrap.Modal(document.getElementById("exampleModal"));
  modal.show();
}

// Modal modification de la tâche

// Récupérer le bouton "Modifier"
const closeAndOpenModalBtn = document.getElementById('closeAndOpenModalBtn');

// Ajouter un gestionnaire d'événements pour le clic sur le bouton "Modifier"
closeAndOpenModalBtn.addEventListener('click', function() {
    // Fermer la modal actuelle
    const currentModal = document.querySelector('.modal.show');
    const currentModalInstance = bootstrap.Modal.getInstance(currentModal);
    currentModalInstance.hide();

    // Afficher la nouvelle modal
    const nouvelleModal = document.querySelector('.nouvelle-modal');
    const nouvelleModalInstance = new bootstrap.Modal(nouvelleModal);
    nouvelleModalInstance.show();
});

async function taskRegister(){
  let titre = document.querySelector("inputTitre").value
  let description =  document.querySelector("inputDescription").value
  let date =  document.querySelector("inputDate").value
  // let priorite =  document.querySelector("inputPriorite").value
  // let category =  document.querySelector("inputCategory").value

  let task = {
    titre_task :inputTitre,
    description_task :inputDescription,
    date_task :inputDate,
    // priorite_task :inputPriorite,
    // category_task :inputCategory,
  }

  let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },

    body: JSON.stringify(user),
  };

  fetch("./taskRegister.php", params)
    .then((res) => res.text())
    .then((data) => {
      handleFetchResponse(data)
    }).catch((e) => {
      console.log(e)
    });
}
