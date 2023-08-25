<?php
session_start();
ob_start(); ?>

    <h3>Trouvez votre amour</h3>

<?php if(isset($_SESSION['role']) == 'staff'): ?>
    <button id="changeability" class="hidden">Modifier</button>
<?php endif; ?>

<?php for($i = 0; $i < count($pets); $i++): ?>

    <section class="petGeneral">
        <article>
            <div class="icon">
                <?php switch($pets[$i]->getKind()):
                    case 0:
                        echo "<i class='fas fa-dog'></i>";
                        break;
                    case 1:
                        echo "<i class='fas fa-cat'></i>";
                        break;
                    case 2:
                        echo "<img src='public/img/degus/degusIcon.png' alt='Un octodon schématisé'>";
                        break;
                    default:
                        echo "FAILED to display the logo kind of the current pet";
                endswitch ?>
            </div>
            <div class="presentation">
                <?php if(empty($pets[$i]->getName())):
                    echo $_SESSION['formName'];
                else: ?>
                <p>"<em class='name'><?= $pets[$i]->getName() ?></em>"
                <?php endif; ?>
                <?php if($pets[$i]->getStatus() === 0):
                    echo " est disponible !</p>";
                elseif($pets[$i]->getStatus() === 1):
                    echo " sera bientôt disponible...</p>";
                else:
                    echo " est indisponible, mais vous pouvez en aider d'autres ♥</p>";
                endif; ?>
            </div>
        </article>
        <section class="blockPresentation">
            <article>
                <div>
                    <p class="labelsTypo">Espèce</p>
                    <p class="infosTypo">
                        <?php if($pets[$i]->getKind() === 0):
                            echo 'Chien';
                        elseif($pets[$i]->getKind() === 1):
                            echo 'Chat';
                        else:
                            echo 'Octodon';
                        endif; ?>
                    </p>
                </div>
                <div>
                    <p class="labelsTypo">Race</p>
                    <p class="infosTypo"><?= $pets[$i]->getBreed(); ?></p>
                </div>
                <div>
                    <p class="labelsTypo">Age</p>
                    <p class="infosTypo"><?= $pets[$i]->getAge(); ?>
                        <?php if($pets[$i]->getAgeUnitMeasure() === 0):
                            echo 'mois';
                        elseif($pets[$i]->getAgeUnitMeasure() === 1 && $pets[$i]->getAge() <= 1):
                            echo 'an';
                        else:
                            echo 'ans';
                        endif; ?>
                    </p>
                </div>
                <div>
                    <p class="labelsTypo">Description</p>
                    <p class="infosTypo">
                        <?php if($pets[$i]->getId() === 57): ?>
                        <span id="specialDog"><?= $pets[$i]->getDescription(); ?></span>
                        <?php else: ?>
                            <?= $pets[$i]->getDescription(); ?>
                        <?php endif; ?>
                    </p>
                </div>
                <div>
                    <p class="labelsTypo">Sexe</p>
                    <p class="infosTypo">
                        <?php if($pets[$i]->getSex() === 0):
                            echo 'Mâle';
                        elseif($pets[$i]->getSex() === 1):
                            echo 'Femelle';
                        elseif($pets[$i]->getSex() === 2):
                            echo 'Indéfini';
                        elseif($pets[$i]->getSex() === 3):
                            echo 'Mâle - Castré';
                        else:
                            echo 'Femelle - Stérilisée';
                        endif; ?>
                    </p>
                </div>
            </article>
            <article class="articlePicture">
                <?php if($pets[$i]->getFileExtension() === 0): ?>
                    <!-- This is not really clear to read but here is the picture part, I just get the good folder and the good description of it -->
                    <img class="picture" src="public/img/<?php if($pets[$i]->getKind() === 0): ?>dogs/<?php elseif($pets[$i]->getKind() === 1): ?>cats/<?php else: ?>degus/<?php endif ?><?= $pets[$i]->getPicture(); ?><?='.png'?>" alt="<?= $pets[$i]->getPicDescribed(); ?>">
                <?php elseif($pets[$i]->getFileExtension() === 1): ?>
                    <img class="picture" src="public/img/<?php if($pets[$i]->getKind() === 0): ?>dogs/<?php elseif($pets[$i]->getKind() === 1): ?>cats/<?php else: ?>degus/<?php endif ?><?= $pets[$i]->getPicture(); ?><?='.jpg'?>" alt="<?= $pets[$i]->getPicDescribed(); ?>">
                <?php else: ?>
                    <img class="picture" src="public/img/<?php if($pets[$i]->getKind() === 0): ?>dogs/<?php elseif($pets[$i]->getKind() === 1): ?>cats/<?php else: ?>degus/<?php endif ?><?= $pets[$i]->getPicture(); ?><?='.png'?>" alt="<?= $pets[$i]->getPicDescribed(); ?>">
                <?php endif; ?>
            </article>
        </section>
    </section>

    <?php if(isset($_SESSION['role']) == ('staff')): ?>
        <div class="changes">
            <form id="newForm<?= $i ?>" class="newForm" method="POST" action="../controllers/editPetMethod.php" onSubmit="return confirm('Êtes-vous certain(e) de vouloir modifier les informations concernant <?= $pets[$i]->getName() ?> ?')"
                  title="Certains animaux ont été protégés de la modification et de la suppression&#10;Créez-en un si vous voulez être sûr(e) de pouvoir le modifier">
                <input id="idJS<?= $i ?>" type="hidden" name="petId" value="<?= $pets[$i]->getId() ?>">
                <label for="newFormName<?= $i ?>">Renommer</label>
                <input id="newFormName<?= $i ?>" class="newFormName" name="newName" type="text" placeholder="<?= $pets[$i]->getName() ?>" value="<?= $pets[$i]->getName() ?>">
                <p class="block"></p>
                <label for="formNewAge<?= $i ?>">Age</label>
                <input id="formNewAge<?= $i ?>" class="formNewAge" name="newAge" type="number" min="0" required>
                <!-- Next time, use words as values -->
                <input id="newMonth<?= $i ?>" type="radio" name="newAgeUnitMeasure" value="0" checked>
                <label for="newMonth<?= $i ?>">mois</label>
                <input id="newYear<?= $i ?>" type="radio" name="newAgeUnitMeasure" value="1">
                <label for="newYear<?= $i ?>">année(s)</label>
                <p class="block"></p>
                <input id="male<?= $i ?>" class="male" name="newSex" type="radio" value="0" required>
                <label for="male<?= $i ?>">Mâle</label>
                <input id="female<?= $i ?>" class="female" name="newSex" type="radio" value="1">
                <label for="female<?= $i ?>">Femelle</label>
                <input id="other<?= $i ?>" class="other" name="newSex" type="radio" value="2">
                <label for="other<?= $i ?>">Non défini</label>
                <p class="block"></p>
                <input id="maleSterilized<?= $i ?>" class="maleSterilized" name="newSex" type="radio" value="3">
                <label for="maleSterilized<?= $i ?>">Mâle - Stérilisé</label>
                <input id="femaleSterilized<?= $i ?>" class="femaleSterilized" name="newSex" type="radio" value="4">
                <label for="femaleSterilized<?= $i ?>">Femelle - Stérilisée</label>
                <p class="block"></p>
                <label for="newStatus<?= $i ?>">Disponibilité</label>
                <select id="newStatus<?= $i ?>" name="newStatus">
                    <option disabled>Choisissez</option>
                    <option value="0">Disponible</option>
                    <option value="1">Bientôt disponible</option>
                    <option value="2">Non Disponible</option>
                </select>
                <p class="block"></p>
                <label for="formOutDate<?= $i ?>">Date de sortie</label>
                <input id="formOutDate<?= $i ?>" class="formOutDate" type="datetime-local" name="newOutDate"/>
                <p class="block"></p>
                <span id="uniqueLineHeight<?= $i ?>" class="lineHeight"></span>
                <label for="newFormComment<?= $i ?>" class="hidden">Commentaire interne</label>
                <textarea id="newFormComment<?= $i ?>" name="newReason" placeholder="Un commentaire interne ?" cols="23" rows="1" maxlength="5119"></textarea>
                <p class="block"></p>
                <button class="allChangesTypo" type="submit">Modifier <?= $pets[$i]->getName() ?></button>
            </form>
            <form method="POST" action="Supprimer_un_animal" onSubmit="return confirm('Êtes-vous sûre de vouloir supprimer <?= $pets[$i]->getName() ?> définitivement ?')"
                  title="Certains animaux ont été protégés de la modification et de la suppression&#10;Créez-en un si vous voulez être sûr(e) de pouvoir le supprimer">
                <input type="hidden" name="retrievesPetId" value="<?= $pets[$i]->getId() ?>">

                <button class="allChangesTypo" type="submit">Supprimer <?= $pets[$i]->getName() ?></button>
            </form>
        </div>
    <?php endif; ?>
    <hr class="petSeparator">
<?php endfor ?>

<?php if(isset($_SESSION['role']) == 'staff'): ?>
    <form action="Ajouter_un_animal">
        <label for="addPetLink" class="allChangesTypo"></label>
        <input id="addPetLink" type="submit" value="Présenter un nouvel animal" />
    </form>
<?php endif; ?>

    <a id="hautDePage" href="#Menu">Haut de page</a>

    <script src="./js/script.js"></script>
<?php
$content = ob_get_clean();
require "template.php";