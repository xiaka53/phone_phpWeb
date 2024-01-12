<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vip.proto

namespace Interact;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *会员返回
 *
 * Generated from protobuf message <code>interact.VipResponse</code>
 */
class VipResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *执行状态
     *
     * Generated from protobuf field <code>bool status = 1;</code>
     */
    protected $status = false;
    /**
     *执行错误时错误信息
     *
     * Generated from protobuf field <code>string msg = 2;</code>
     */
    protected $msg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $status
     *          执行状态
     *     @type string $msg
     *          执行错误时错误信息
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Vip::initOnce();
        parent::__construct($data);
    }

    /**
     *执行状态
     *
     * Generated from protobuf field <code>bool status = 1;</code>
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *执行状态
     *
     * Generated from protobuf field <code>bool status = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkBool($var);
        $this->status = $var;

        return $this;
    }

    /**
     *执行错误时错误信息
     *
     * Generated from protobuf field <code>string msg = 2;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     *执行错误时错误信息
     *
     * Generated from protobuf field <code>string msg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

}
