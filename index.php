<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>
</head>

<body>

  <form action="/thanks.php" method="post">
    <div>
      <label for="Name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label for="lastName"> Lastname:</label>
      <input type="text" id="lastName" name="lastName" required>
    </div>
    <div>
      <label for="mail">e-mail :</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <select id="subjects" name="subjects">
        <option seleced>reclamations</option>
        <option>renseignements</option>
        <option>félicitations</option>
        <option>encouragements</option>
      </select>
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="message" required></textarea>
    </div>
    <div>
      <label for="phone">Enter your phone number:</label>
      <input type="tel" id="phone" name="phone" maxlength="10" required>
    </div>
    <div class="button">
      <button type="submit">Send your message</button>
    </div>
  </form>

  <?php

  function retour($retour)
  {
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $lastname = $_POST['lastName'];
      $subjects = $_POST['subjects'];
      $message = $_POST['message'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      echo ("Merci" . $lastname . $name . "de nous avoir contacté à propos de" . $subjects . "." . PHP_EOL .
        "Un de nos conseiller vous contactera soit à l’adresse"  . $email . "ou par téléphone au" . $phone . "dans les plus brefs délais pour traiter votre demande :"
        . $message);
        return ('Merci ' . $_POST['name'] . ' de nous avoir contacté à propos de ' . $_POST['subjects'] . '.' .'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['email'] . ' ou par téléphone au ' . $_POST['phone'] .' dans les plus brefs délais pour traiter votre demande : 
        ' . $_POST['message'] . '.');
    }
  }


  ?>
</body>

</html>