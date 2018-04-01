<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Numbers;
use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\DataType;


class SmallIntDataType implements DataType
{

    const ELASTICSEARCH_TYPE = [
        'type' => 'byte'
    ];


}