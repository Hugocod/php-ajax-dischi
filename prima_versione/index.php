<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- importo i dati dei dischi -->
<?php
    include '../data/data.php';
?>;

<?php

    foreach($dischi as $disco){      
?>
<!-- ///////////////////////////////////////////////////////////////////// HTML CODE -->
       <div class="card">
           
            <img src=" <?= $disco['poster'] ?> " alt=" <?= $disco['title'] . 'poster' ?> ">

            <h1> <?= $disco['title'] ?> </h1>

            <h3> <?= $disco['author'] ?> </h3>

            <h3> <?= $disco['year'] ?> </h3>
            
       </div>
<!-- ///////////////////////////////////////////////////////////////////// HTML CODE END -->
<?php
    }; 
?>

</body>
</html>


