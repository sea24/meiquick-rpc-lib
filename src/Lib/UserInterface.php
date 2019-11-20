<?php

namespace MeiQuick\Rpc\Lib;

/**
 * Class UserInterface
 *
 * @since 2.0
 */
interface UserInterface
{
    /**
     * @return array
     */
    public function registerByEmail(array $param): array;

    /**
     * @return array
     */
    public function registerByMobile(array $param): array;

    /**
     * @return array
     */
    public function login(array $param): array;

    /**
     * 退出登录
     * @return array
     */
    public function logout(array $param): array;

    /**
     * @return array
     */
    public function resetPassword(array $param): array;

    /**
     * @return array
     */
    public function getEmailVerifyCode(array $param): array;

    /**
     * @return array
     */
    public function getMobileVerifyCode(array $param): array;

    /**
     * @return array
     */
    public function getVerifyCode(array $param): array;

    //需要登录功能
    /**
     * @return array
     */
    public function infoIndex(array $param): array;

    /**
     * @return array
     */
    public function editEmail(array $param): array;

    /**
     * @return array
     */
    public function editMobile(array $param): array;

    /**
     * @return array
     */
    public function bindEmail(array $param): array;

    /**
     * @return array
     */
    public function bindMobile(array $param): array;

    /**
     * @return array
     */
    public function editUserInfo(array $param): array;

    /**
     * @return array
     */
    public function editPassword(array $param): array;

    /**
     * @return array
     */
    public function getFormToken(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function addReceiveAddress(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function editReceiveAddress(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function deleteReceiveAddress(array $param): array;

    /**
     * @param array $param
     * @return array
     */
    public function getReceiveAddress(array $param): array;

    /**
     * 获取地区下拉框
     * @param array $param
     * @return array
     */
    public function getUsdDistrict(array $param): array;

    /**
     * 获取默认地址
     * @param array $param
     * @return array
     */
    public function getDefaultAddress(array $param): array;

    /**
     * 根据收件人id获取收件人信息
     * @param array $param
     * @return array
     */
    public function getReceiveAddressById(array $param): array;

    /**
     * 设为默认地址
     * @param array $param
     * @return array
     */
    public function setDefaultAddress(array $param): array;
}
