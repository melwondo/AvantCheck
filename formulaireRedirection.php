
<?php
if(!empty($_POST)) {
    $errors = array();
    if (empty($_POST["nom"])) { 
        $errors['nom'] = "Nom";
    }
    if (empty($_POST["prenom"])) {
        $errors['prenom'] = "Prenom";
    }
    if (empty($_POST["mail"])) {
        $errors['user_mail'] = "Mail";
    }
    if (empty($_POST["tel"])) {
        $errors['tel'] = "Tel";
    }
    if (empty($_POST["choice"])) {
        $errors['choice'] = "Sujet vide";
    }
    if (empty($_POST["message"])) {
        $errors['message'] = "Message vide";
    }
    if (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)) {
        echo "Mail invalide";
    }
}
 if(isset($errors)){
      if (count($errors) ==0 ) {
         header ("Location:redirection.php");
         exit;
      }
 }?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Formulaire</title>
</head>

<body>

    <form action="redirection.php" method="post">

        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"required>
            <?php if (!empty($errors['nom'])) {
                echo $errors['nom'];
            } ?>
        </div>
        <br>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <?php if (isset($errors['prenom'])) {
                echo $errors['prenom'];
            } ?>
        </div>
        <br>
        <div>
            <label for="email">E-mail :</label>
            <input type="text" id="email" name="user_mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            <?php if (isset($errors['user_mail'])) {
                echo $errors['user_mail'];
            } ?>
        </div>
        <br>
        <div>
            <label for="tel">Telephone :</label>
            <input type="text" name="tel" pattern="[0-9]{10}" required>
            <?php if (isset($errors['tel'])) {
                echo $errors['tel'];
            } ?>

        </div>
        <br>

        <div>
            <label for="choice">Sujet</label><br/>
            <select name="choice" id="user_choice" required>
                <option value="choix1">Choix 1</option>
                <option value="choix2">Choix 2</option>
                <option value="choix3">Choix 3</option>
                <option value="choix4">Choix 4</option>
            </select>
            <?php if (isset($errors['choice'])) {
                echo $errors['choice'];
            } ?>
        </div>

        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="12" cols="20" required></textarea>
            <?php if (isset($errors['message'])) {
                echo $errors['message'];
            } ?>
        </div>
        <br>
        <div class="button">
            <button type="submit">Envoyez</button>
        </div>
    </form>
</body>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Vous êtes connecté</h2>
</body>
</html>
