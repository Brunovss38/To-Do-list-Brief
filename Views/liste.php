<main>
    <div id="listeTaches">
        <h1> Tâches à réaliser </h1>
        <ul class="list-group">
            <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                LISTE
            </button>
            <li class="list-group-item">
                <span class="badge rounded-pill text-bg-danger">Urgent</span>
                Première tâche
                <button type="button" class="btn btn-outline-primary" onclick="openModal()">✛</button>
            </li>

            <li class="list-group-item">
                <span class="badge rounded-pill text-bg-warning">Important</span>
                Deuxième tâche
                <button type="button" class="btn btn-outline-primary" onclick="openModal()">✛</button>
            </li>

            <li class="list-group-item">
                <span class="badge rounded-pill text-bg-success">Normal</span>
                Troisième tâche
                <button type="button" class="btn btn-outline-primary" onclick="openModal()">✛</button>
            </li>

            <li class="list-group-item">
                <span class="badge rounded-pill text-bg-danger">Urgent</span>
                Quatrième tâche
                <button type="button" class="btn btn-outline-primary" onclick="openModal()">✛</button>
            </li>
        </ul>
    </div>

    <!-- Modal recapitulatif-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Récapitulatif</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" id="closeAndOpenModalBtn" class="btn btn-secondary">Modifier</button>
                    <button type="button" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal modification de la tâche -->
    <div class="modal fade nouvelle-modal" tabindex="-1" aria-labelledby="nouvelleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="nouvelleModalLabel">Modification de la tâche</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputTitre" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="inputTitre">
                        </div>
                        <div class="col-md-6">
                            <label for="inputDescription" class="form-label">Description</label>
                            <input type="text" class="form-control" id="inputDescription">
                        </div>
                        <div class="col-md-6">
                            <label for="inputDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="inputDate">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPriorite" class="form-label">Priorité</label>
                            <select id="inputPriorite" class="form-select">
                                <option>Normal</option>
                                <option>Important</option>
                                <option>Urgent</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPriorite" class="form-label">Catégories</label>
                            <select id="inputPriorite" class="form-select">
                                <option>Travail</option>
                                <option>Personnel</option>
                                <option>Sport</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>