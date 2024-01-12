<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Interact;

/**
 * 资金管理
 */
class MoneyClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 执行充值
     * @param \Interact\RechangeRepuest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Rechange(\Interact\RechangeRepuest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Money/Rechange',
        $argument,
        ['\Interact\ExecMoneyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 申请退款
     * @param \Interact\RefundMoneyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RefundMoney(\Interact\RefundMoneyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Money/RefundMoney',
        $argument,
        ['\Interact\ExecMoneyResponse', 'decode'],
        $metadata, $options);
    }

}
