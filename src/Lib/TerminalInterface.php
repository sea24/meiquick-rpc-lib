<?php

namespace MeiQuick\Rpc\Lib;

use Swoft\Http\Message\Request;

/**
 * Class TerminalInterface
 *
 * @since 2.0
 */
interface TerminalInterface
{
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
     * 获取订单数据
     * @param array $param
     * @return array
     */
    public function getOrder(array $param): array;

    /**
     * 审核
     * @param array $param
     * @return array
     */
    public function examine(array $param): array;

    /**
     * 称重扣费
     * @param array $param
     * @return array
     */
    public function weighing(array $param): array;
    
    /**
     * 获取起始站点
     * @param array $param
     * @return array
     */
    public function getDeliverFrom(array $param): array;
    
    /**
     * 获取目的地站点数据
     * @param array $param
     * @return array
     */
    public function getDeliverTo(array $param): array;

    /**
     * 创建路单
     * @param array $param
     * @return array
     */
    public function createLading(array $param): array;
    
    /**
     * 获取路单信息
     * @param array $param
     * @return array
     */
    public function getExportLading(array $param): array;
    
    /**
     * 删除路单
     * @param array $param
     * @return array
     */
    public function deleteExportLading(array $param): array;
    
    /**
     * 打印面单
     * @param array $param
     * @return array
     */
    public function printOrder(array $param): array;
    
    /**
     * 打印路单
     * @param array $param
     * @return array
     */
    public function printExportLading(array $param): array;

}
