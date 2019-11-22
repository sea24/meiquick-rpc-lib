<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/30
 * Time: 17:03
 */

namespace MeiQuick\Rpc\Lib;


interface PayInterface
{
    /**
     * @param array $params
     * @return array
     */
    public function list(array $params): array;

    /**
     * @param array $params
     * @return array
     */
    public function recharge(array $params): array;

    /**
     * @param array $params
     * @return array
     */
    public function consume(array $params): array;

    /**
     * @param array $params
     * @return array
     */
    public function refund(array $params): array;

    /**
     * @param array $params
     * @return mixed
     */
    public function alipayNotify(array $params);

    /**
     * @param array $xml
     * @return mixed
     */
    public function wxpayNotify(array $xml);
    
    /**
     * @param array $params
     * @return array
     */
    public function tradeTypeList(array $params): array;

    /**
     * @param array $params
     * @return array
     */
    public function payTypeList(array $params): array;

    /**
     * @param array $params
     * @return array
     */
    public function rechargeResult(array $params): array;
}