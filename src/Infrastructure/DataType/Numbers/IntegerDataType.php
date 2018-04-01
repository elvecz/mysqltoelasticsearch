<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Numbers;

use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\DataType;


class IntegerDataType implements DataType
{
    const ELASTICSEARCH_TYPE = [
        'type' => 'integer'
    ];
}