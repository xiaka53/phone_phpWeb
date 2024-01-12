<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: record.proto

namespace Interact;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *取消订单
 *
 * Generated from protobuf message <code>interact.CancelRecordRequest</code>
 */
class CancelRecordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *token
     *
     * Generated from protobuf field <code>string token = 1;</code>
     */
    protected $token = '';
    /**
     *标识
     *
     * Generated from protobuf field <code>int32 mark = 2;</code>
     */
    protected $mark = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     *          token
     *     @type int $mark
     *          标识
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Record::initOnce();
        parent::__construct($data);
    }

    /**
     *token
     *
     * Generated from protobuf field <code>string token = 1;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     *token
     *
     * Generated from protobuf field <code>string token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     *标识
     *
     * Generated from protobuf field <code>int32 mark = 2;</code>
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     *标识
     *
     * Generated from protobuf field <code>int32 mark = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMark($var)
    {
        GPBUtil::checkInt32($var);
        $this->mark = $var;

        return $this;
    }

}
