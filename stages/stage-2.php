<?php
include '/xampp/htdocs/AI_Tool/data/softwareSpecs.php';
?>

<?php
// session_start();

$selectedOS = $_POST['OS'];
?>
<script>
//   function updateOS(){
//     var selectedOS = document.querySelector('input[name="OS"]:checked').value;
//     console.log(selectedOS);
//     window.selectedOS = selectedOS;
//   }
</script>
<div class="row-md-6 py-4">
    <div class="question fs-4 my-4 fw-semibold"> 4. What's Your PC's Mission? *</div>
</div>
<!-- Design -->
<div class="row-md-6 px-lg-4 mb-2">
    <div class="dropdown dropdown-design">

        <button
            class="dropdown-button btn btn-primary roanded-4 w-100 d-flex justify-content-between align-items-center fw-bold text-start p-1 py-2 p-sm-2 p-xl-3 px-3"
            type="button" data-bs-toggle="collapse" data-bs-target="#design" aria-expanded="false"
            aria-controls="design">
            design
            <img src="icons/arrow.svg" alt="" class="arrow-icon">
        </button>

        <div class="collapse dropdown-content" id="design">
            <div
                class="grid-container d-flex flex-row justify-content-around align-items-baseline flex-wrap rounded-3 p-3">
                <!-- 1 -->
                <?php
   foreach ($softwareRecSpecs as $soft) {
       $softN = $soft->getName();
       if ($soft->getField() == 'design' && in_array($selectedOS, $soft->getOS())) {
         echo '<div><input type="checkbox" class="hidden-checkbox soft btn-check" value="'.$softN.'" id="'.$softN.'"autocomplete="off"/>';
         echo '<label class="btn btn-outline-secondary p-1 pt-1 my-2 border border-3 rounded-3" for="'.$softN.'"> <div class="card border border-0" style="width:100%; height:auto;"> <img src="icons/designSoftware/'.$softN.'.svg"class="card-img-top software-icon p-0 p-lg-1"/> <div class="card-body text-center p-2 text-wrap"><div class="card-text fw-bolder">'.$softN.'</div></div></div></label></div>';}
        }
       ?>

            </div>

        </div>
    </div>

</div>
<!-- Gaming -->
<div class="row-md-6 px-lg-4 mb-2">
    <div class="dropdown dropdown-design">

        <button
            class="dropdown-button btn btn-primary roanded-4 w-100 d-flex justify-content-between align-items-center fw-bold text-start p-1 py-2 p-sm-2 p-xl-3 px-3"
            type="button" data-bs-toggle="collapse" data-bs-target="#game" aria-expanded="false"
            aria-controls="game">
            gaming
            <img src="icons/arrow.svg" alt="" class="arrow-icon">
        </button>

        <div class="collapse dropdown-content" id="game">
            <div
                class="grid-container d-flex flex-row justify-content-around align-items-baseline flex-wrap rounded-3 p-3">
                <!-- 1 -->
                <?php
   foreach ($softwareRecSpecs as $soft) {
       $softN = $soft->getName();
       if ($soft->getField() == 'game' && in_array($selectedOS, $soft->getOS())) {
         echo '<div><input type="checkbox" class="hidden-checkbox soft btn-check" value="'.$softN.'" id="'.$softN.'"autocomplete="off"/>';
         echo '<label class="btn btn-outline-secondary p-1 pt-1 my-2 border border-3 rounded-3" for="'.$softN.'"> <div class="card border border-0" style="width:100%; height:auto;"> <img src="icons/gaming/'.$softN.'.svg"class="card-img-top software-icon p-0 p-lg-1"/> <div class="card-body text-center p-2 text-wrap"><div class="card-text fw-bolder">'.$softN.'</div></div></div></label></div>';}
        }
       ?>

            </div>

        </div>
    </div>

