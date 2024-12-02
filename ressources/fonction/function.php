<?php 
// Get time lapse
function timeLapsed($givendate, $format = DATE_RSS){
    if (is_numeric($givendate)) {
        $givendate = new DateTime($givendate);
        # code...
    }else{
        $givendate = DateTime::createFromFormat($format, $givendate);
        $currentDate = new DateTime();
        $interval = $currentDate->diff($givendate);
        $days = $interval->days;
        $hours = $interval->h;
        $minutes = $interval->i;
        $secondes = $interval->s;
        return "$days Jours, $hours heures, $minutes minutes, $secondes secondes";
    }
}