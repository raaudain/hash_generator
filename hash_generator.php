<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Generator</title>
</head>
<body>
    <h1>Hash Generator</h1>
    <form name="form_cms" method="post" action="hash_generator.php">
        <div>
            <label for="password">Enter password: </label>
            <input type="password" name="password" />
            <button class="button" type="submit" value="Submit">Submit</button>
        </div>
    </form>
    <br>
    <br>
    <?php 
        if (isset($_POST['password']) && strlen($_POST['password']) > 5) {
            echo "<div style='font-size: 18px;'>".password_hash($_POST['password'], PASSWORD_DEFAULT)."</div>";
        }
    ?>
</body>
</html>