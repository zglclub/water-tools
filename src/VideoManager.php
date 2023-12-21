<?php
declare (strict_types=1);

namespace water-tools\src-tools\src-tools\src;

use tools\src\Exception\InvalidManagerException;
use tools\src\Interfaces\IVideo;
use tools\src\Tools\Bili;
use tools\src\Tools\DouYin;
use tools\src\Tools\HuoShan;
use tools\src\Tools\KuaiShou;
use tools\src\Tools\LiVideo;
use tools\src\Tools\MeiPai;
use tools\src\Tools\MiaoPai;
use tools\src\Tools\MoMo;
use tools\src\Tools\PiPiGaoXiao;
use tools\src\Tools\PiPiXia;
use tools\src\Tools\QQVideo;
use tools\src\Tools\QuanMingGaoXiao;
use tools\src\Tools\ShuaBao;
use tools\src\Tools\TaoBao;
use tools\src\Tools\TouTiao;
use tools\src\Tools\WeiBo;
use tools\src\Tools\WeiShi;
use tools\src\Tools\XiaoKaXiu;
use tools\src\Tools\XiGua;
use tools\src\Tools\ZuiYou;

/**
 * Created By 1
 * Author：Xiaolie
 * Email：Xiaolie0098@gmail.com
 * Date：2020/4/26 - 21:51
 **/

/**
 * @method static HuoShan HuoShan(...$params)
 * @method static DouYin DouYin(...$params)
 * @method static KuaiShou KuaiShou(...$params)
 * @method static TouTiao TouTiao(...$params)
 * @method static XiGua XiGua(...$params)
 * @method static WeiShi WeiShi(...$params)
 * @method static PiPiXia PiPiXia(...$params)
 * @method static ZuiYou ZuiYou(...$params)
 * @method static MeiPai MeiPai(...$params)
 * @method static LiVideo LiVideo(...$params)
 * @method static QuanMingGaoXiao QuanMingGaoXiao(...$params)
 * @method static PiPiGaoXiao PiPiGaoXiao(...$params)
 * @method static MoMo MoMo(...$params)
 * @method static ShuaBao ShuaBao(...$params)
 * @method static XiaoKaXiu XiaoKaXiu(...$params)
 * @method static Bili Bili(...$params)
 * @method static WeiBo WeiBo(...$params)
 * @method static MiaoPai MiaoPai(...$params)
 * @method static QQVideo QQVideo(...$params)
 * @method static TaoBao TaoBao(...$params)
 */
class VideoManager
{

    public function __construct()
    {
    }

    /**
     * @param $method
     * @param $params
     * @return mixed
     */
    public static function __callStatic($method, $params)
    {
        $app = new self();
        return $app->create($method, $params);
    }

    /**
     * @param string $method
     * @param array $params
     * @return mixed
     * @throws tools\src\Exception\InvalidManagerException
     */
    private function create(string $method, array $params)
    {
        $className = __NAMESPACE__ . '\\Tools\\' . $method;
        if (!class_exists($className)) {
            throw new InvalidManagerException("the method name does not exist . method : {$method}");
        }
        return $this->make($className, $params);
    }

    /**
     * @param string $className
     * @param array $params
     * @return mixed
     * @throws tools\src\Exception\InvalidManagerException
     */
    private function make(string $className, array $params)
    {
        $app = new $className($params);
        if ($app instanceof IVideo) {
            return $app;
        }
        throw new InvalidManagerException("this method does not integrate IVideo . namespace : {$className}");
    }
}
