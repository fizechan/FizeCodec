<?php

namespace Fize\Codec;

/**
 * UTF-8 编码解码
 */
class UTF8
{
    /**
     * 用 UTF-8 方式编码的 ISO-8859-1 字符串转换成单字节的 ISO-8859-1 字符串。
     * @param string $data 待转化字符串
     * @return string
     */
    public static function decode(string $data): string
    {
        return utf8_decode($data);
    }

    /**
     * 将 ISO-8859-1 编码的字符串转换为 UTF-8 编码
     * @param string $data 待转化字符串
     * @return string
     */
    public static function encode(string $data): string
    {
        return utf8_encode($data);
    }
}
