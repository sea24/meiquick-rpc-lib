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

    /**
     * 获取商品分类
     * @param array $data
     * @return array
     */
    public function getCategoryList(array $data): array;

    /**
     * 获取站点增值服务
     * @param array $data
     * @return array
     */
    public function getServiceList(array $data): array;

    /**
     * 获取国内站点列表
     * @param array $data
     * @return array
     */
    public function getReceiveStationList(array $data): array;

    /**
     * 获取国外站点列表
     * @param array $data
     * @return array
     */
    public function getCollectStationList(array $data): array;

    /**
     * 确认订单 - 获取信息
     * @param array $data
     * @return array
     */
    public function checkGetInfo(array $data): array;

    /**
     * 导出订单信息
     * @param array $data
     * @return mixed
     */
    public function exportOrderList(array $data);

}
