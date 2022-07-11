<?php

namespace Fize\Codec;

use UnexpectedValueException;

/**
 * JSON 编码解码
 */
class Json
{

    /**
     * 禁止构造
     */
    private function __construct()
    {
    }

    /**
     * 对 JSON 格式的字符串进行编码
     * @param string $json    待解码的 json 格式的字符串。
     * @param bool   $assoc   当该参数为TRUE时，将返回array而非object。默认为true
     * @param int    $depth   指定递归深度，默认为512
     * @param int    $options 额外选项，如 JSON_BIGINT_AS_STRING 将数字做为字符串返回
     * @return array|object
     */
    public static function decode(string $json, bool $assoc = true, int $depth = 512, int $options = 0)
    {
        $result = json_decode($json, $assoc, $depth, $options);
        $errcode = json_last_error();
        if ($errcode) {
            throw new UnexpectedValueException(json_last_error_msg(), $errcode);
        }
        return $result;
    }

    /**
     * 对变量进行 JSON 编码
     *
     * 该函数只能接受 UTF-8 编码的数据
     * @param mixed $value   待编码的 value ，除了 resource 类型之外，可以为任何数据类型
     * @param int   $options 选项
     * @param int   $depth   设置最大深度
     * @return string
     */
    public static function encode($value, int $options = 0, int $depth = 512): string
    {
        $result = json_encode($value, $options, $depth);
        if (false === $result) {
            throw new UnexpectedValueException(json_last_error_msg(), json_last_error());
        }
        return $result;
    }
}
