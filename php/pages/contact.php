<html>

<head>
    <title> Kukulkan | Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="icon" type="image/jpg" href="../../img/kulkulkan.jpg">
    <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/form.css"/>
</head>

<body>

    <!-- le header de la page -->
    <?php include("../components/header.php"); ?>

    <!-- le corps de la page -->
    <div class="corps">

        <!-- le menu à gauche de la page -->
        <?php include("../components/menu.php"); ?>

        <!-- le contenu principal à droite de la page -->
        <div class="principal">

            <h2>Contactez nous</h2>

            <?php 
            if (isset($_GET['mail'])) { 
                echo('<p>Votre message a bien été envoyé.</p>'); 
            }
            ?>
                

            <form action="../services/verifMail.php" class="form" method="post">

                <div class="champForm"><p>Date du contact</p><input type="date" name="dateContact" required /></div>
                
                <div class="champForm"><p>Nom</p><input type="text" name="nom" placeholder="Entrez votre nom" required /></div>

                <div class="champForm"><p>Prénom</p><input type="text" name="prenom" placeholder="Entrez votre prénom" required /></div>

                <div class="champForm"><p>Email</p><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" size="30" placeholder="Entrez votre adresse mail" required/></div>

                <div class="champForm"><p>Genre</p><input type="radio" name="genre" value="Femme" /> Femme <input type="radio" name="genre" value="Homme" /> Homme</div>

                <div class="champForm"><p>Date de naissance</p><input type="date" name="dateNaissance" required /></div>
                
                <div class="champForm">
                    <p>Fonction</p>
                    <select size='1' name='fonction'>
                        <option value="---">---</option>
                        <option value="enseignant">Enseignant</option>
                        <option value="ingenieur">Ingénieur</option>
                        <option value="developpeur">Développeur</option>
                    </select>
                </div>
                

                <div class="champForm"><p>Sujet</p><input type="text" name="sujet" placeholder="Entrez le sujet de votre mail" required /></div>

                <div class="champForm"><p>Contenu</p><input type="textarea" name="contenu" rows="5" cols="33" placeholder="Entrez le contenu de votre mail" required /></div>

                <div class="champForm"><p></p><input type="submit" value="Valider" id="boutonValider" class="btn"/></div>

            </form>

        </div>

    </div>

    <!-- le footer de la page -->
    <?php include("../components/footer.php"); ?>

</body>

</html>