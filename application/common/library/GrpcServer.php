<?php
/**
 * Created by PhpStorm.
 * User: 阿沁
 * Date: 2024/1/12
 * Time: 15:18
 * SOURCE: 中国大陆工时规管现况（标准工时）：
 *              一天工作时间为8小时，平均每周工时不超过40小时;
 *              加班上限为一天3小时及一个月36小时，逾时工作薪金不低于平日工资的150％。
 *              而一周最高工时则为48小时。平均每月计薪天数为21.75天。
 * TO: 我是阿沁,健康撸代码,拒绝通宵。
 * 版权所有: © 2024-2030 阿沁
 * WARNING: 未经本人许可, 禁止一切商用
 * CLASS: < GrpcServer.php >
 */

namespace app\common\library;

use app\pkg\Interact\AccountClient;
use Grpc\ChannelCredentials;
use Interact\AccountSelectRequest;

class GrpcServer
{
	private static $accountClient;
	private static $grpcServer=null;
	
	private function __construct()
	{
		$this->accountClient=new AccountClient('127.0.0.1:50051',[
			'credentials' => ChannelCredentials::createInsecure(),
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