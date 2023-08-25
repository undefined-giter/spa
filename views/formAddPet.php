<?php
if(isset($_SESSION['role']) != 'staff'):
    header('Location: https://spa.leorip.com/Tous_nos_animaux');
endif;

ob_start();
?>
    <form id="globalFormAddPet" method="POST" action="../controllers/addPetMethod.php">
        <div class="formAddPet">
            <label for="formName">Nom</label>
            <input id="formName" type="text" name="name">
        </div>
        <div class="formAddPet">
            <input id="dog" type="radio" name="kind" value="0" checked>
            <label for="dog">Chien</label>
            <input id="cat" type="radio" name="kind" value="1">
            <label for="cat">Chat</label>
            <input id="degus" type="radio" name="kind" value="2">
            <label for="degus">Octodon</label>
        </div>
        <div class="formAddPet">
            <label for="breed">Espèce</label>
            <input id="breed" type="text" name="breed" required>
        </div>
        <div class="formAddPet">
            <label for="age">Age</label>
            <input id="age" type="number" name="age" min="0" required>
            <input id="month" type="radio" name="ageUnitMeasure" value="0" checked>
            <label for="month">mois</label>
            <input id="formYear" type="radio" name="ageUnitMeasure" value="1">
            <label for="formYear">année(s)</label>
        </div>
        <div class="formAddPet">
            <label for="describeBeing">Description de l'animal</label>
            <textarea id="describeBeing" name="description" rows="1" required></textarea>
        </div>
        <div class="formAddPet">
            <label for="photo">Photo</label>
            <input id="photo" type="text" name="picturePath" title="Pensez à placer votre photo dans le dossier prévu à cet effet, celui-ci :
.../spa/public/img/dogs OU cats OU degus/   --> IciVotrePhoto(extention: .png .jpg OU .pdf sont les seules autorisés)
dogs est le dossier pour les photos de chiens,
cats pour les photos de chats,
degus pour les photos d'octodons."
                   placeholder="nomPhoto (.sans ext)">
            <select id="extension" name="fileExtension">
                <optgroup label="Extension :">
                <option value="0">.png</option>
                <option value="1">.jpg</option>
                <option value="2">.pdf</option>
            </select>
            <label for="extension">.ext</label>
        </div>
        <div class="formAddPet">
            <label for="picDescription">Description (photo)</label>
            <textarea id="picDescription" name="picDescribed" rows="1" placeholder="optionnel"></textarea>
        </div>
        <div class="formAddPet">
            <input id="male" type="radio" name="sex" value="0" checked>
            <label for="male">Male</label>
            <input id="female" type="radio" name="sex" value="1">
            <label for="female">Femelle</label>
            <input id="other"  type="radio" name="sex" value="2">
            <label for="other">Non défini</label>
            <p class="block"></p>
            <input id="maleSterilized" type="radio" name="sex" value="3">
            <label for="maleSterilized">Male - Stérilisé</label>
            <input id="femaleSterilized" type="radio" name="sex" value="4">
            <label for="femaleSterilized">Femelle - Stérilisée</label>
        </div>
        <div class="formAddPet">
            <label for="available">Disponibilité actuelle</label>
            <select id="available" name="available">
                <optgroup label="Disponibilité :">
                <option value="0">Disponible</option>
                <option value="1">Bientôt disponible</option>
                <option value="2">Non Disponible</option>
            </select>
        </div>
        <div class="formAddPet">
            <label for="internComment"><sup id="inComment">Commentaire int.</sup></label>
            <textarea id="internComment" rows="1" maxlength="5119" name="reason" placeholder="optionnel"></textarea>
        </div>

            <button id="submitAddPet" type="submit">Valider</button>
    </form>

<?php
$content = ob_get_clean();
require "template.php";