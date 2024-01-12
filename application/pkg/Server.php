<?php

use Interact\AccountClient;
use Interact\AccountSelectRequest;

// require dirname(__FILE__) . '/vendor/autoload.php';

class Account{

    function test(){
        $accountClient=new AccountClient('127.0.0.1:50051',[
            'credentials' => Grpc\ChannelCredentials::createInsecure(),
        ]);
    
        $request=new AccountSelectRequest();
        $request->setAccount("aa");
        $request->setUrl("asss");
    
        list($respone,$states)=$accountClient->AccountSelect($request)->wait();
        echo sprintf("code: %s, msg: %s \n", $response->getCode(), $response->getMsg());
    }
}
$a=new Account;
$a->test();
