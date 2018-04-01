<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Strings;


use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\DataType;

class VarcharDataType implements DataType
{
    const ELASTICSEARCH_TYPE = [
        'string' => [
            'type' => 'text'],
        'keyword' => [
            'type' => 'keyword']
    ];


}