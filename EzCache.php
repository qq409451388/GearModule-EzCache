<?php
abstract class EzCache implements IEzCacheSystem,IEzCacheKey,IEzCacheString,IEzCacheList,IEzCacheHash
{
    public static function getInstance():EzCache {
        return new static();
        /*if (null === static::$ins) {
            static::$ins = new static();
        }
        return static::$ins;*/
    }

    public function connect($ip, $port, $timeout) {

    }
}
