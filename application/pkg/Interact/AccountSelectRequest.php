<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Interact;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 账号查询请求
 *
 * Generated from protobuf message <code>interact.AccountSelectRequest</code>
 */
class AccountSelectRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *URL
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';
    /**
     *账号
     *
     * Generated from protobuf field <code>string account = 2;</code>
     */
    protected $account = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *          URL
     *     @type string $account
     *          账号
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Account::initOnce();
        parent::__construct($data);
    }

    /**
     *URL
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     *URL
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

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

}

