<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Interact;

/**
 */
class RecordClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 查询流水
     * @param \Interact\RecordListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\Interact\RecordListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Record/List',
        $argument,
        ['\Interact\RecordListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 取消充值
     * @param \Interact\CancelRecordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Cancel(\Interact\CancelRecordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Record/Cancel',
        $argument,
        ['\Interact\RecordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 充值完成
     * @param \Interact\FinishRecordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Finish(\Interact\FinishRecordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Record/Finish',
        $argument,
        ['\Interact\RecordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 申请售后
     * @param \Interact\ApplyAfterSalesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ApplyAfterSales(\Interact\ApplyAfterSalesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Record/ApplyAfterSales',
        $argument,
        ['\Interact\RecordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 填写备注
     * @param \Interact\MemoRepuest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Memo(\Interact\MemoRepuest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Record/Memo',
        $argument,
        ['\Interact\RecordResponse', 'decode'],
        $metadata, $options);
    }

}
