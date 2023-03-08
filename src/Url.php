<?php

namespace Fize\Codec;

/**
 * URL 编码解码
 */
class Url
{

    /**
     * 解析 URL，返回其组成部分
     * @param string $url       要解析的 URL。无效字符将使用 _ 来替换。
     * @param int    $component 指定返回的部分
     * @return array|string|int
     */
    public static function parse(string $url, int $component = -1)
    {
        return parse_url($url, $component);
    }

    /**
     * 按照 RFC 3986 对 URL 进行编码
     * @param string $str 要编码的 URL
     * @return string
     */
    public static function rawEncode(string $str): string
    {
        return rawurlencode($str);
    }

    /**
     * 对已编码的 URL 字符串进行解码
     * @param string $str 要解码的 URL 字符串
     * @return string
     */
    public static function rawDecode(string $str): string
    {
        return rawurldecode($str);
    }

    /**
     * 编码 URL 字符串
     * @param string $str 要编码的 URL
     * @return string
     */
    public static function encode(string $str): string
    {
        return urlencode($str);
    }

    /**
     * 解码已编码的 URL 字符串
     * @param string $str 要解码的 URL 字符串
     * @return string
     */
    public static function decode(string $str): string
    {
        return urldecode($str);
    }
}
