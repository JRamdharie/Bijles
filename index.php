<?php
 if (isset($_POST['versturen'])) {
     if(!empty($_POST['naam']) && !empty($_POST['email']) && !empty($_POST['email'])) {
         

     }
 }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
<h1>Test</h1>
 <form method="post">
     <label>Naam</label>
     <input type="text" name="naam"> <br>
     <label>Email</label>
     <input type="email" name="email"> <br>
     <label>Leeftijd</label>
     <input type="number" name="leeftijd"> <br>

     <input type="submit" name="versturen" value="versturen">
 </form>
</body>
</html>
