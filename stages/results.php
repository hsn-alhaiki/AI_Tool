<?php
include '/xampp/htdocs/AI_Tool/data/softwareSpecs.php';
include '/xampp/htdocs/AI_Tool/specsRanks.php';


// render_html set to false until checking all selected software in answers array
$render_html = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answers'])) {

            $result_specs = [];
            $recieved_answers = $_POST['answers'];
            $decodedAnswers = json_decode($recieved_answers, true);
        // check if poted answers aren't empty then start the loop 
        // first loop will go through all stored software inside our data file
        // second loop will go through all stored software inside the posted answers
        // then check the software name is matching the one in out software data file
        // if its matching then call checkSpecs with passing software object 
        // second condition is to check if the loop reached its end, if true then set render_html to true, and call checkWorkload
            if(!empty($decodedAnswers))
           {
            foreach ($softwareRecSpecs as $sft) {
                $softwareName = $sft->getName();
                foreach ($decodedAnswers[3] as $aSoft) {
                    if ($softwareName == $aSoft) {
                        checkSpecs($sft);
                    }
                }
                if($sft === end($softwareRecSpecs))
                {
                    $render_html =  true;
                    checkWorkload($decodedAnswers);
                }
            }
           }
           
}


/* 
    checkSpecs function will store the first software specs to be as recommended specs to check later with the next software,
    then check each passed software object if it has a better specs than the previous stored specs then store into $result_specs
*/
function checkSpecs($sn)
    {
        global $result_specs, $parts, $decodedAnswers;
        if (empty($result_specs)) {
            $result_specs['os']= $decodedAnswers[0][0];
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

    // checkWorkload will check if the user has selected a heavy worload then check the $result_specs,
    // and provide better specs that are above one level of the previous specs.
    function checkWorkload($answers){
        
        global $parts, $result_specs;
        if($answers[2][0] === 'heavy'){
        //foreach($parts as $key => $part){
            foreach($parts['cpu'] as $key => $cpu){
           if($cpu['rank'] === $parts['cpu'][$result_specs['cpu']]['rank']-1){
               $result_specs['cpu'] = $key;
            }
        }
        foreach($parts['storage'] as $key => $storage){
            if($storage['rank'] === $parts['storage'][$result_specs['storage']['Size']]['rank']-1){
                $result_specs['storage']['Size'] = $key;
            }    
        }
        foreach($parts['gpu'] as $key => $gpu){
            if($gpu['rank'] === $parts['gpu'][$result_specs['gpu']]['rank']-1){
                $result_specs['gpu'] = $key;
            }
     }


       
       if($result_specs['ram'] < 64)
       {
            $result_specs['ram'] *= 2;
       }
    }
}
    //}

// when render_html is is true then print the final results
    if($render_html){

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
