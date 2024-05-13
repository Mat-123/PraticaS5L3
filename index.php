<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include __DIR__ . '/form.php';

    $myForm = new Form('POST', 'action');

    $myForm->addLabel('Username:', 'username');
    $myForm->addInput('text', 'username', '', 'username', 'form-control');

    $myForm->addLabel('Password:', 'password');
    $myForm->addInput('password', 'password', '', 'password', 'form-control');

    echo "<div class='container mt-5'>";
    echo $myForm->render();
    echo "</div>";
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>