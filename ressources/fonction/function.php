<?php 
// Get time lapse
function timeLapsed($givendate, $format = DATE_RSS){
    if (is_numeric($givendate)) {
        $givendate = new DateTime($givendate);
        # code...
    }elseif($givendate !="" and !is_null($givendate) and !is_bool($givendate)){
        $givendate = DateTime::createFromFormat($format, $givendate);
        $currentDate = new DateTime();
        $interval = $currentDate->diff($givendate);
        $days = $interval->days;
        $hours = $interval->h;
        $minutes = $interval->i;
        $secondes = $interval->s;
        return "$days Jours, $hours heures, $minutes minutes, $secondes secondes";
    }else {
        return "No data";
    }
}

// Is date is this month
function IsthisMonth($givendate, $format = DATE_RSS){
    if (is_numeric($givendate)) {
        $givendate = new DateTime($givendate);
        # code...
    }elseif($givendate !="" and !is_null($givendate) and !is_bool($givendate)){
        $givendate = DateTime::createFromFormat($format, $givendate);
        $currentDate = new DateTime();
        $interval = $currentDate->diff($givendate);
        $month = $interval->m;
        $days = $interval->days;
        $hours = $interval->h;
        $minutes = $interval->i;
        $secondes = $interval->s;
        return $month;
    }else {
        return "No data";
    }
}