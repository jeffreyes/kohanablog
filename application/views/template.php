<html>
    <head>
        <title>Jeff's Blog</title>
        <link rel="stylesheet" href="<?php echo URL::site( 'css/bootstrap.css' ); ?>" />
        <link rel="stylesheet" href="<?php echo URL::site( 'css/sticky-footer.css' ); ?>" />
    </head>
    <body>
        <?php echo View::factory( 'partials/header' ); ?>

        <div class="container" style="margin-top: 80px;">
            <?php echo $content; ?>
        </div>

        <?php echo View::factory( 'partials/footer' ); ?>
    </body>
</html>