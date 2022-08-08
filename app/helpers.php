<?php


if (!function_exists('feeDueDateStatus')) {
    function feeDueDateStatus($user): ?int
    {
        return $data = (!is_null($user->feeStructure))
            ? now()->diffInDays($user->feeStructure->due_fee_date, false)
            : null ;
    }
}
if (!function_exists('dateForHumans')) {
    function dateForHumans(): string
    {
        return now()->addDays(120)->format('Y-m-d');
    }
}
