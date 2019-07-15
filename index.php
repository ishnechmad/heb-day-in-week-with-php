<?php
date_default_timezone_set('Asia/Jerusalem');


    
    $days = date("l", time());
    
    switch($days){
        case "Sunday": 
            $day = "יום ראשון";
            break;
        case "Monday": 
            $day = "יום שני";
            break;
        case "Tuesday": 
            $day = "יום שלישי";
            break;
        case "Wednesday": 
            $day = "יום רביעי";
            break;
        case "Thursday": 
            $day = "יום חמישי";
            break;
        case "Friday": 
            $day = "יום שישי";
            break;
        case "Saturday": 
            $day = "מוצאי שבת";
            break;

    }
    print "<p>$days = $day</p><br/><br/>";
?>
