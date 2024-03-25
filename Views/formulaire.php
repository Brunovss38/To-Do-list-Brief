<div id="formulaire">
    <h2> Formulaire </h2>
    <div class="row g-3">
        <div class="col-md-6">
            <label for="inputTitre" class="form-label name ">Titre</label>
            <input type="text" class="form-control" id="inputTitre">
        </div>
        <div class="col-md-6">
            <label for="inputDescription" class="form-label">Description</label>
            <input type="text" class="form-control Description" id="inputDescription">
        </div>
        <div class="col-md-6">
            <label for="inputDate" class="form-label">Date</label>
            <input type="date" class="form-control Date " id="inputDate">
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
        <div class="col-12">
            <button onclick="handleTaskRegister() " type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</div>
<script src="../TaskScript.js"></script>
</main>