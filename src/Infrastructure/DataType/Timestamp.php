<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType;


class Timestamp implements DataType
{
    const ELASTICSEARCH_TYPE = [
        'type' => 'date',
        'format' => 'yyyy-MM-dd HH:mm:ss||yyyy-MM-dd||epoch_millis'
    ];

    public function getElasticSearchType(): array
    {
        return self::ELASTICSEARCH_TYPE;
    }

}