<?php

function obligatoire(string $fieldName, string $value, array &$errors, $sms ="Champ obligatoire") {
    if (empty($value)) {
        $errors[$fieldName] = $sms;
    }
}