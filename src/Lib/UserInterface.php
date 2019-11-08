<?php declare(strict_types=1);

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
    public function registerByEmail(): array;

    /**
     * @return array
     */
    public function registerByMobile(): array;

    /**
     * @return array
     */
    public function login(): array;

    /**
     * @return array
     */
    public function resetPassword(): array;

    /**
     * @return array
     */
    public function getEmailVerifyCode(): array;

    /**
     * @return array
     */
    public function getMobileVerifyCode(): array;

    /**
     * @return array
     */
    public function getVerifyCode(): array;

    //需要登录功能
    /**
     * @return array
     */
    public function infoIndex(): array;

    /**
     * @return array
     */
    public function editEmail(): array;

    /**
     * @return array
     */
    public function editMobile(): array;

    /**
     * @return array
     */
    public function bindEmail(): array;

    /**
     * @return array
     */
    public function bindMobile(): array;

    /**
     * @return array
     */
    public function editUserInfo(): array;

    /**
     * @return array
     */
    public function editPassword(): array;

    /**
     * @return array
     */
    public function getFormToken(): array;

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
}