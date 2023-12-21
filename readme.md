## 短视频去水印
集成了：抖音、火山、头条、快手、梨视频、美拍、陌陌、皮皮搞笑、皮皮虾、全民搞笑、刷宝、微视、小咖秀、最右、B站、微博、秒拍、淘宝等等。

## 安装

安装方法一：（需要下载composer.phar到根目录，设置PHP为全局变量）
~~~
php composerphar require xiaolie/video-tools
~~~
安装方法二：
~~~
composer require xiaolie/video-tools
~~~

如果需要更新扩展包使用
~~~
composer update xiaolie/video-tools
~~~

> 运行环境要求PHP70+
 
 VideoManager使用文档：(可以参考tests/testphp)
 ==
    抖音：VideoManager::DouYin()->start($url);
    快手：VideoManager::KuaiShou()->start($url);
    火山：VideoManager::HuoShan()->start($url);
    头条：VideoManager::TouTiao()->start($url);
    快手：VideoManager::XiGua()->start($url);
    快手：VideoManager::WeiShi()->start($url);
    皮皮虾：VideoManager::PiPiXia()->start($url);
    最右：VideoManager::ZuiYou()->start($url);
    美拍：VideoManager::MeiPai()->start($url);
    梨视频：VideoManager::LiVideo()->start($url);
    全民搞笑：VideoManager::QuanMingGaoXiao()->start($url);
    皮皮搞笑：VideoManager::PiPiGaoXiao()->start($url);
    陌陌：VideoManager::MoMo()->start($url);
    刷宝：VideoManager::ShuaBao()->start($url);
    小咖秀：VideoManager::XiaoKaXiu()->start($url);
    B站：VideoManager::Bili()->start($url);
    微博：VideoManager::WeiBo()->start($url);
    微博短视频：VideoManager::WeiBo()->newVideoStart($url);
    秒拍：VideoManager::MiaoPai()->start($url);
    B站指定参数：VideoManager::Bili()->setUrl($url)->setQuality(BiliQualityType::LEVEL_2)->execution();
    腾讯视频短视频：VideoManager::QQVideo()->start($url);
    淘宝：VideoManager::TaoBao()->start($url);
   自定义URL配置文件：url-validator
   --
   ````
    例如抖音：$res = VideoManager::KuaiShou([
              'proxy_whitelist' => ['kuaishou'],//白名单，需要提交类名，全部小写
              'proxy' => '$ip:$port',
              'url_validator' => [
                    这边参考config/url-validator.php
              ]
          ])->start($url);
    可以参考config/url-validator.php的格式用参数传递，如果不指定则使用默认的
    不会怎么编写全部使用默认也是可以的
   ````
   返回成功：array
   --
   ````
    array(8) {
       ["md5"]=>
       string(32) "fb0f49b1158923a972d9eed40f97965e"
       ["message"]=>
       string(29) "https://v.kuaishou.com/xxxx"
       ["user_name"]=>
       string(15) "xxxx"
       ["user_head_img"]=>
       string(103) "https://tx2.a.yximgs.com/uhead/AB/2020/04/20/14/xxxxx.jpg"
       ["desc"]=>
       string(46) "小子，xxxxx"
       ["img_url"]=>
       string(139) "https://js2.a.yximgs.com/xxxxx.jpg"
       ["video_url"]=>
       string(144) "https://jsmov2.a.yximgs.com/xxxxx.mp4"
       ["type"]=>
       string(5) "video"
    }
   ````
   返回失败：exception
   --
   ````
       需要进行try-catch
       namespace \xiaolie\WaterTools\Exception;
       try {
           $res = VideoManager::KuaiShou()->start("https://v.kuaishou.com/xxxx");
       } catch (ErrorVideoException $e) {
           $e->getTraceAsString();
       }
   ````
  ********
