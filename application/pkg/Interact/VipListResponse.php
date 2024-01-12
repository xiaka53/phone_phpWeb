<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vip.proto

namespace Interact;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *返回列表信息
 *
 * Generated from protobuf message <code>interact.VipListResponse</code>
 */
class VipListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *总条数
     *
     * Generated from protobuf field <code>int32 total_count = 1;</code>
     */
    protected $total_count = 0;
    /**
     *vip信息列表
     *
     * Generated from protobuf field <code>repeated .interact.VipInfo list = 2;</code>
     */
    private $list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total_count
     *          总条数
     *     @type array<\Interact\VipInfo>|\Google\Protobuf\Internal\RepeatedField $list
     *          vip信息列表
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Vip::initOnce();
        parent::__construct($data);
    }

    /**
     *总条数
     *
     * Generated from protobuf field <code>int32 total_count = 1;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     *总条数
     *
     * Generated from protobuf field <code>int32 total_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_count = $var;

        return $this;
    }

    /**
     *vip信息列表
     *
     * Generated from protobuf field <code>repeated .interact.VipInfo list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     *vip信息列表
     *
     * Generated from protobuf field <code>repeated .interact.VipInfo list = 2;</code>
     * @param array<\Interact\VipInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Interact\VipInfo::class);
        $this->list = $arr;

        return $this;
    }

}

