<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Other;


use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\DataType;

class BooleanDataType implements DataType
{
    const ELASTICSEARCH_TYPE = [
        'type' => 'boolean'
    ];

}