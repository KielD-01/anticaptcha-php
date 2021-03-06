<?php
namespace AntiCaptcha;

$api = new NoCaptchaProxyless();
$api->setVerboseMode(true);

//your anti-captcha.com account key
$api->setKey("12345678901234567890123456789012");

//recaptcha key from target website
$api->setWebsiteURL("http://http.myjino.ru/recaptcha/test-get.php");
$api->setWebsiteKey("6Lc_aCMTAAAAABx7u2W0WPXnVbI_v6ZdbM6rYf16");

if (!$api->createTask()) {
    $api->debout("API v2 send failed - " . $api->getErrorMessage(), "red");
    return false;
}

$taskId = $api->getTaskId();


if (!$api->waitForResult()) {
    $api->debout("could not solve captcha", "red");
    $api->debout($api->getErrorMessage());
} else {
    echo "\nhash result: " . $api->getTaskSolution() . "\n\n";
}
