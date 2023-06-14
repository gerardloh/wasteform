<?php
require "vendor/autoload.php";
// Global variables
// Container weight
$container = 0.52;
// 660l weight
$bb = 36.50;
// Metal pallet weight
$pallet_weight = 86.50;
//Component total weights: 
$mixed_paper_total = 0.0;
$computer_printout_total = 0.0;
$other_office_paper_total = 0.0;
$newspaper_total = 0.0;
$corrugated_total = 0.0;
$p1_total = 0.0;
$p2_total = 0.0;
$p4_total = 0.0;
$p5_total = 0.0;
$other_plastics_total = 0.0;
$food_waste_total = 0.0;
$wood_total = 0.0;
$other_organics_total = 0.0;
$ferrous_cans_total = 0.0;
$other_ferrous_total = 0.0;
$aluminum_cans_total = 0.0;
$aluminmum_foil_total = 0.0;
$other_aluminum_total = 0.0;
$clear_glass_total = 0.0;
$brown_glass_total = 0.0;
$green_glass_total = 0.0;
$yard_waste_total = 0.0;
$other_inorganics_total = 0.0;

// Total weight of boxes
$box1total = 0.0;
$box2total = 0.0;
$box3total = 0.0;
$box4total = 0.0;
$box5total = 0.0;
$box6total = 0.0;
$box7total = 0.0;
$box8total = 0.0;
$box9total = 0.0;
$box10total = 0.0;
$box11total = 0.0;
$box12total = 0.0;
$box13total = 0.0;
$box14total = 0.0;
$box15total = 0.0;
$box16total = 0.0;
$box17total = 0.0;
$box18total = 0.0;
$box19total = 0.0;
$box20total = 0.0;
$box21total = 0.0;
$box22total = 0.0;
$box23total = 0.0;

$date = $_POST['date'];
$weather = $_POST['weather'];
$site = $_POST['site'];
$remarks = "";
$recorder = $_POST['recorder'];
$company = "";
$vehicle = "";
$route = "";
$bin = $_POST['bin'];
$binweight = $_POST['binweight'];
 

