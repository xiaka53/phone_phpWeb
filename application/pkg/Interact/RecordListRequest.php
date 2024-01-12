<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: record.proto

namespace Interact;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *查询流水
 *
 * Generated from protobuf message <code>interact.RecordListRequest</code>
 */
class RecordListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *token
     *
     * Generated from protobuf field <code>string token = 1;</code>
     */
    protected $token = '';
    /**
     *页数
     *
     * Generated from protobuf field <code>int32 page = 2;</code>
     */
    protected $page = 0;
    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 from = 3;</code>
     */
    protected $from = 0;
    /**
     *状态
     *
     * Generated from protobuf field <code>optional .interact.State state = 4;</code>
     */
    protected $state = null;
    /**
     *代理商
     *
     * Generated from protobuf field <code>optional string agent = 5;</code>
     */
    protected $agent = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     *          token
     *     @type int $page
     *          页数
     *     @type int $from
     *          每页条数
     *     @type int $state
     *          状态
     *     @type string $agent
     *          代理商
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
     *页数
     *
     * Generated from protobuf field <code>int32 page = 2;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     *页数
     *
     * Generated from protobuf field <code>int32 page = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 from = 3;</code>
     * @return int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     *每页条数
     *
     * Generated from protobuf field <code>int32 from = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkInt32($var);
        $this->from = $var;

        return $this;
    }

    /**
     *状态
     *
     * Generated from protobuf field <code>optional .interact.State state = 4;</code>
     * @return int
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : 0;
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     *状态
     *
     * Generated from protobuf field <code>optional .interact.State state = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Interact\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     *代理商
     *
     * Generated from protobuf field <code>optional string agent = 5;</code>
     * @return string
     */
    public function getAgent()
    {
        return isset($this->agent) ? $this->agent : '';
    }

    public function hasAgent()
    {
        return isset($this->agent);
    }

    public function clearAgent()
    {
        unset($this->agent);
    }

    /**
     *代理商
     *
     * Generated from protobuf field <code>optional string agent = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent = $var;

        return $this;
    }

}
