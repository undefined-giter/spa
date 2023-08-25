<?php
// ob_start() function get content between it and ob_get_clean(), which is load in the Var 'content'
ob_start(); ?>

    <p><em><small id="domain">Vous désirez le code de ce projet ?</small></em><br>
    <a id="github" href="https://github.com/undefined-giter/spa-3wa/" target="_blank">Github<i class="fas fa-level-up-alt"></i></a></p>

    <h3>Bienvenue !</h3>

    <p>Nous somme le <?= $date ?>, et nous vous présentons notre tableau des animaux</p>
    <section>
        <table id="table">
            <thead>
            <tr>
                <th class="line" colspan="3">Nombre d'animaux recueillis actuellement</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="line lineNoBottom">Chiens logés</td>
                <td class="line lineNoBottom">Chats nourris</td>
                <td class="line lineNoBottom">Octodons hébergés</td>
            </tr>
            <tr>
                <td class="line lineNoTop"><?= $dogCount ?></td>
                <td class="line lineNoTop"><?= $catCount ?></td>
                <td class="line lineNoTop"><?= $degusCount ?></td>
            </tr>
            <tr>
                <td id="total" colspan="2" class="line">Soit un total de </td>
                <td id="totalEndPhrase" class="line"><?= $petsCount ?> animaux !</td>
            </tr>
            </tbody>
        </table>
    </section>

    <p>Ça en fait des heureux ☺</p>

        <img id="svg" src="public/SVG/wordsSVG.svg" alt="Un SVG avec le champs lexical de notre SPA">


<?php
$content = ob_get_clean();
require "views/template.php";