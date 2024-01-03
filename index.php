<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css">
    <title>ALUMNI</title>
</head>

<body class="bgbody">
    <?php include 'components/navbar.php'; ?>

    <div class="parallax"></div>

    <main>
    <?php include 'assets/data/data.php'; ?>

    <ul>
        <?php foreach ($data as $person) : ?>
            <li class="cardo">
                <strong>Name:</strong> <?php echo $person['name']; ?>,
                <strong>Phone:</strong> <?php echo $person['phone']; ?>
                <strong>Email:</strong> <?php echo $person['email']; ?>
                <strong>Région:</strong> <?php echo $person['region']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</main>
    <div class="parallax1"></div>


    <?php include './components/footer.php'; ?> 

</body>

</html>