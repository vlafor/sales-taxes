<html>
    <head>
        <title>Shopping basket output</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Boootstrap css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        
    </head>
    <body>
        
        <div class="container col-md-4">
       
            <h3>Basket 1</h3>
            
            <?php basketToHtml($basket1) ?>
            
            <h3>Basket 2</h3>
            
            <?php basketToHtml($basket2) ?>
            
            <h3>Basket 3</h3>
            
            <?php basketToHtml($basket3) ?>
        </div>
        
    </body>
</html>