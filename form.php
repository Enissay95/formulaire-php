<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="thanks.php" method="POST">
        <label for="name">name</label></br>
        <input type="text" name="name"></br>

        <label for="prenom">prenom</label></br>
        <input type="text" name="prenom"></br>

        <label for="phone">telephone</label></br>
        <input type="text" name="phone"></br>

        <label for="mail">e-mail</label></br>
        <input type="text" name="mail"></br>

        <label for="sujets">sujets</label></br>
        <select name="sujets">
            <option value="">--Please choose an option--</option>
            <option value="choice1">choice1</option>
            <option value="choice2">choice2</option>
        </select></br></br>

        <div>
            <label for="message">Message :</label></br>
            <textarea id="message" name="message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>


</body>

</html>