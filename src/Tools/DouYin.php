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
 * Date：2020/4/26 - 21:57
 **/
class DouYin extends Base implements IVideo
{
    private $url = '';

    /**
     * 更新时间：2020/7/31
     * @param string $url
     * @return array
     */
    public function start(string $url): array
    {
        $this->url     = $url;
        return $this->execution();
    }

    /**
     * 更新时间：2020/6/10
     * @return array
     */
    public function execution(): array
    {
        $this->make();
        $this->logic->setOriginalUrl($this->url);
        $this->logic->checkUrlHasTrue();
        $this->logic->setItemIds();
        $this->logic->setContents();
        return $this->exportData();
    }
}
