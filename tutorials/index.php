 <?php
    // We can override this variable so its not constant. To difine a vairable and make it remain as that value indefinately we use a constanint - We use a function called define. Commone practice to write vairiable in capital  letters so we know its constant when we use it in code. Then we set the value of that constant. 
    define('NAME', 'Yoshi');

    // $name = 'Yoshi'; 
    $age = 30;

    //$name = 'Mario'

    ?>

 <!DOCTYPE html>
 <html>

 <head>

     <title>PHP Tutorials</title>
 </head>

 <body>

     <h1>User Profile Page</h1>

     <div><?php echo NAME; ?></div>
     <div><?php echo $age; ?></div>
 </body>

 </html>