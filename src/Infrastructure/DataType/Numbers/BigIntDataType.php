<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Numbers;


use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\DataType;

class BigIntDataType implements DataType
{
    const ELASTICSEARCH_TYPE = [
        'type' => 'long'
    ];
}