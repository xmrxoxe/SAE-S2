<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecontact.css">
    <title>Contact BDD</title>
</head>
<body>
    <section id="pagecontact">
        <section id="leftform">
            <div id="hautform">
                <h3>Formulaire de contact</h3>
            </div>
            <form action="traitement.php" method="POST" >
                <div id="contactform">
                    <div id="infoform">
                        <img src="Rond_gris.png" alt="photo utilisateur" <?php /*php*/ ?>>
                        <p <?php /*php*/ ?>>Nom d'utilisateur</p>
                    </div>
                        <textarea name="message" id="messageform" placeholder="Message..." required></textarea>
                    </div>
                </div>
                <input id="buttonform" type="submit" value="Envoyer">

            </form>
        </section>

        <section id="rightform">
        <h2>ou nous contacter avec</h2>
        <h1>Email : xxxxx@xxxxxx.xxx</h1>
        <h1>Tel : xx-xx-xx-xx-xx</h1>
        <p>Merci pour votre message !</p>
        </section>
    </section>
</body>
</html>
