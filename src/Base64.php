<?php

namespace Fize\Codec;

use UnexpectedValueException;

/**
 * Base64 编码解码
 */
class Base64
{
    /**
     * Base64 解码
     * @param string $data   待解码字符串
     * @param bool   $strict 是否忽略无法识别的字符
     * @return string
     * @throws UnexpectedValueException
     */
    public static function decode(string $data, bool $strict = false): string
    {
        $result = base64_decode($data, $strict);
        if (false === $result) {
            throw new UnexpectedValueException('error on Base64::decode');
        }
        return $result;
    }

    /**
     * Base64 编码
     * @param string $data 待编码字符串
     * @return string
     */
    public static function encode(string $data): string
    {
        return base64_encode($data);
    }
}
