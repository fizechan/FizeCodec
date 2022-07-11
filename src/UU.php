<?php

namespace Fize\Codec;

/**
 * uuencode 编码
 */
class UU
{

    /**
     * 使用 uuencode 编码一个字符串
     * @param string $string 需要被编码的数据
     * @return string
     */
    public static function encode(string $string): string
    {
        return convert_uuencode($string);
    }

    /**
     * 解码一个 uuencode 编码的字符串
     * @param string $string uuencode编码后的数据
     * @return string
     */
    public static function decode(string $string): string
    {
        return convert_uudecode($string);
    }
}