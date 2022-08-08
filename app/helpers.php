<?php


if (!function_exists('feeDueDateStatus')) {
    function feeDueDateStatus($user): ?int
    {
        return $data = (!is_null($user->feeStructure))
            ? \Carbon\Carbon::parse($user->feeStructure->issue_fee_date)->diffInDays($user->feeStructure->due_fee_date, false)
            : null ;
    }
}
