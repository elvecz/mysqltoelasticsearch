<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Dates;

use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\DataType;


class TimestampDataType implements DataType
{
    const ELASTICSEARCH_TYPE = [
        'type' => 'date',
        'format' => 'yyyy-MM-dd HH:mm:ss||yyyy-MM-dd||epoch_millis'
    ];

}