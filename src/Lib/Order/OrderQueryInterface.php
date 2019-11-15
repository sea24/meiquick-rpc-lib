<?php

namespace MeiQuick\Rpc\Lib\Order;

/**
 * Class OrderQueryInterface
 *
 * @since 2.0
 */
interface OrderQueryInterface
{
    /**
     * 订单列表
     * @param array $data
     * @return array
     */
    public function getList(array $data): array;

    /**
     * 订单查询
     * @param array $data
     * @return array
     */
    public function findOrder(array $data): array;

    /**
     * 订单详情
     * @param array $data
     * @return array
     */
    public function getInfo(array $data): array;

    /**
     * 售后列表
     * @param array $data
     * @return array
     */
    public function getAfterSalesList(array $data): array;

}