</div>
<!-- Office Tasks -->
<div class="row-md-6 px-lg-4 mb-2">
    <div class="dropdown dropdown-design">

        <button
            class="dropdown-button btn btn-primary roanded-4 w-100 d-flex justify-content-between align-items-center fw-bold text-start p-1 py-2 p-sm-2 p-xl-3 px-3"
            type="button" data-bs-toggle="collapse" data-bs-target="#ot" aria-expanded="false"
            aria-controls="ot">
            Office Tasks
            <img src="icons/arrow.svg" alt="" class="arrow-icon">
        </button>

        <div class="collapse dropdown-content" id="ot">
            <div
                class="grid-container d-flex flex-row justify-content-around align-items-baseline flex-wrap rounded-3 p-3">
                <!-- 1 -->
                <?php
   foreach ($softwareRecSpecs as $soft) {
       $softN = $soft->getName();
       if ($soft->getField() == 'ot' && in_array($selectedOS, $soft->getOS())) {
         echo '<div><input type="checkbox" class="hidden-checkbox soft btn-check" value="'.$softN.'" id="'.$softN.'"autocomplete="off"/>';
         echo '<label class="btn btn-outline-secondary p-1 pt-1 my-2 border border-3 rounded-3" for="'.$softN.'"> <div class="card border border-0" style="width:100%; height:auto;"> <img src="icons/officeSoftware/'.$softN.'.svg"class="card-img-top software-icon p-0 p-lg-1"/> <div class="card-body text-center p-2 text-wrap"><div class="card-text fw-bolder">'.$softN.'</div></div></div></label></div>';}
        }
       ?>

            </div>

        </div>
    </div>

</div>

<!-- Development -->
<div class="row-md-6 px-lg-4 mb-2">
    <div class="dropdown dropdown-design">

        <button
            class="dropdown-button btn btn-primary roanded-4 w-100 d-flex justify-content-between align-items-center fw-bold text-start p-1 py-2 p-sm-2 p-xl-3 px-3"
            type="button" data-bs-toggle="collapse" data-bs-target="#dev" aria-expanded="false"
            aria-controls="dev">
            Development
            <img src="icons/arrow.svg" alt="" class="arrow-icon">
        </button>

        <div class="collapse dropdown-content" id="dev">
            <div
                class="grid-container d-flex flex-row justify-content-around align-items-baseline flex-wrap rounded-3 p-3">
                <!-- 1 -->
                <?php
   foreach ($softwareRecSpecs as $soft) {
       $softN = $soft->getName();
       if ($soft->getField() == 'dev' && in_array($selectedOS, $soft->getOS())) {
         echo '<div><input type="checkbox" class="hidden-checkbox soft btn-check" value="'.$softN.'" id="'.$softN.'"autocomplete="off"/>';
         echo '<label class="btn btn-outline-secondary p-1 pt-1 my-2 border border-3 rounded-3" for="'.$softN.'"> <div class="card border border-0" style="width:100%; height:auto;"> <img src="icons/devSoftware/'.$softN.'.svg"class="card-img-top software-icon p-0 p-lg-1"/> <div class="card-body text-center p-2 text-wrap"><div class="card-text text-break fw-bolder" style="hyphens: auto;">'.$softN.'</div></div></div></label></div>';
        }
        }
       ?>

            </div>

        </div>
    </div>

</div>
<!-- Engineer -->

<div class="row-md-6 px-lg-4 mb-2">
    <div class="dropdown dropdown-design">

        <button
            class="dropdown-button btn btn-primary roanded-4 w-100 d-flex justify-content-between align-items-center fw-bold text-start p-1 py-2 p-sm-2 p-xl-3 px-3"
            type="button" data-bs-toggle="collapse" data-bs-target="#engineer" aria-expanded="false"
            aria-controls="engineer">
            Engineer
            <img src="icons/arrow.svg" alt="" class="arrow-icon">
        </button>

        <div class="collapse dropdown-content" id="engineer">
            <div
                class="grid-container d-flex flex-row justify-content-around align-items-baseline flex-wrap rounded-3 p-3">
                <!-- 1 -->
                <?php
   foreach ($softwareRecSpecs as $soft) {
       $softN = $soft->getName();
       if ($soft->getField() == 'engineer' && in_array($selectedOS, $soft->getOS())) {
         echo '<div><input type="checkbox" class="hidden-checkbox soft btn-check" value="'.$softN.'" id="'.$softN.'"autocomplete="off"/>';
         echo '<label class="btn btn-outline-secondary p-1 pt-1 my-2 border border-3 rounded-3" for="'.$softN.'"> <div class="card border border-0" style="width:100%; height:auto;"> <img src="icons/engineerSoftware/'.$softN.'.svg"class="card-img-top software-icon p-0 p-lg-1"/> <div class="card-body text-center p-2 text-wrap"><div class="card-text text-break fw-bolder" style="hyphens: auto;">'.$softN.'</div></div></div></label></div>';}
        }
       ?>

            </div>

        </div>
    </div>

</div>