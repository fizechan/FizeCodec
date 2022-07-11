<?php

namespace Tests;


use Fize\Codec\Json;
use PHPUnit\Framework\TestCase;

class TestJson extends TestCase
{

    public function testDecode()
    {
        $json = '{"code":0,"msg":"","time":1568698647,"data":{"rows":[{"type":"征信授权审批","title":"某某某","date":"2019-05-27","time":"2019-05-27 10:43:44","action":"审批","url":"crm\/credit\/auth\/index","ident":22},{"type":"征信授权审批","title":"陈尚伟","date":"2019-05-29","time":"2019-05-29 13:43:15","action":"审批","url":"crm\/credit\/auth\/index","ident":25},{"type":"征信授权审批","title":"杨彬","date":"2019-06-10","time":"2019-06-10 16:31:43","action":"审批","url":"crm\/credit\/auth\/index","ident":28},{"type":"征信授权审批","title":"杨彬","date":"2019-06-11","time":"2019-06-11 14:50:49","action":"审批","url":"crm\/credit\/auth\/index","ident":30},{"type":"征信授权审批","title":"杨彬","date":"2019-06-13","time":"2019-06-13 09:57:10","action":"审批","url":"crm\/credit\/auth\/index","ident":31},{"type":"实物接收","title":"PRO120190527002","date":"2019-05-28","time":"2019-05-28 14:48:34","action":"操作","url":"project\/index\/matter\/index","ident":6},{"type":"实物接收","title":"PRO220190527001","date":"2019-05-27","time":"2019-05-27 21:41:52","action":"操作","url":"project\/index\/matter\/index","ident":4},{"type":"实物接收","title":"PRO220190528001","date":"2019-06-25","time":"2019-06-25 15:05:47","action":"操作","url":"project\/index\/matter\/index","ident":11},{"type":"实物接收","title":"PRO220190616001","date":"2019-06-25","time":"2019-06-25 11:13:24","action":"操作","url":"project\/index\/matter\/index","ident":10},{"type":"实物接收","title":"PRO320190618001","date":"2019-06-19","time":"2019-06-19 10:25:32","action":"操作","url":"project\/index\/matter\/index","ident":8}],"count":10}}';
        $array = Json::decode($json);
        var_dump($array);
        self::assertIsArray($array);
    }

    public function testEncode()
    {
        $array = [
            'errcode' => 0,
            'errmsg' => 'for 测试！~'
        ];
        $json = Json::encode($array);
        self::assertNotEmpty($json);
        var_dump($json);
    }
}
