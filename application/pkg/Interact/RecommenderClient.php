<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Interact;

/**
 */
class RecommenderClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 推荐人列表
     * @param \Interact\RecommenderListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\Interact\RecommenderListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/interact.Recommender/List',
        $argument,
        ['\Interact\RecommenderListResponse', 'decode'],
        $metadata, $options);
    }

}
