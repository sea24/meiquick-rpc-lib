<?php

namespace MeiQuick\Rpc\Lib;

use Swoft\Http\Message\Request;

/**
 * Class UserInterface
 *
 * @since 2.0
 */
interface UserInterface
{
    /**
     * @param array $param
     * @return array
     */
    public function registerByEmail(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function registerByMobile(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function login(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function logout(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function resetPassword(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function getEmailVerifyCode(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function getMobileVerifyCode(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function getVerifyCode(array $param): array;


    //需要验证登录
        /**
     * @param array $param
     * @return array
     */
    public function infoIndex(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function editEmail(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function editMobile(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function bindEmail(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function bindMobile(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function editUserInfo(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function editPassword(array $param): array;

    /**
     * 获取防止重复提交token
     * @param array $param
     * @return array
     */
    public function getFormToken(array $param): array;

    /**
     * 新增收货地址
     * @param array $param
     * @return array
     */
    public function addReceiveAddress(array $param): array;

    /**
     * 修改收货地址
     * @param array $param
     * @return array
     */
    public function editReceiveAddress(array $param): array;

    /**
     * 删除收货地址
     * @param array $param
     * @return array
     */
    public function deleteReceiveAddress(array $param): array;

    /**
     * 获取收货地址
     * @param array $param
     * @return array
     */
    public function getReceiveAddress(array $param): array;
}
