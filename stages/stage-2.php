

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

<div class="question"> 4. What's Your PC's Mission? *</div>

    <!--Designing-->
    <div class="dropdown dropdown-design">
        <button class="dropdown-button" onclick="toggleDropdown('Design')" type="button">Design<image src="icons/arrow.svg" class="arrow-icon"></button>
        <div class="dropdown-content" id="dropdownContentDesign">
            <div class="grid-container">
                <?php
                foreach ($softwareRecSpecs as $soft) {
                    $softN = $soft->getName();
                    if ($soft->getField() == 'design' && in_array($selectedOS, $soft->getOS())) {   
                            echo "<input type=\"checkbox\" value=\"{$softN}\" id=\"{$softN}\" class=\"hidden-checkbox\">";
                            echo "<label class=\"checkbox-button\"for=\"{$softN}\"><div class=\"icon\"><image src=\"icons/designSoftware/{$softN}.svg\" class=\"software-icon\"></div><div class=\"soft-name\">{$softN}</div></label>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!--Gaming-->
    <div class="dropdown dropdown-gaming">
        <button class="dropdown-button" onclick="toggleDropdown('Gaming')" type="button">Gaming<image src="icons/arrow.svg" class="arrow-icon"></button>
        <div class="dropdown-content" id="dropdownContentGaming">
            <div class="grid-container">
                <?php
                foreach ($softwareRecSpecs as $soft) {
                    $softN = $soft->getName();
                    if ($soft->getField() == 'game' && in_array($selectedOS, $soft->getOS())){
                            echo "<input type=\"checkbox\" value=\"{$softN}\" id=\"{$softN}\" class=\"hidden-checkbox\">";
                            echo "<label class=\"checkbox-button\"for=\"{$softN}\"><div class=\"icon\"><image src=\"icons/gaming/{$softN}.svg\" class=\"software-icon\"></div><div class=\"soft-name\">{$softN}</div></label>";
                        
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!--Office tasks-->

    <div class="dropdown dropdown-office">
        <button class="dropdown-button" type="button" onclick="toggleDropdown('Office')">Office Tasks<image src="icons/arrow.svg" class="arrow-icon"></button>
        <div class="dropdown-content" id="dropdownContentOffice">
            <div class="grid-container">
                <?php
                foreach ($softwareRecSpecs as $soft) {
                    $softN = $soft->getName();
                    if ($soft->getField() == 'ot' && in_array($selectedOS, $soft->getOS())){
                            echo "<input type=\"checkbox\" value=\"{$softN}\" id=\"{$softN}\" class=\"hidden-checkbox\">";
                            echo "<label class=\"checkbox-button\"for=\"{$softN}\"><div class=\"icon\"><image src=\"icons/officeSoftware/{$softN}.svg\" class=\"software-icon\"></div><div class=\"soft-name\">{$softN}</div></label>";
                        
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!--Development-->

    <div class="dropdown dropdown-dev">
        <button class="dropdown-button" onclick="toggleDropdown('Dev')" type="button">Development<image src="icons/arrow.svg" class="arrow-icon"></button>
        <div class="dropdown-content" id="dropdownContentDev">
            <div class="grid-container">
                <?php
                foreach ($softwareRecSpecs as $soft) {
                    $softN = $soft->getName();
                    if ($soft->getField() == 'dev' && in_array($selectedOS, $soft->getOS())){
                            echo "<input type=\"checkbox\" value=\"{$softN}\" id=\"{$softN}\" class=\"hidden-checkbox\">";
                            echo "<label class=\"checkbox-button\"for=\"{$softN}\"><div class=\"icon\"><image src=\"icons/devSoftware/{$softN}.svg\" class=\"software-icon\"></div><div class=\"soft-name\">{$softN}</div></label>";
                        
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!--Engineering-->
    <div class="dropdown dropdown-engineer">
        <button class="dropdown-button" type="button" onclick="toggleDropdown('Engineering')">Engineer<image src="icons/arrow.svg" class="arrow-icon"></button>
        <div class="dropdown-content" id="dropdownContentEngineering">
            <div class="grid-container">
                <?php
                foreach ($softwareRecSpecs as $soft) {
                    $softN = $soft->getName();
                    if ($soft->getField() == 'engineer' && in_array($selectedOS, $soft->getOS())){
                            echo "<input type=\"checkbox\" value=\"{$softN}\" id=\"{$softN}\" class=\"hidden-checkbox\">";
                            echo "<label class=\"checkbox-button\"for=\"{$softN}\"><div class=\"icon\"><image src=\"icons/engineerSoftware/{$softN}.svg\" class=\"software-icon\"></div><div class=\"soft-name\">{$softN}</div></label>";
                        
                    }
                }
                ?>
            </div>
        </div>
    </div>

