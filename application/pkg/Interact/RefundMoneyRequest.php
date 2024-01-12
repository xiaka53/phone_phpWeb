<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: money.proto

namespace Interact;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *申请退款
 *
 * Generated from protobuf message <code>interact.RefundMoneyRequest</code>
 */
class RefundMoneyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *token
     *
     * Generated from protobuf field <code>string token = 1;</code>
     */
    protected $token = '';
    /**
     *账号
     *
     * Generated from protobuf field <code>string account = 2;</code>
     */
    protected $account = '';
    /**
     *金额
     *
     * Generated from protobuf field <code>float amount = 3;</code>
     */
    protected $amount = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     *          token
     *     @type string $account
     *          账号
     *     @type float $amount
     *          金额
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Money::initOnce();
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
     *账号
     *
     * Generated from protobuf field <code>string account = 2;</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     *账号
     *
     * Generated from protobuf field <code>string account = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;

        return $this;
    }

    /**
     *金额
     *
     * Generated from protobuf field <code>float amount = 3;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     *金额
     *
     * Generated from protobuf field <code>float amount = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkFloat($var);
        $this->amount = $var;

        return $this;
    }

}

