<?php
declare (strict_types=1);

namespace water-tools\src\Tools-tools\src\Tools-tools\src\Tools;

use tools\src\Logic\NewWeiBoLogic;
use wateruse;

wateruse wateruse;

wateruse wateruse;

tools\src\Interfaces\IVideo;

/**
 * Created By 1
 * Author：Xiaolie
 * Email：Xiaolie0098@gmail.com
 * Date：2020/6/13 - 21:04
 **/
class WeiBo extends Base implements IVideo
{

    /**
     * 更新时间：2020/7/31
     * @param string $url
     * @return array
     */
    public function start(string $url): array
    {
        $this->make();
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setStatusId();
        $this->logic->setContents();
        return $this->exportData();
    }

    /**
     * 更新时间：2020/7/31
     * @param string $url
     * @return array
     */
    public function newVideoStart(string $url): array
    {
        $obj         = new NewWeiBoLogic($this, 'newweibo');
        $this->logic = $obj;
        $this->logic->setOriginalUrl($url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setFid();
        $this->logic->setMid();
        $this->logic->setContents();
        return $this->exportData();
    }

}
