<?php

class Helper
{
    public function methodGet($param)
    {
        $getAction = $_GET[$param];
        return isset($getAction) ? $getAction : null;
    }

    public function methodPost($param)
    {
        $postAction = $_POST[$param];
        return isset($postAction) ? $postAction : null;
    }
}
