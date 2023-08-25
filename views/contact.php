<?php
require_once "controllers/StructureController.php";
require_once "controllers/CustomerController.php";
ob_start(); ?>

    <h3>Même à distance, gardons le contact</h3>


    <h4>Où nous trouver ?</h4>

    <p>Notre entreprise étant essentiel, nous sommes ouvert et seront ravis de vous recevoir au quotidien de 14h à 17h, fermé le jeudi.
        <br>Nous vous invitons à venir sur place, 660 chemin de Chantemerle, 69970 Marennes.</p>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8800.410626967432!2d4.902335430417851!3d45.61004368932814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4dced69c12173%3A0x7efb85cba073c12d!2sLa%20Soci%C3%A9t%C3%A9%20Protectrice%20des%20Animaux%20(SPA)%20-%20Refuge%20de%20Lyon-Marennes!5e1!3m2!1sfr!2sfr!4v1614881560756!5m2!1sfr!2sfr"
            width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <p>Venir jeter un œil ne vous engage pas à adopter
        <br><span id="underline">Adopter vous engage à beaucoup</span></p>


    <h4>Nous contacter :</h4>

    <p>N'hésitez pas à nous contacter au <span id="blueNumber">04 72 70 46 36</span>,
        nous nous ferons un plaisir de répondre à vos questions.</p>


    <h4>S'inscrire au cours de dressage canin :</h4>

    <form method="POST" action="../controllers/addCustomer.php">
        <div>
            <label for="customerFirstName" class="labelCustomer">Prénom</label>
            <input id="customerFirstName" class="inputCustomer" type="text" name="customerFirstName" required>
        </div>
        <div>
            <label for="customerLastName" class="labelCustomer">Nom</label>
            <input id="customerLastName" class="inputCustomer" type="text" name="customerLastName" required>
        </div>
        <label for="customerPhone" class="labelCustomer">Téléphone</label>
        <input id="customerPhone" class="inputCustomer" type="tel" name="customerPhone"
               pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}">
        <div>
            <label for="customerMail" class="labelCustomer">Mail</label>
            <input id="customerMail" class="inputCustomer" type="email" name="customerMail" placeholder="@" required>
        </div>
        <div class="supBold">
            <label for="customerMessage" class="labelCustomer"><sup>Message</sup></label>
            <textarea id="customerMessage" class="inputCustomer" rows="1" name="customerMessage" placeholder="Votre message ici"></textarea>
        </div>
        <div>
            <button id="submitAddCustomer" class="button" type="submit">Valider</button>
        </div>
    </form>


    <h4>Liste des demandes concernant l'éducation canine</h4>

    <table id="contactTable">
        <tr>
            <th>Identifiant</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Numéro de téléphone</th>
            <th>Email</th>
            <th>Message</th>
        </tr>

        <?php foreach($customerObj->getCustomersArray() as $customer): ?>
        <tr>
            <td><?= $customer->getId() ;?></td>
            <td><?= $customer->getFirstName() ;?></td>
            <td><?= $customer->getLastName() ;?></td>
            <td><?= $customer->getPhone() ;?></td>
            <td><?= $customer->getMail() ;?></td>
            <td class="tableMaxWidth"><?= $customer->getMessage() ;?></td>
        </tr>
        <?php endforeach ?>
    </table>


    <h4>Supprimer un client de la base de donnée</h4>

    <p><small><em>Certains clients ont été protégés de la suppression</em></small></p>
    <form method="POST" action="../controllers/deleteCustomer.php" title="Veuillez renseigner ces trois champs.">
        <div>
            <label for="pickId" class="labelCustomer">Identifiant</label>
            <input id="pickId" class="inputCustomer" type="number" name="customerId" required>
        </div>
        <div>
            <label for="choseFirstName" class="labelCustomer">Prénom</label>
            <input id="choseFirstName" class="inputCustomer" type="text" name="customerFirstName" onkeyup="firstNameDelete.innerHTML=this.value" required>
        </div>
        <div>
            <label for="choseLastName" class="labelCustomer">Nom</label>
            <input id="choseLastName" class="inputCustomer" type="text" name="customerLastName" onkeyup="lastNameDelete.innerHTML=this.value" required>
        </div>
            <button id="submitDeleteCustomer" class="button" type="submit" onClick="return confirm('Êtes-vous certain(e) ?')">
                Supprimer <span id="firstNameDelete" class="spanContactNames"></span> <span id="lastNameDelete" class="spanContactNames"></span> définitivement</button>
    </form>

<?php
$content = ob_get_clean();
require "template.php";