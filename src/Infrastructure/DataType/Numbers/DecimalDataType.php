<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Numbers;


use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\DataType;

class DecimalDataType implements DataType
{
    const ELASTICSEARCH_TYPE = [
        'type' => 'float'
    ];
}