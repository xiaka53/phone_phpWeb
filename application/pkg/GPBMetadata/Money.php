<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: money.proto

namespace GPBMetadata;

class Money
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
money.protointeract"A
RechangeRepuest
token (	
account (	
amount ("D
RefundMoneyRequest
token (	
account (	
amount ("0
ExecMoneyResponse
status (
msg (	2�
MoneyD
Rechange.interact.RechangeRepuest.interact.ExecMoneyResponse" J
RefundMoney.interact.RefundMoneyRequest.interact.ExecMoneyResponse" BZ./pkgbproto3'
        , true);

        static::$is_initialized = true;
    }
}

