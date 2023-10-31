<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>


<body>
    <div class="box">
        <form id="stages-form" method="post">

            <?php
            include 'stages/stage-1.html';
           // include 'stages/stage-2.php';
            ?>
            <div class="stage-two"></div>
            
            <input id="hidden-result-input" type="hidden" name="answers">

            <button class="submit-button" type="button" id="submit" disabled >Submit</button>
        </form>
<script>
   
</script>

        <div class="result-box" id="result-box"></div>
        </div>
    <script src="answer.js"></script>



</body>


</html>