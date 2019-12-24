<?php declare(strict_types=1);


namespace MeiQuick\Rpc\Lib;


interface NoticeInterface
{
    public function list(array $params): array;

    public function unreadTotal(array $params): array;

    public function detail(array $params): array;

    public function AllAreRead(array $params): array;
}