if (isset($_POST['submit'])) {
    // Calculating the weight of each individual component
    if(!empty($_POST['mixedpaper'])) {
        $mixedpaper = $_POST['mixedpaper'];
        $num = preg_replace('/\s+/', '', $mixedpaper);
        if (!strpos($num, "+")) {
            $mixed_paper_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $mixed_paper_total += $weight;
            }
        }
    }

    if(!empty($_POST['computerprintout'])) {
        $computerprintout = $_POST['computerprintout'];
        $num = preg_replace('/\s+/', '', $computerprintout);
        if (!strpos($num, "+")) {
            $computer_printout_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $computer_printout_total += $weight;
            }
        }
    }

    if(!empty($_POST['otherofficepaper'])) {
        $otherofficepaper = $_POST['otherofficepaper'];
        $num = preg_replace('/\s+/', '', $otherofficepaper);
        if (!strpos($num, "+")) {
            $other_office_paper_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $other_office_paper_total += $weight;
            }
        }
    }

    if(!empty($_POST['newspaper'])) {
        $newspaper = $_POST['newspaper'];
        $num = preg_replace('/\s+/', '', $newspaper);
        if (!strpos($num, "+")) {
            $newspaper_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $newspaper_total += $weight;
            }
        }
    }

    if(!empty($_POST['corrugated'])) {
        $corrugated = $_POST['corrugated'];
        $num = preg_replace('/\s+/', '', $corrugated);
        if (!strpos($num, "+")) {
            $corrugated_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $corrugated_total += $weight;
            }
        }
    }

    if(!empty($_POST['p1'])) {
        $p1 = $_POST['p1'];
        $num = preg_replace('/\s+/', '', $p1);
        if (!strpos($num, "+")) {
            $p1_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $p1_total += $weight;
            }
        }
    }

    if(!empty($_POST['p2'])) {
        $p2 = $_POST['p2'];
        $num = preg_replace('/\s+/', '', $p2);
        if (!strpos($num, "+")) {
            $p2_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $p2_total += $weight;
            }
        }
    }

    if(!empty($_POST['p4'])) {
        $p4 = $_POST['p4'];
        $num = preg_replace('/\s+/', '', $p4);
        if (!strpos($num, "+")) {
            $p4_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $p4_total += $weight;
            }
        }
    }

    if(!empty($_POST['p5'])) {
        $p5 = $_POST['p5'];
        $num = preg_replace('/\s+/', '', $p5);
        if (!strpos($num, "+")) {
            $p5_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $p5_total += $weight;
            }
        }
    }

    if(!empty($_POST['otherplastics'])) {
        $otherplastics = $_POST['otherplastics'];
        $num = preg_replace('/\s+/', '', $otherplastics);
        if (!strpos($num, "+")) {
            $other_plastics_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $other_plastics_total += $weight;
            }
        }
    }

    if(!empty($_POST['foodwaste'])) {
        $foodwaste = $_POST['foodwaste'];
        $num = preg_replace('/\s+/', '', $foodwaste);
        if (!strpos($num, "+")) {
            $food_waste_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $food_waste_total += $weight;
            }
        }
    }

    if(!empty($_POST['wood'])) {
        $wood = $_POST['wood'];
        $num = preg_replace('/\s+/', '', $wood);
        if (!strpos($num, "+")) {
            $wood_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $wood_total += $weight;
            }
        }
    }

    if(!empty($_POST['otherorganics'])) {
        $otherorganics = $_POST['otherorganics'];
        $num = preg_replace('/\s+/', '', $otherorganics);
        if (!strpos($num, "+")) {
            $other_organics_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $other_organics_total += $weight;
            }
        }
    }

    if(!empty($_POST['cansferrous'])) {
        $cansferrous = $_POST['cansferrous'];
        $num = preg_replace('/\s+/', '', $cansferrous);
        if (!strpos($num, "+")) {
            $ferrous_cans_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $ferrous_cans_total += $weight;
            }
        }
    }

    if(!empty($_POST['otherferrous'])) {
        $otherferrous = $_POST['otherferrous'];
        $num = preg_replace('/\s+/', '', $otherferrous);
        if (!strpos($num, "+")) {
            $other_ferrous_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $other_ferrous_total += $weight;
            }
        }
    }

    if(!empty($_POST['cansaluminum'])) {
        $cansaluminum = $_POST['cansaluminum'];
        $num = preg_replace('/\s+/', '', $cansaluminum);
        if (!strpos($num, "+")) {
            $aluminum_cans_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $aluminum_cans_total += $weight;
            }
        }
    }

    if(!empty($_POST['aluminumfoil'])) {
        $aluminumfoil = $_POST['aluminumfoil'];
        $num = preg_replace('/\s+/', '', $aluminumfoil);
        if (!strpos($num, "+")) {
            $aluminmum_foil_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $aluminmum_foil_total += $weight;
            }
        }
    }

    if(!empty($_POST['otheraluminum'])) {
        $otheraluminum = $_POST['otheraluminum'];
        $num = preg_replace('/\s+/', '', $otheraluminum);
        if (!strpos($num, "+")) {
            $other_aluminum_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $other_aluminum_total += $weight;
            }
        }
    }

    if(!empty($_POST['clearglass'])) {
        $clearglass = $_POST['clearglass'];
        $num = preg_replace('/\s+/', '', $clearglass);
        if (!strpos($num, "+")) {
            $clear_glass_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $clear_glass_total += $weight;
            }
        }
    }

    if(!empty($_POST['brownglass'])) {
        $brownglass = $_POST['brownglass'];
        $num = preg_replace('/\s+/', '', $brownglass);
        if (!strpos($num, "+")) {
            $brown_glass_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $brown_glass_total += $weight;
            }
        }
    }

    if(!empty($_POST['greenglass'])) {
        $greenglass = $_POST['greenglass'];
        $num = preg_replace('/\s+/', '', $greenglass);
        if (!strpos($num, "+")) {
            $green_glass_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $green_glass_total += $weight;
            }
        }
    }

    if(!empty($_POST['yardwaste'])) {
        $yardwaste = $_POST['yardwaste'];
        $num = preg_replace('/\s+/', '', $yardwaste);
        if (!strpos($num, "+")) {
            $yard_waste_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $yard_waste_total += $weight;
            }
        }
    }

    if(!empty($_POST['otherinorganics'])) {
        $otherinorganics = $_POST['otherinorganics'];
        $num = preg_replace('/\s+/', '', $otherinorganics);
        if (!strpos($num, "+")) {
            $other_inorganics_total += $num;
        } else {
            $weights = explode("+", $num);
            foreach ($weights as $weight) {
                $other_inorganics_total += $weight;
            }
        }
    }
    // Calculating total weight of each box
    // Mixed Paper
    if (!empty($_POST['box1'])) {
        $box = $_POST['box1'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box1total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l1'])) {
        $blue_bin = $_POST['660l1'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box1total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp1'])) {
        $pallet = $_POST['mp1'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box1total += $number_of_pallets * $pallet_weight;
    }
    // Computer Printouts
    if (!empty($_POST['box2'])) {
        $box = $_POST['box2'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box2total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l2'])) {
        $blue_bin = $_POST['660l2'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box2total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp2'])) {
        $pallet = $_POST['mp2'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box2total += $number_of_pallets * $pallet_weight;
    }
    // Other Office Paper
    if (!empty($_POST['box3'])) {
        $box = $_POST['box3'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box3total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l3'])) {
        $blue_bin = $_POST['660l3'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box3total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp3'])) {
        $pallet = $_POST['mp3'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box3total += $number_of_pallets * $pallet_weight;
    }
    // Newspaper
    if (!empty($_POST['box4'])) {
        $box = $_POST['box4'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box4total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l4'])) {
        $blue_bin = $_POST['660l4'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box4total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp4'])) {
        $pallet = $_POST['mp4'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box4total += $number_of_pallets * $pallet_weight;
    }
    // Corrugated
    if (!empty($_POST['box5'])) {
        $box = $_POST['box5'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box5total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l5'])) {
        $blue_bin = $_POST['660l5'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box5total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp5'])) {
        $pallet = $_POST['mp5'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box5total += $number_of_pallets * $pallet_weight;
    }
    // P1
    if (!empty($_POST['box6'])) {
        $box = $_POST['box6'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box6total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l6'])) {
        $blue_bin = $_POST['660l6'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box6total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp6'])) {
        $pallet = $_POST['mp6'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box6total += $number_of_pallets * $pallet_weight;
    }
    // P2
    if (!empty($_POST['box7'])) {
        $box = $_POST['box7'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box7total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l7'])) {
        $blue_bin = $_POST['660l7'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box7total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp7'])) {
        $pallet = $_POST['mp7'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box7total += $number_of_pallets * $pallet_weight;
    }
    // P4
    if (!empty($_POST['box8'])) {
        $box = $_POST['box8'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box8total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l8'])) {
        $blue_bin = $_POST['660l8'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box8total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp8'])) {
        $pallet = $_POST['mp8'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box8total += $number_of_pallets * $pallet_weight;
    }
    // P5
    if (!empty($_POST['box9'])) {
        $box = $_POST['box9'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box9total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l9'])) {
        $blue_bin = $_POST['660l9'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box9total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp9'])) {
        $pallet = $_POST['mp9'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box9total += $number_of_pallets * $pallet_weight;
    }
    // Other Plastics
    if (!empty($_POST['box10'])) {
        $box = $_POST['box10'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box10total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l10'])) {
        $blue_bin = $_POST['660l10'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box10total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp10'])) {
        $pallet = $_POST['mp10'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box10total += $number_of_pallets * $pallet_weight;
    }
    // Food Waste
    if (!empty($_POST['box11'])) {
        $box = $_POST['box11'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box11total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l11'])) {
        $blue_bin = $_POST['660l11'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box11total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp11'])) {
        $pallet = $_POST['mp11'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box11total += $number_of_pallets * $pallet_weight;
    }
    // Wood
    if (!empty($_POST['box12'])) {
        $box = $_POST['box12'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box12total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l12'])) {
        $blue_bin = $_POST['660l12'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box12total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp12'])) {
        $pallet = $_POST['mp12'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box12total += $number_of_pallets * $pallet_weight;
    }
    // Other Organics
    if (!empty($_POST['box13'])) {
        $box = $_POST['box13'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box13total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l13'])) {
        $blue_bin = $_POST['660l13'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box13total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp13'])) {
        $pallet = $_POST['mp13'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box13total += $number_of_pallets * $pallet_weight;
    }
    // Ferrous Cans
    if (!empty($_POST['box14'])) {
        $box = $_POST['box14'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box14total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l14'])) {
        $blue_bin = $_POST['660l14'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box14total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp14'])) {
        $pallet = $_POST['mp14'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box14total += $number_of_pallets * $pallet_weight;
    }
    // Other Ferrous
    if (!empty($_POST['box15'])) {
        $box = $_POST['box15'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box15total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l15'])) {
        $blue_bin = $_POST['660l15'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box15total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp15'])) {
        $pallet = $_POST['mp15'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box15total += $number_of_pallets * $pallet_weight;
    }
    // Aluminum Cans
    if (!empty($_POST['box16'])) {
        $box = $_POST['box16'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box16total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l16'])) {
        $blue_bin = $_POST['660l16'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box16total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp16'])) {
        $pallet = $_POST['mp16'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box16total += $number_of_pallets * $pallet_weight;
    }
    // Aluminum Foil
    if (!empty($_POST['box17'])) {
        $box = $_POST['box17'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box17total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l17'])) {
        $blue_bin = $_POST['660l17'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box17total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp17'])) {
        $pallet = $_POST['mp17'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box17total += $number_of_pallets * $pallet_weight;
    }
    // Other Aluminum
    if (!empty($_POST['box18'])) {
        $box = $_POST['box18'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box18total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l18'])) {
        $blue_bin = $_POST['660l18'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box18total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp18'])) {
        $pallet = $_POST['mp18'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box18total += $number_of_pallets * $pallet_weight;
    }
    // Clear Glass
    if (!empty($_POST['box19'])) {
        $box = $_POST['box19'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box19total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l19'])) {
        $blue_bin = $_POST['660l19'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box19total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp19'])) {
        $pallet = $_POST['mp19'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box19total += $number_of_pallets * $pallet_weight;
    }
    // Brown Glass
    if (!empty($_POST['box20'])) {
        $box = $_POST['box20'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box20total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l20'])) {
        $blue_bin = $_POST['660l20'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box20total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp20'])) {
        $pallet = $_POST['mp20'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box20total += $number_of_pallets * $pallet_weight;
    }
    // Green Glass
    if (!empty($_POST['box21'])) {
        $box = $_POST['box21'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box21total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l21'])) {
        $blue_bin = $_POST['660l21'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box21total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp21'])) {
        $pallet = $_POST['mp21'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box21total += $number_of_pallets * $pallet_weight;
    }
    // Yard Waste
    if (!empty($_POST['box22'])) {
        $box = $_POST['box22'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box22total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l22'])) {
        $blue_bin = $_POST['660l22'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box22total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp22'])) {
        $pallet = $_POST['mp22'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box22total += $number_of_pallets * $pallet_weight;
    }
    // Other Inorganics
    if (!empty($_POST['box23'])) {
        $box = $_POST['box23'];
        $number_of_boxes = preg_replace('/\s+/', '', $box);
        $box23total += $number_of_boxes * $container;
    }
    if (!empty($_POST['660l23'])) {
        $blue_bin = $_POST['660l23'];
        $number_of_bins = preg_replace('/\s+/', '', $blue_bin);
        $box23total += $number_of_bins * $bb;
    }
    if (!empty($_POST['mp23'])) {
        $pallet = $_POST['mp23'];
        $number_of_pallets = preg_replace('/\s+/', '', $pallet);
        $box23total += $number_of_pallets * $pallet_weight;
    }
    
    // Get form details
    if (!empty($_POST['remarks'])) {
        $remarks = $_POST['remarks'];
    }
    if (!empty($_POST['company'])) {
        $company = $_POST['company'];
    }
    if (!empty($_POST['vehicle'])) {
        $vehicle = $_POST['vehicle'];
    }
    if (!empty($_POST['route'])) {
        $route = $_POST['route'];
    }

} else {
    echo "Invaild Operation. Please access form through main index.";
}

// load excel comments
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// Load the existing spreadsheet file
$excelfile = "excel.xlsx";
$spreadsheet = IOFactory::load($excelfile);

// Get the desired worksheet (e.g., the first worksheet)
$worksheet = $spreadsheet->getActiveSheet();

// Determine the starting row index for adding the data
$startColumnIndex = $worksheet->getHighestColumn();
$startColumnIndex ++ ;
$startColumnIndex ++;
$columnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($startColumnIndex);
// Populate the columns with the form data
$worksheet->setCellValueByColumnAndRow(3, 10, $mixed_paper_total);
$worksheet->setCellValueByColumnAndRow(3, 11, $computer_printout_total);
$worksheet->setCellValueByColumnAndRow(3, 12, $other_office_paper_total);
$worksheet->setCellValueByColumnAndRow(3, 13, $newspaper_total);
$worksheet->setCellValueByColumnAndRow(3, 14, $corrugated_total);
$worksheet->setCellValueByColumnAndRow(3, 15, $p1_total);
$worksheet->setCellValueByColumnAndRow(3, 16, $p2_total);
$worksheet->setCellValueByColumnAndRow(3, 17, $p4_total);
$worksheet->setCellValueByColumnAndRow(3, 18, $p5_total);
$worksheet->setCellValueByColumnAndRow(3, 19, $other_plastics_total);
$worksheet->setCellValueByColumnAndRow(3, 20, $food_waste_total);
$worksheet->setCellValueByColumnAndRow(3, 21, $wood_total);
$worksheet->setCellValueByColumnAndRow(3, 22, $other_organics_total);
$worksheet->setCellValueByColumnAndRow(3, 23, $ferrous_cans_total);
$worksheet->setCellValueByColumnAndRow(3, 24, $other_ferrous_total);
$worksheet->setCellValueByColumnAndRow(3, 25, $aluminum_cans_total);
$worksheet->setCellValueByColumnAndRow(3, 26, $aluminmum_foil_total);
$worksheet->setCellValueByColumnAndRow(3, 27, $other_aluminum_total);
$worksheet->setCellValueByColumnAndRow(3, 28, $clear_glass_total);
$worksheet->setCellValueByColumnAndRow(3, 29, $brown_glass_total);
$worksheet->setCellValueByColumnAndRow(3, 30, $green_glass_total);
$worksheet->setCellValueByColumnAndRow(3, 31, $yard_waste_total);
$worksheet->setCellValueByColumnAndRow(3, 32, $other_inorganics_total);

$worksheet->setCellValueByColumnAndRow(4, 10, $box1total);
$worksheet->setCellValueByColumnAndRow(4, 11, $box2total);
$worksheet->setCellValueByColumnAndRow(4, 12, $box3total);
$worksheet->setCellValueByColumnAndRow(4, 13, $box4total);
$worksheet->setCellValueByColumnAndRow(4, 14, $box5total);
$worksheet->setCellValueByColumnAndRow(4, 15, $box6total);
$worksheet->setCellValueByColumnAndRow(4, 16, $box7total);
$worksheet->setCellValueByColumnAndRow(4, 17, $box8total);
$worksheet->setCellValueByColumnAndRow(4, 18, $box9total);
$worksheet->setCellValueByColumnAndRow(4, 19, $box10total);
$worksheet->setCellValueByColumnAndRow(4, 20, $box11total);
$worksheet->setCellValueByColumnAndRow(4, 21, $box12total);
$worksheet->setCellValueByColumnAndRow(4, 22, $box13total);
$worksheet->setCellValueByColumnAndRow(4, 23, $box14total);
$worksheet->setCellValueByColumnAndRow(4, 24, $box15total);
$worksheet->setCellValueByColumnAndRow(4, 25, $box16total);
$worksheet->setCellValueByColumnAndRow(4, 26, $box17total);
$worksheet->setCellValueByColumnAndRow(4, 27, $box18total);
$worksheet->setCellValueByColumnAndRow(4, 28, $box19total);
$worksheet->setCellValueByColumnAndRow(4, 29, $box20total);
$worksheet->setCellValueByColumnAndRow(4, 30, $box21total);
$worksheet->setCellValueByColumnAndRow(4, 31, $box22total);
$worksheet->setCellValueByColumnAndRow(4, 32, $box23total);

$worksheet->setCellValueByColumnAndRow(2, 1, $date);
$worksheet->setCellValueByColumnAndRow(2, 2, $site);
$worksheet->setCellValueByColumnAndRow(2, 3, $weather);
$worksheet->setCellValueByColumnAndRow(2, 4, $recorder);
$worksheet->setCellValueByColumnAndRow(2, 5, $remarks);
$worksheet->setCellValueByColumnAndRow(5, 1, $company);
$worksheet->setCellValueByColumnAndRow(5, 2, $vehicle);
$worksheet->setCellValueByColumnAndRow(5, 3, $route);
$worksheet->setCellValueByColumnAndRow(5, 4, $bin);
$worksheet->setCellValueByColumnAndRow(9, 9, $binweight);

//Copy Unique file name for Excel sheet copy
$copyFileName = 'copy_' . uniqid() . '.xlsx';

// Save the modified spreadsheet
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save($copyFileName);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="' . $copyFileName . '"');
header('Content-Length: ' . filesize($copyFileName));
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Send the file to the browser
readfile($copyFileName);

// Delete the file after sending
unlink($copyFileName);
?>