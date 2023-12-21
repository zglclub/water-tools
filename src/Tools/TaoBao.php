<?php

namespace water-tools\src\Tools-tools\src\Tools-tools\src\Tools;

use wateruse;

wateruse wateruse;

wateruse wateruse;

tools\src\Interfaces\IVideo;

/**
 * 努力努力再努力！！！！！
 * Author：Xiaolie
 * Github：https://github.com/Xiaolie0098
 * Email：Xiaolie0098@gmail.com
 * Date：2020/8/13 - 22:51
 **/
class TaoBao extends Base implements IVideo
{


    public function start(string $url): array
    {
        $this->make();
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setContents();
        return $this->exportData();
    }


}
