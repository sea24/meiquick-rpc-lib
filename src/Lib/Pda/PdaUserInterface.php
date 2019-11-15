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

}