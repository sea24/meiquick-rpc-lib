<?php

namespace MeiQuick\Rpc\Lib\Pda;

/**
 * Class PdaMainInterface
 *
 * @since 2.0
 */
interface PdaMainInterface
{
    /**
     * 收件
     * @param array $data
     * @return array
     */
    public function receivePiece(array $data): array;

    /**
     * 主界面搜索
     * @param array $data
     * @return array
     */
    public function search(array $data): array;

    /**
     * 路单列表
     * @param array $data
     * @return array
     */
    public function ladingList(array $data): array;

    /**
     * 路单录入界面
     * @param array $data
     * @return array
     */
    public function entryInfo(array $data): array;

    /**
     * 录入快件
     * @param array $data
     * @return array
     */
    public function ladingEntry(array $data): array;

    /**
     * 标记短装件
     * @param array $data
     * @return array
     */
    public function setShortPiece(array $data): array;

    /**
     * 出库
     * @param array $data
     * @return array
     */
    public function outbound(array $data): array;

    /**
     * 收件
     * @param array $data
     * @return array
     */
    public function collectPiece(array $data): array;

    /**
     * 路单接收界面
     * @param array $data
     * @return array
     */
    public function collectInfo(array $data): array;

    /**
     * 接收快件
     * @param array $data
     * @return array
     */
    public function ladingAccept(array $data): array;

    /**
     * 快件交付
     * @param array $data
     * @return array
     */
    public function delivery(array $data): array;

}
