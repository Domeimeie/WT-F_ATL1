<?php $currentPage = 'Kontakt'; ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="style/form.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/navigation.css">
    <link rel="icon" type="image/x-icon" href="/media/favicon.png">
  </head>
  <body>
    <?php include ('navigation.php'); ?>
    <div class="form_container">
    <form action="https://www.google.ch">
            <p>Bitte füllen Sie das Formular aus</p>
            <p>
                <label for="company">Firma</label>
                <input type="text" id="company" name="company" placeholder="Firma" required pattern="[A-Za-z ]+" title="Darf nur Buchstaben enthalten">
            </p>
            <p>
            <label for="gender">Geschlecht</label>
            <select id="gender">
                <option value="Male">Mann</option>
                <option value="Female">Frau</option>
                <option value="Other">Andere</option>
                <option value="Gender is a lie">Gender is a lie</option>
            </select>
            </p>

            <p>
                <label for="fname">Vorname:</label>
                <input type="text" id="fname" name="fname" required pattern="[A-Za-z ]+" title="Darf nur Buchstaben enthalten">
            </p>
            
            <p>
                <label for="lname">Nachname:</label>
                <input type="text" id="lname" name="lname" required pattern="[A-Za-z ]+" title="Darf nur Buchstaben enthalten"> 
            </p>

            <p>
                <label for="adress" >Adresse:</label>
                <input type="text" id="adress" name="adress" required pattern="[A-Za-z ]+" title="Darf nur Buchstaben enthalten">
            </p>

            <p>
                <label for="plz">PLZ:</label>
                <input type="text" id="plz" name="plz" required pattern="[0-9]{4}" title="Muss 4 Zahlen enthalten">
            </p>

            <p>
                <label for="place">Ort:</label>
                <input type="text" id="place" name="place" required pattern="[A-Za-z ]+" title="Darf nur Buchstaben enthalten">
            </p>

            <p>
                <label for="mail">Email:</label>
                <input type="email" id="mail" name="mail" required>
            </p>

            <p>
                <label for="message">Mitteilung:</label>
                <textarea id="message" name="message"></textarea>
            </p>
            <div class="radiodiv">
                <p class="radiodiv_title">Wie haben Sie von uns erfahren?</p>
                <input class="radiobutton" type="radio" id="google" name="redirect">
                <label class="radiobutton" for="google">Google</label>
                <input class="radiobutton" type="radio" id="inserat" name="redirect">
                <label class="radiobutton" for="inserat">Inserat</label>
                <input class="radiobutton" type="radio" id="recommendation" name="redirect">
                <label class="radiobutton" for="recommendation">Empfehlung</label>
                <input class="radiobutton" type="radio" id="other" name="redirect">
                <label class="radiobutton" for="other">Sonstige</label>
            </div>
            <input type="submit" value="Absenden">

        </form> 
    </div>
</html>
