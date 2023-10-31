<?php
include '/xampp/htdocs/AI_Tool/data/softwareSpecs.php';
include '/xampp/htdocs/AI_Tool/specsRanks.php';
// return  "r";
// var_dump(($_POST));
$render_html = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answers'])) {
    $result_specs = [];
            $recieved_answers = $_POST['answers'];
            $processedAnswers = json_decode($recieved_answers, true);
            //var_dump($recieved_answers);

           
            if(!empty($processedAnswers))
           {
            foreach ($softwareRecSpecs as $sft) {
                $softwareName = $sft->getName();
                foreach ($processedAnswers[3] as $aSoft) {
                    if ($softwareName == $aSoft) {
                        checkSpecs($sft);
                    }
                }
                if($sft === end($softwareRecSpecs))
                {
                    $render_html =  true;
                }
            }
           }
           
}
function checkSpecs($sn)
    {
        global $result_specs, $parts, $processedAnswers;
        if (empty($result_specs)) {
            $result_specs['os']= $processedAnswers[0][0];
            $result_specs['cpu'] = $sn->getCpu();
            $result_specs['ram'] = $sn->getRam();
            $result_specs['storage'] = $sn->getStorage();
            $result_specs['gpu'] = $sn->getGpu();
            $result_specs['display'] = $sn->getDisplay();
        } else {

            if (($parts['cpu'][$sn->getCpu()]['rank']) < ($parts['cpu'][$result_specs['cpu']]['rank'])) {
                $result_specs['cpu'] = $sn->getCpu();
            }
            if ($sn->getRam() > $result_specs['ram']) {
                $result_specs['ram'] = $sn->getRam();
            }
            if (($parts['Resolution'][$sn->getDisplay()['Resolution']]['rank']) < ($parts['Resolution'][$result_specs['display']['Resolution']]['rank'])) {
                $result_specs['display']['Resolution'] = $sn->getDisplay()['Resolution'];
            }
            if (($parts['Tech'][$sn->getDisplay()['Tech']]['rank']) < ($parts['Tech'][$result_specs['display']['Tech']]['rank'])) {
                $result_specs['display']['Tech'] = $sn->getDisplay()['Tech'];
            }
            if (($parts['storage'][$sn->getStorage()['Size']]['rank']) < ($parts['storage'][$result_specs['storage']["Size"]]['rank'])) {
                $result_specs['storage']['Size'] = $sn->getStorage()['Size'];
            }
            if (($parts['gpu'][$sn->getGpu()]['rank']) < ($parts['gpu'][$result_specs['gpu']]['rank'])) {
                $result_specs['gpu'] = $sn->getGpu();
            }
        }
    }


    if($render_html === true){

        echo "<div class=\"result-head\">
        The Best Options for you is:
    </div>
    <div class=\"result\">
        <ul>
            <li>CPU: {$result_specs['cpu']}</li>
            <li>RAM: {$result_specs['ram']}</li>
            <li>GPU: {$result_specs['gpu']}</li>
            <li>Storage: {$result_specs['storage']['Size']} ({$result_specs['storage']['Type']})</li>
            <li>Operating System: {$result_specs['os']} </li>
            <li>Monitor: {$result_specs['display']['Resolution']} resolution, {$result_specs['display']['Tech']} Panel </li>
        </ul>
    </div>";
    }

            ?>

            
        
    
    