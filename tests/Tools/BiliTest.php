<?php

namespace water-tools\tests\Tools-tools\tests\Tools-tools\tests\Tools;

use PHPUnit\Framework\TestCase;
use tools\src\Enumerates\BiliQualityType;
use tools\src\VideoManager;

class BiliTest extends TestCase
{

    public function testStart()
    {
        $res = VideoManager::Bili()->setUrl("https://b23.tv/av84665662")->setQuality(BiliQualityType::LEVEL_2)->execution();
        var_dump($res);
    }
}
