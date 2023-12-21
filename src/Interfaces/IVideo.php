<?php
declare (strict_types=1);

namespace water-tools\src\Interfaces-tools\src\Interfaces-tools\src\Interfaces;
/**
 * Created By 1
 * Author：Xiaolie
 * Email：Xiaolie0098@gmail.com
 * Date：2020/4/26 - 21:59
 **/
interface IVideo
{

    /**
     * @param string $url
     * @return array
     */
    public function start(string $url): array;

}
