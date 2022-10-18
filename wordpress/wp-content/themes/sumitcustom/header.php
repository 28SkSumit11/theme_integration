<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumit Custom</title>
</head>
<body>
    <?php
        wp_nav_menu(
            [
                'theme_location' => 'primary-2',
                'container_id' => 'header-menu',
                'container_class' => 'header-menu-class'
            ]
        )
    ?>
</body>
</html>