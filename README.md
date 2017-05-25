## How to install this package?

You can install this package via `composer`:

`composer require kield-01/anticaptcha-composer`

## Important Notes
For now, this package is on testing

## Example
```
<?php
namespace AntiCaptcha;
use AntiCaptcha\ImageToText;

        $_img_to_text = new ImageToText();
        $_img_to_text->setKey('anticaptcha_key');
        $_img_to_text->setFile(WWW_ROOT . 'capcha.jpg');
        $_task = 0;
        $_result = 0;

        while (!$_img_to_text->createTask()) {
            $_img_to_text->createTask();
        }

        $_task = $_img_to_text->getTaskId();

        while (!$_img_to_text->waitForResult()) {
            $_img_to_text->waitForResult();
        }

        $_result = $_img_to_text->getTaskSolution();

        dump("TaskID : {$_task} : {$_result}");
