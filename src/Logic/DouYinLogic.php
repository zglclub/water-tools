<?php
declare (strict_types=1);

namespace water-tools\src\Logic-tools\src\Logic-tools\src\Logic;

use tools\src\Exception\ErrorVideoException;
use tools\src\Utils\CommonUtil;
use wateruse;

wateruse wateruse wateruse wateruse wateruse;

wateruse wateruse wateruse wateruse wateruse;

tools\src\Enumerates\UserGentType;

/**
 * Created By 1
 * Author：Xiaolie
 * Email：Xiaolie0098@gmail.com
 * Date：2020/6/10 - 13:05
 **/
class DouYinLogic extends Base
{

    private $contents;
    private $itemId;

    public function setItemIds()
    {
        if (strpos($this->url, '/share/video')) {
            $url = $this->url;
        } else {
            $url = $this->redirects($this->url, [], [
                'User-Agent' => UserGentType::ANDROID_USER_AGENT,
            ]);
        }
        $url = $this->redirects($this->url, [], [
            'User-Agent' => UserGentType::ANDROID_USER_AGENT,
        ]);

        preg_match('/video\/([0-9]+)\//i', $url, $matches);
        if (CommonUtil::checkEmptyMatch($matches)) {
            throw new ErrorVideoException("item_id获取不到");
        }
        $this->itemId = $matches[1];
    }

