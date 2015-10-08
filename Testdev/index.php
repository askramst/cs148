<?php

Print"<p>" . Greetings(0300) . '</p>';


function Greetings($hour) {
    $hours = (int) $hours;
    {
        if ($hour >= 0000 && $hour < 1200)
            return 'Good Morning';
    }
    if ($hour >= 1200 && $hour < 1700) {
        return 'Good Afternoon';
    }
    if ($hour > 1700) {
        return'Good Evening';
    }
}
?>

