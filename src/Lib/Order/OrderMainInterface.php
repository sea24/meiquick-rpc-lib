<?php

namespace MeiQuick\Rpc\Lib\Order;

/**
 * Class OrderMainInterface
 *
 * @since 2.0
 */
interface OrderMainInterface
{
    /**
     * 在线下单
     * @param array $data
     * @return array
     */
    public function orderAdd(array $data): array;

    /**
     * 计算费用
     * @param array $data
     * @return array
     */
    public function calcPrice(array $data): array;

    /**
     * 取消订单
     * @param array $data
     * @return array
     */
    public function orderCancel(array $data): array;

    /**
     * 申请退件
     * @param array $data
     * @return array
     */
    public function orderReturn(array $data): array;

    /**
     * 申请退件
     * @param array $data
     * @return array
     */
    public function orderDelete(array $data): array;

    /**
     * 修改订单
     * @param array $data
     * @return array
     */
    public function orderEdit(array $data): array;

}
