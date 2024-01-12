<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vip.proto

namespace Interact;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *执行开通会员
 *
 * Generated from protobuf message <code>interact.OpenVipRepuest</code>
 */
class OpenVipRepuest extends \Google\Protobuf\Internal\Message
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
     *vip标识
     *
     * Generated from protobuf field <code>int32 mark = 3;</code>
     */
    protected $mark = 0;
    /**
     *备注
     *
     * Generated from protobuf field <code>optional string memo = 4;</code>
     */
    protected $memo = null;

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
     *     @type int $mark
     *          vip标识
     *     @type string $memo
     *          备注
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Vip::initOnce();
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
     *vip标识
     *
     * Generated from protobuf field <code>int32 mark = 3;</code>
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     *vip标识
     *
     * Generated from protobuf field <code>int32 mark = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMark($var)
    {
        GPBUtil::checkInt32($var);
        $this->mark = $var;

        return $this;
    }

    /**
     *备注
     *
     * Generated from protobuf field <code>optional string memo = 4;</code>
     * @return string
     */
    public function getMemo()
    {
        return isset($this->memo) ? $this->memo : '';
    }

    public function hasMemo()
    {
        return isset($this->memo);
    }

    public function clearMemo()
    {
        unset($this->memo);
    }

    /**
     *备注
     *
     * Generated from protobuf field <code>optional string memo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->memo = $var;

        return $this;
    }

}
