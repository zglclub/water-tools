<?php
declare (strict_types=1);

namespace water-tools\src\Tools-tools\src\Tools-tools\src\Tools;

use wateruse;

wateruse wateruse;

wateruse wateruse;

tools\src\Interfaces\IVideo;

/**
 * Created By 1
 * Author：Xiaolie
 * Email：Xiaolie0098@gmail.com
 * Date：2020/7/17 - 16:11
 **/
class QQVideo extends Base implements IVideo
{


    public function start(string $url): array
    {
        $this->make();
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setVid();
        $this->logic->setContents();
        return $this->exportData();
    }

}
