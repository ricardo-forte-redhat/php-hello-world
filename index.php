<html>
    <head>
        <title>PHP Hello World!</title>
    </head>
    <body>
        <h3>PHP Hello World!</h3>
        <br/>
        <?php if( $_ENV[ "HOSTNAME" ] ) { ?> My hostname is <?php echo $_ENV["HOSTNAME"]; ?><?php } ?>
    </body>
</html>
