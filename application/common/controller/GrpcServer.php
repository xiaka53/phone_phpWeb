<?php

namespace app\common\controller;

use app\pkg\Interact\AccountClient;
use Interact\AccountSelectRequest;

// require dirname(__FILE__) . '/vendor/autoload.php';

class GrpcServer{

    private static $accountClient;
    private static $grpcServer=null;

    private function __construct()
    {
        $this->accountClient=new AccountClient('127.0.0.1:50051',[
            'credentials' => Grpc\ChannelCredentials::createInsecure(),
        ]);
    }


    public static function getAccountClient(){
        if (empty($accountClient)){
            self::$accountClient=new self();
        }
        return self::$accountClient;
    }

    function test(){
        $request=new AccountSelectRequest();
        $request->setAccount("aa");
        $request->setUrl("asss");
    
        list($respone,$states)=self::$accountClient->AccountSelect($request)->wait();
        echo sprintf("code: %s, msg: %s \n", $respone->getAmount(), $states);
    }
}
