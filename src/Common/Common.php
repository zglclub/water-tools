<?php
declare (strict_types=1);

namespace water-tools\src\Common-tools\src\Common-tools\src\Common;

use tools\src\Exception\Exception;
use tools\src\Utils\Config;

/**
 * 努力努力再努力！！！！！
 * Author：Xiaolie
 * Github：https://github.com/Xiaolie0098
 * Email：76101700@qq.com
 * Date：2020/7/30 - 17:10
 **/
abstract class Common
{

    /**
     * 代理信息
     * @var string
     */
    private $proxy = '';

    /**
     * 是否验证url，否的话则自己需要验证
     * @var bool
     */
    private $isCheckUrl = true;

    /**
     * URL验证器
     * @var tools\src\Utils\tools\src\Utils\tools\src\Utils\Config
     */
    private $urlValidator = [];


    /**
     * 设置代理 | 传参即是代表需要开启代理模式
     * 这边只能接受字符串，数组的话没办法使用
     * @param string $proxy 主机:端口 例如[47.112.221.156:3128]
     * @return $this
     * @throws tools\src\Exception\tools\src\Exception\tools\src\Exception\Exception
     * @author Xiaolie
     * @email Xiaolie0098@gmail.com
     */
    public function setProxy(string $proxy): self
    {
        if (!strpos($proxy, ':') || strpos($proxy, 'http') > -1) {
            throw new Exception('代理设置失败');
        }
        $this->proxy = $proxy;
        return $this;
    }

    public function getProxy(): string
    {
        return $this->proxy;
    }

    public function getIsCheckUrl(): bool
    {
        return $this->isCheckUrl;
    }

    /**
     * 是否开启url的验证，如果外层验证过了，这边可以不用验证，传递false就可以
     * @param bool $checkUrl
     * @return $this
     * @author Xiaolie
     * @email Xiaolie0098@gmail.com
     */
    public function setIsCheckUrl(bool $checkUrl): self
    {
        $this->isCheckUrl = $checkUrl;
        return $this;
    }

    /**
     * 获取验证器
     * @param string $key
     * @return tools\src\Utils\tools\src\Utils\tools\src\Utils\Config
     * @author Xiaolie
     * @email Xiaolie0098@gmail.com
     */
    public function getUrlValidator(string $key = ''): Config
    {
        if ($key) {
            return $this->urlValidator->get($key, '');
        }
        return $this->urlValidator;
    }

    /**
     * 设置验证器（空则使用系统自带）
     * @param array $config
     * @return Common
     * @author Xiaolie
     * @email Xiaolie0098@gmail.com
     */
    public function setUrlValidator(array $config)
    {
        $className = strtolower($this->getClassName());
        if (!array_key_exists($className, $config)) {
            $config = [$className => $config];
        }
        $this->urlValidator = new Config($config);
        return $this;
    }

}
