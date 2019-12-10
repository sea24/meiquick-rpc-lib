<?php

namespace MeiQuick\Rpc\Lib\Pda;

/**
 * Class PdaUserInterface
 *
 * @since 2.0
 */
interface PdaUserInterface
{
    /**
     * 登录
     * @param array $data
     * @return array
     */
    public function login(array $data): array;

    /**
     * 退出登录
     * @param array $data
     * @return array
     */
    public function logout(array $data): array;

    /**
     * 获取操作列表
     * @param array $data
     * @return array
     */
    public function handleList(array $data): array;

    /**
     * 检查更新
     * @param array $data
     * @return array
     */
    public function updateCheck(array $data): array;

    /**
     * 注册
     * @param array $data
     * @return array
     */
    public function register(array $data): array;

    /**
     * 获取图片验证码
     * @param array $data
     * @return array
     */
    public function getCaptcha(array $data): array;

}
