<?php
function mlg_mail($mailto, $subject, $message) {
    
    $header = "From: Manchuri Info <info@manchuri.com>";
    if (mail($mailto, $subject,$message, $header)) {
        return true;
    } else {
        return false;
    }
}
?>