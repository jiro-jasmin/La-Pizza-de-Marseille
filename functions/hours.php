<?php
date_default_timezone_set("Europe/Paris");

function time_slots_html(array $time_slots)
{
    if (empty($time_slots)) {
        return 'Closed';
    }
    $phrases = [];
    foreach ($time_slots as $time_slot) {
        $phrases[] = "from {$time_slot[0]}h to {$time_slot[1]}h";
    }
    return implode(' & ', $phrases);
}

function in_time_slots(int $hour, array $time_slots): bool
{
    foreach ($time_slots as $time_slot) {
        $start = $time_slot[0];
        $end = $time_slot[1];
        if ($hour >= $start && $hour < $end) {
            return true;
        }
    }
    return false;
}
