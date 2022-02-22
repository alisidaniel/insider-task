<?php

$teams = array("Team A", "Team B", "Team C", "Team D", "Team E", "Team F");

/** 
 * Pesudcode for round robin
 * 
 */

$input = 6;
$weeks = ($input - 1) * 2;
$matchPerWeek = $input / 2;
$totalMatches = ($weeks * $matchPerWeek);
$newArry = array();

$pairingCounter = $input - 1;   // n - 1 array sliding number

for ($i = 0; $i < $input; $i++) {
    $teamArray = $teams;
    unset($teamArray[$i]);
    for ($j = 0; $j <= $pairingCounter; $j++) {
        if (isset($teamArray[$j])) { // This line check if exist and run the block 
            $arrayMerge = array($teams[$i], $teamArray[$j]); // create 2 x 2 metrics here
            array_push($newArry, $arrayMerge);
        }
    }
}

// var_dump($newArry);
/** Take current iteration data explode and explode the search data compare if they have similar value */

$predictedWeeklyMatch = array();

function delArrValues(array $arr, array $remove)
{
    return array_filter($arr, fn ($e) => !in_array($e, $remove));
};

/** Add arrays */
$comparray = array();
$schuledWeeklyMatches = array();
$counter = 0;
$mpw = $matchPerWeek - 1;
$breakpoint = $weeks / 2;

for ($k = 0; $k < 4; $k++) {
    // array_push($comparray, $newArry[$k]);
    $selected = array();
    $comparray = array(); // reinitialise to empty records
    // $availabeArray = delArrValues($newArry, $selected);
    array_push($selected, $newArry[$k]);
    if ($k < $breakpoint) {
        array_push($comparray, $newArry[$k]);
        for ($l = 0; $l < $matchPerWeek; $l++) { // loop for matches per week starting from 1 
            for ($m = 0; $m < $totalMatches; $m++) { // loop through all match pairs
                # compare and filter unique matches
                $mergAB = array_merge(...$comparray);

                $unique = array_diff_key($mergAB, array_unique($mergAB));
                if (count($unique) === 0) {
                    // Before pushing to array check if pairs has been selected
                    $mergAC = array_merge($selected);
                    $search = array_filter($mergAC, fn ($val) => $val == $newArry[$m]);
                    if (count($search) === 0) {
                        echo "Not Found in array\n";
                        array_push($selected, $newArry[$m]);
                        array_push($comparray, $newArry[$m]);
                        break;
                    } else {

                        // var_dump("In array \n", $newArry[$m]);
                    }
                } else {
                    // always from the last item from the $compare array if not matched
                    array_pop($comparray);
                    // array_pop($selected);
                }
            }
            // break;
        }
    }
    if ($k >= $breakpoint) {
        // array_push($comparray, $newArry[$weeks]);
        echo "Greater\n";
    }
    array_push($schuledWeeklyMatches, $comparray);
    // break;
}

// var_dump($selected);
var_dump($newArry);




$array1 = array(2, 4);
$array2 = array(3, 1);
$array3 = array(7, 6);
$array4 = array(8, 0);
$ab = array($array1, $array2, $array3, $array4);
// $bc = array($array2);
// $mergAB = array_merge(...$ab);
// $unique = count(array_unique($mergAB));
// var_dump("Intersection", $unique, count($mergAB));
// var_dump($mergAB);

$inputB = array("a", "b", "c", "d", "e");
// $output = array_slice($input, 4);
// var_dump($results);
// var_dump("jdkskdsk", $newArry);

// $search = array_filter($ab, fn ($val) => $val == $array1);
// var_dump("Searching", $search);




echo "No of teams: " . $input . "\nNo of weeks: " . $weeks . "\nTotal matches: " . $totalMatches;
// echo json_encode($teams);
