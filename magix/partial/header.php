<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>projet</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pixelify Sans">
		<link href="css/global.css" rel="stylesheet"/>
        <?php 
            if(isset($resourcesCss)){       
                foreach ($resourcesCss as $resourceCss) {
                    ?>
                        <link href="<?= $resourceCss?>" rel="stylesheet" />
                    <?php
                }
            }
            if(isset($resourcesJs)){       
                foreach ($resourcesJs as $resourceJs) {
                    ?>
                        <script src="<?= $resourceJs ?>"></script>
                    <?php
                }
            }
        ?>
    </head>
    <body>