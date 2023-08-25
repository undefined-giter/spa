<?php
ob_start(); ?>

<h3>Une présentation en bonne et due forme</h3>

<section id="homepageSection">
    <div class="homeTopPadding">
        <h4>Toute l'équipe de la SPA de Lyon est heureuse de vous voir</h4>
        <p>
            Notre refuge a pour but de protéger les animaux de toute espèce, bien que notre spécialité Lyonnaise soit les chiens, chats et les rongeurs.
            <br>Ainsi, notre refuge se bat quotidiennement pour installer du matériel adapté à nos mammifères adorés, pour pouvoir les accueillir dans le respect et la dignité qu'ils méritent.
        </p>
    </div>
    <div class="homeTopPadding">
        <h4>Ensemble</h4>
        <p>
            Notre organisme est reconnu par l'État et constitue la seconde ligne de protection animalière, juste après vous !
            <br>Nous somme là grâce à vos généreux dons, merci !
            <br>Grâce à eux, nous pourrons d'ici 2 ans nous divertir dans les espèces recueillies et aménageons d'ores et déjà les locaux de demain pour de futurs lapins !
        </p>
    </div>
    <div class="homeTopPadding">
        <h4>Aller plus loin</h4>
        <p>
            La SPA de Lyon innove et ose ce qui nous l'espérons, sera demain la norme nationale :
            <br>pour éviter le stress et la déprime de nos compagnons, nous accompagnons régulièrement leur journée de musique adaptée à leur goût.
            <br>Notre SPA tentant par tous les moyens de convenir au bien-être animal, nous sommes partenaires de recherche avec le CNRS dans l'étude bénigne de comportement animal.
        </p>
    </div>
    <div class="homeTopPadding">
        <h4>Nous vous accompagnons au quotidien</h4>
        <p>
            La SPA ne vous laissera jamais seul, vous et votre animal. Ainsi, nous avons créé, depuis deux ans, des ateliers gratuits d'éducation canine et nos maitres-chiens sont passionnés et expérimentés. Ils partageront leurs connaissances avec grand plaisir, pour le confort de toutes et tous.
            <br>Votre SPA, force d'innovation, n'ayant pour seul but que le bien-être animal, s'adapte à la situation actuelle en créant des vidéos vous aidant dans l'éducation de votre amour depuis chez vous (désolé, mais en revanche nous sommes incompétents concernant le comportement de votre belle-mère).
        </p>
    </div>
    <div>
        <h4>Informations utiles</h4>
        <video controls>
            <source src="public/movie/dogSleepPosition-happyPetHappyMaster.mp4"
                    type="video/mp4">
            <p>Votre navigateur ne supporte pas le format de vidéo.</p>
        </video>
        <p id="javascript"><em><small>Nécessite JavaScript</small></em></p>
        <div id="infoCustom">
            <div id="yearDiv">
                <label for="year">Vous souhaitez connaitre la première lettre à donner à votre animal en fonction d'une année ?</label>
                <input id="year" class="block" type="number" placeholder="YYYY" min="1926" max="2034">
                <button id="btnYear">Quelle lettre ?</button>
                <p id="answerLetter"> </p>
            </div>
            <div id="letterDiv">
                <label for="letter">Le nom de l'animal correspond aux références et vous souhaitez connaitre son âge ?</label>
                <input id="letter" class="block" type="text" pattern="[A-Za-z]{1}" placeholder="A">
                <button id="btnLetter">Quelle année ?</button>
                <p id="answerYear"> </p>
            </div>
            <div> </div>
            <div id="ageDogDiv">
                <label for="ageDog">Vous souhaitez connaitre l'équivalence humaine de l'âge de votre chien(ne) ?</label>
                <input id="ageDog" class="block" type="number" placeholder="âge en année(s)" title="Pour un chien entre 15 et 40Kg" min="0">
                <button id="btnDog">Quel âge ?</button>
                <p id="answerDog"> </p>
            </div>
            <div id="ageCatDiv">
                <label for="ageCat">Vous souhaitez connaitre l'équivalence humaine de l'âge de votre chat(te) ?</label>
                <input id="ageCat" class="block" type="number" placeholder="âge en année(s)" min="0">
                <button id="btnCat">Quel âge ?</button>
                <p id="answerCat"> </p>
            </div>
            <div id="ageDegusDiv">
                <label for="ageDegus">Vous souhaitez connaitre l'équivalence humaine de l'âge de votre octodon ?</label>
                <input id="ageDegus" class="block" type="number" placeholder="âge en année(s)" min="1">
                <button id="btnDegus">Quel âge ?</button>
                <p id="answerDegus"> </p>
            </div>
        </div>
        <blockquote id="quote">
            Étymologiquement, « l'information » est <q id="inQuote"> ce qui donne une forme à l'esprit </q>.
            <br>La SPA s'efforce de partager l'information de qualité au plus grand nombre et gratuitement grâce à vos dons.
        </blockquote>
    </div>
    <h4>Mini jeu</h4>
    <div>
        <div>
            <p>Chez la SPA on essaye d'être de bonne humeur, et pour finir de vous souhaiter la bienvenue on vous propose un mini-jeu, Youhoo !</p>
        </div>
        <div>
            <p>On vous donne une année aléatoire, et vous tentez de devinez quelle lettre y a attribué le conseil d'administration du LOOF pour l'année en question.</p>
            <button id="start">Jouer</button>
            <div id="randYear" class="purple"></div>
            <label for="userAnswer">Votre réponse :</label>
            <input id="userAnswer" type="text" placeholder="A" maxlength="1" onkeyup="allowSubmit()">
            <button id="submit">Soumettre</button>
            <div>
                <p id="rest">Chances : <span id="restNb">5</span></p>
                <p id="score">Score : <span id="scoreNb">0</span></p>
                <p id="result"></p>
            </div>
        </div>
    </div>
</section>
<script src="js/pets.js"></script>

<?php
$content = ob_get_clean();
require "views/template.php";