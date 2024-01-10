<?php
$success = null;
if (!empty($_GET['email'])) {
    $email = $_GET['email'];
    if (stripos($email, '.') !== false && stripos($email, '@') !== false) {
        $success = true;
    }else {
        $success= false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="index.php" method="GET" class="py-5">
            <label for="email" class="form-label">Inserisci la tua email</label>
            <input class="form-control mt-2 mb-3" type="email" id="email" name="email">

            <?php if ($success) : ?>
                <div class="alert alert-success" role="alert">
                    La mail contiene un punto e una chiocciola &#128513;!
                </div>
            <?php elseif ($success === false) : ?>
                <div class="alert alert-danger" role="alert">
                    Email non valida! &#128533; La mail non contiene un punto e una chiocciola!
                </div>
            <?php endif; ?>

            <button class="btn btn-primary btn-sm" type="submit">Invia</button>
        </form>
    </div>

</body>

</html>