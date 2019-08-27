<?php

namespace LoxBerry\Communication\ValueCache;

use LoxBerry\System\Paths;

/**
 * Class UdpValueCache.
 */
class UdpValueCache extends AbstractValueCache
{
    const CACHE_FILENAME_TEMPLATE = 'msudp_mem_%s_%s.json';

    /**
     * @return string
     */
    protected function getCacheDirectory(): string
    {
        return Paths::PATH_SYSTEM_COMMUNICATION_CACHE;
    }

    /**
     * @param string   $miniserverIp
     * @param int|null $port
     *
     * @return string
     */
    protected function getCacheFileName(string $miniserverIp, ?int $port = null): string
    {
        return sprintf(
            self::CACHE_FILENAME_TEMPLATE,
            md5($miniserverIp),
            $port
        );
    }
}
