<?php
    require_once("action/IndexAction.php");

    $action = new IndexAction();
    $data = $action->execute();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SmartClass control</title>
        <link rel="stylesheet" href="css/global.css">
        <script src="js/javascript.js"></script>
		<script src="https://notes-de-cours.com/dev/toggle-lab-info.js"></script>
    </head>
    <body>
        <div>
            <main>
                <div id="house">
                    <?php
                        $num = 0;
                        foreach ($data["lights"] as $light) {
                            $num++;
                            ?>
                            <img src="img/light-<?= $light["status"] == "1" ? "on" : "off" ?>.png" alt="light<?= $num ?>" id="light<?= $num ?>">
                            <?php
                        }
                    ?>
                </div>
            </main>
            <footer>
                <div style="display:flex">
                    <div class="refresh-section">
                        <img src="img/btn-refresh.png" alt="refresh" class="btn-refresh">
                    </div>
                    <div class="steps-section">
                        <h3>Smart Home</h3>
                        <p>
                            L'objectif est de modifier la page Web afin que l'état des lumières se mette à jour automatiquement à chaque 5 secondes, via l'utilisation d'AJAX. Voici les étapes:
                        </p>
                        <ol>
                            <li>
                                Retirer le bouton refresh, ainsi que son JavaScript, puisque le bouton ne sera plus nécessaire.
                            </li>
                            <li>
                                Remettre l'état des 6 lumières à éteinte et retirer la boucle PHP. Retirer l'appel au DAO dans IndexAction.php
                            </li>
                            <li>
                                Dans le fichier JavaScript, créer une fonction <code>updateLights()</code>, qui doit être exécutée à chaque 5 secondes via un setTimeout ou setInterval. Tester avec un <code>console.log()</code> pour vérifier.
                            </li>
                            <li>
                                Créer le fichier ajax.php (+AjaxAction.php). Cette page a comme objectif d'aller chercher l'état des lumières (via le DAO), puis de retourner les informations au JavaScript via un <code>echo json_encode...</code>. ajax.php n'a donc pas de header/footer, car le JavaScript ne doit recevoir qu'un document JSON.
                            </li>
                            <li>
                                Dans la fonction <code>updateLights()</code>, faire une requête AJAX sur la page ajax.php. Utiliser le résultat de l'appel pour mettre à jour l'état de chaque lumière, via un <code>document.querySelector("...").src = "img/light-on.png" (ou light-off.png)</code>
                            </li>
                        </ol>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>