<?php
require './vendor/autoload.php';
require_once './vendor/giggsey/libphonenumber-for-php/src/PhoneNumberUtil.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $country = $_POST['country'];

    $phoneNumberUtil = \libphonenumber\PhoneNumberUtil::getInstance();
    $prefix = '+' . $phoneNumberUtil->getCountryCodeForRegion($country);
    $response = ['prefix' => $prefix];
    
    echo json_encode($response);
}
?>
