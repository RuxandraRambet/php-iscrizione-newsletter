<?php

function checkEmail($email){
    return stripos($email, '.') !== false && stripos($email, '@') !== false;
}
?>