    public function setContents()
    {

        $contents = $this->get('https://www.douyin.com/aweme/v1/web/aweme/detail', [
            'aweme_id' => $this->itemId,
            'aid'=> 1128,
            'version_name'=> '23.5.0',
            'device_platform'=> 'android',
            'os_version'=> '2333',
        ], [
            'Cookie' =>'ttwid=1%7CoYhwppO0qlEeYbfC9p4JHCBlZp7aDTvcq_LuMe26MXo%7C1703065012%7C86f8547b0ddc7fd6d4afd1dcf7d149d7b429bc4324405ed341682ce4079944b8; FORCE_LOGIN=%7B%22videoConsumedRemainSeconds%22%3A180%7D; strategyABtestKey=%221703065013.191%22; volume_info=%7B%22isUserMute%22%3Afalse%2C%22isMute%22%3Afalse%2C%22volume%22%3A0.6%7D; s_v_web_id=verify_lqdkxrxl_RLIv7vZE_a1Oo_4xkE_9X4E_peqk5XoZm7A7; passport_csrf_token=02787b47a7e2de9b6ec0f8ebec47abac; passport_csrf_token_default=02787b47a7e2de9b6ec0f8ebec47abac; bd_ticket_guard_client_web_domain=2; ttcid=9c8e8b26bbfe4b4cb1ed40adccf0841212; __ac_signature=_02B4Z6wo00f01CX4jfAAAIDDGFGXbb9pPXAl2IlAAG0DIDE8K37YkSwlngUSsqsL7WZz9NjuZjb55N6l9X7QMRistmw4RVoTU4hpu4.s9DnuAkPyA3cfQ93e4yqAPGIPR8yQd5DmngY7aiFl2e; odin_tt=eac9345271fcef4b28bb369382cb45474dee7e75804de36020e68dab955d3126e2817378ee4c431cd259a431b716685da7b921b44013ab56e12f9d8574ae08e412c8db2c46d11086745e5ce37d90ed98; xgplayer_user_id=994145934044; _tea_utm_cache_1243=undefined; MONITOR_WEB_ID=057df72d-716e-4b22-9f78-404d1016a6ec; pwa2=%220%7C0%7C2%7C0%22; stream_player_status_params=%22%7B%5C%22is_auto_play%5C%22%3A0%2C%5C%22is_full_screen%5C%22%3A0%2C%5C%22is_full_webscreen%5C%22%3A0%2C%5C%22is_mute%5C%22%3A0%2C%5C%22is_speed%5C%22%3A1%2C%5C%22is_visible%5C%22%3A0%7D%22; home_can_add_dy_2_desktop=%220%22; dy_swidth=1920; dy_sheight=1080; stream_recommend_feed_params=%22%7B%5C%22cookie_enabled%5C%22%3Atrue%2C%5C%22screen_width%5C%22%3A1920%2C%5C%22screen_height%5C%22%3A1080%2C%5C%22browser_online%5C%22%3Atrue%2C%5C%22cpu_core_num%5C%22%3A16%2C%5C%22device_memory%5C%22%3A8%2C%5C%22downlink%5C%22%3A10%2C%5C%22effective_type%5C%22%3A%5C%224g%5C%22%2C%5C%22round_trip_time%5C%22%3A200%7D%22; bd_ticket_guard_client_data=eyJiZC10aWNrZXQtZ3VhcmQtdmVyc2lvbiI6MiwiYmQtdGlja2V0LWd1YXJkLWl0ZXJhdGlvbi12ZXJzaW9uIjoxLCJiZC10aWNrZXQtZ3VhcmQtcmVlLXB1YmxpYy1rZXkiOiJCTjVDZEFKaWdLOEJJeWllbitZTlFzUGFzNG9lblIxTTJJd1crZGJSQ1c4UURDRldwS201bmN2L1YxLzVBL0IwOEkxb3V6aFQ2YUdiTDAydTc5QUJCa1U9IiwiYmQtdGlja2V0LWd1YXJkLXdlYi12ZXJzaW9uIjoxfQ%3D%3D; tt_scid=AI9g41cMq6CKyvcuJUJDhUMWNSxVk02Gi8RETAWbfk.MR3mau4vQF4n.xJoqc.8te4af; IsDouyinActive=false; msToken=KCpFdKze7kFxXp4yreO1Tw2-fFr7oVDNohdGLB_6s8r3marDcQaE1OoCWQFSmtcPMXX4b5NQX6b3Erw-xSlvOpnXBhZElBLx2lOrhWxOsNRCgcUp88a3l_-Sw0EpSg==; download_guide=%222%2F20231220%2F0%22; msToken=E7hDXPgowjq7BqwVpx9UV3-bs-BoI0HrPES1BX12TlUqdEEZLTiQcxhlDdftIAwett8s520bEGXbk1CqZFV405-By_qdd_NUUin3sAwwgaYhExtVyoH3UVwDApqPjg==',
            'User-Agent' => UserGentType::ANDROID_USER_AGENT,
        ]);
        if ((isset($contents['status_code']) && $contents['status_code'] != 0) || empty($contents['aweme_detail']['video']['play_addr']['uri'])) {
            throw new ErrorVideoException("parsing failed");
        }
        if (empty($contents['aweme_detail']['video'])) {
            throw new ErrorVideoException("不存在item_list无法获取视频信息");
        }
        $this->contents = $contents;
    }

    /**
     * @return mixed
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    public function getVideoUrl()
    {
        if (empty($this->contents['aweme_detail']['video']['play_addr']['uri'])) {
            return '';
        }
        return $this->redirects('https://aweme.snssdk.com/aweme/v1/play/', [
            'video_id' => $this->contents['aweme_detail']['video']['play_addr']['uri'],
            'ratio'    => '720',
            'line'     => '0',
        ], [
            'User-Agent' => UserGentType::ANDROID_USER_AGENT,
        ]);
    }

    public function getVideoImage()
    {
        return CommonUtil::getData($this->contents['aweme_detail']['video']['cover']['url_list'][0]);
    }

    public function getVideoDesc()
    {
        return CommonUtil::getData($this->contents['aweme_detail']['desc']);
    }

    public function getUsername()
    {
        return CommonUtil::getData($this->contents['aweme_detail']['author']['nickname']);
    }

    public function getUserPic()
    {
        return CommonUtil::getData($this->contents['aweme_detail']['author']['avatar_thumb']['url_list'][0]);
    }

}
