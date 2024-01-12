<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Interact;

/**
 */
class VipClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 列表
     * @param \Interact\VipListRepuest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\Interact\VipListRepuest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Vip/List',
        $argument,
        ['\Interact\VipListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 执行开通
     * @param \Interact\OpenVipRepuest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Open(\Interact\OpenVipRepuest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Vip/Open',
        $argument,
        ['\Interact\VipResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 添加会员种类
     * @param \Interact\AddVipRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddVip(\Interact\AddVipRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Vip/AddVip',
        $argument,
        ['\Interact\VipResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 开启会员
     * @param \Interact\OpenOrCloseVipRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OnVip(\Interact\OpenOrCloseVipRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Vip/OnVip',
        $argument,
        ['\Interact\VipResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 修改会员信息
     * @param \Interact\EditVipRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Edit(\Interact\EditVipRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Vip/Edit',
        $argument,
        ['\Interact\VipResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 关闭会员
     * @param \Interact\OpenOrCloseVipRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OffVip(\Interact\OpenOrCloseVipRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Vip/OffVip',
        $argument,
        ['\Interact\VipResponse', 'decode'],
        $metadata, $options);
    }

}
