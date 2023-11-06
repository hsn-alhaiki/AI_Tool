<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>


<body>
    <div class="container-sm my-sm-5 p-3 p-md-5 rounded-5">
<div class="align-items-center  p-1 p-md-5 mw-100">

        <form id="stages-form" method="post">
            <div class="col">
                <?php
                include 'stages/stage-1.html';
                
                ?>
                <div class="row-md-6 py-4 stage-two"></div>

                <input id="hidden-result-input" type="hidden" name="answers">

                <div class="col-6"><button class="submit-button p-4 ms-lg-5 ms-3 fw-bold rounded-3  " type="button" id="submit" disabled>Submit</button></div>
            </div>

        </form>
        <script>

        </script>

        <div class="result-box px-3" id="result-box"></div>
    </div></div>
    <script src="answer.js"></script>




</body>


</html>