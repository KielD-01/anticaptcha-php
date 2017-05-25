<?php
namespace AntiCaptcha;


interface AntiCaptchaTaskProtocolInterface
{
    public function getPostData();

    public function setTaskInfo($taskInfo);

    public function getTaskSolution();
}