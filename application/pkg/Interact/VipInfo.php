<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vip.proto

namespace Interact;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *vip信息
 *
 * Generated from protobuf message <code>interact.VipInfo</code>
 */
class VipInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *LOGO
     *
     * Generated from protobuf field <code>string logo = 1;</code>
     */
    protected $logo = '';
    /**
     *名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     *价格
     *
     * Generated from protobuf field <code>float price = 3;</code>
     */
    protected $price = 0.0;
    /**
     *简介
     *
     * Generated from protobuf field <code>string msg = 4;</code>
     */
    protected $msg = '';
    /**
     *标识
     *
     * Generated from protobuf field <code>int32 mark = 5;</code>
     */
    protected $mark = 0;
    /**
     *开通数量
     *
     * Generated from protobuf field <code>int32 count = 6;</code>
     */
    protected $count = 0;
    /**
     *状态
     *
     * Generated from protobuf field <code>.interact.VipInfo.VipStatus status = 7;</code>
     */
    protected $status = 0;
    /**
     *原价
     *
     * Generated from protobuf field <code>float original_price = 8;</code>
     */
    protected $original_price = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $logo
     *          LOGO
     *     @type string $name
     *          名称
     *     @type float $price
     *          价格
     *     @type string $msg
     *          简介
     *     @type int $mark
     *          标识
     *     @type int $count
     *          开通数量
     *     @type int $status
     *          状态
     *     @type float $original_price
     *          原价
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Vip::initOnce();
        parent::__construct($data);
    }

    /**
     *LOGO
     *
     * Generated from protobuf field <code>string logo = 1;</code>
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     *LOGO
     *
     * Generated from protobuf field <code>string logo = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLogo($var)
    {
        GPBUtil::checkString($var, True);
        $this->logo = $var;

        return $this;
    }

    /**
     *名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *名称
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     *价格
     *
     * Generated from protobuf field <code>float price = 3;</code>
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     *价格
     *
     * Generated from protobuf field <code>float price = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->price = $var;

        return $this;
    }

    /**
     *简介
     *
     * Generated from protobuf field <code>string msg = 4;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     *简介
     *
     * Generated from protobuf field <code>string msg = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

    /**
     *标识
     *
     * Generated from protobuf field <code>int32 mark = 5;</code>
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     *标识
     *
     * Generated from protobuf field <code>int32 mark = 5;</code>
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
     *开通数量
     *
     * Generated from protobuf field <code>int32 count = 6;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     *开通数量
     *
     * Generated from protobuf field <code>int32 count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

    /**
     *状态
     *
     * Generated from protobuf field <code>.interact.VipInfo.VipStatus status = 7;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *状态
     *
     * Generated from protobuf field <code>.interact.VipInfo.VipStatus status = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Interact\VipInfo\VipStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     *原价
     *
     * Generated from protobuf field <code>float original_price = 8;</code>
     * @return float
     */
    public function getOriginalPrice()
    {
        return $this->original_price;
    }

    /**
     *原价
     *
     * Generated from protobuf field <code>float original_price = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setOriginalPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->original_price = $var;

        return $this;
    }

}
