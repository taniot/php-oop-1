<?php
require_once __DIR__ . '/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movies</title>
</head>

<body>
    <?php include __DIR__ . '/partials/header.php'; ?>
    <?php foreach ($result as $movie) : ?>
        <h2><?php echo $movie->get_name(); ?></h2>
        <p>Genre</p>
        <?php echo "Generi: {$movie->get_genre_name_as_string()}"; ?>
    <?php endforeach; ?>
    <?php include __DIR__ . '/partials/footer.php'; ?>
</body>

</html>