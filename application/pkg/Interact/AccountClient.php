<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Interact;

/**
 */
class AccountClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 账号查询是否匹配
     * @param \Interact\AccountSelectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AccountSelect(\Interact\AccountSelectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Account/AccountSelect',
        $argument,
        ['\Interact\AccountSelectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 创建新用户
     * @param \Interact\AddAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddAccount(\Interact\AddAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Account/AddAccount',
        $argument,
        ['\Interact\ExecAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 关闭用户
     * @param \Interact\CloseAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CloseAccount(\Interact\CloseAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Account/CloseAccount',
        $argument,
        ['\Interact\ExecAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 开启新用户
     * @param \Interact\OpenAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OpenAccount(\Interact\OpenAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Account/OpenAccount',
        $argument,
        ['\Interact\ExecAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 个人资料查询
     * @param \Interact\AccountInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AccountInfo(\Interact\AccountInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Account/AccountInfo',
        $argument,
        ['\Interact\AccountInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置备注
     * @param \Interact\MemoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetMemoAccount(\Interact\MemoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Account/SetMemoAccount',
        $argument,
        ['\Interact\ExecAccountResponse', 'decode'],
        $metadata, $options);
    }

}
