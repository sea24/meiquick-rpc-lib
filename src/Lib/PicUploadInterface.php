<?php

namespace MeiQuick\Rpc\Lib;

/**
 * Class PicUploadInterface
 *
 * @since 2.0
 */
interface PicUploadInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function getToken(array $data): array;

    /**
     * @param array $data
     * @return array
     */
    public function qiniuCallback(array $data): array;

}
