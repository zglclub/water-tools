<?php
declare (strict_types=1);

namespace water-tools\src\Exceptionuse water-tools\src\Exceptionuse water-tools\src\Exception;

/**
 * Created By 1
 * Author：Xiaolie
 * Email：Xiaolie0098@gmail.com
 * Date：2020/4/26 - 22:39
 **/
class ErrorVideoException extends Exception
{

    public function __construct($message = "")
    {
        parent::__construct("ErrorVideo : " . $message, self::ERROR_VIDEO_CODE, null);
    }

}
