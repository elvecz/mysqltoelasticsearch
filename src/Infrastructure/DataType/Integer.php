<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType;


class Integer implements DataType
{

    const ELASTICSEARCH_TYPE = [
        'type' => 'integer'
    ];

    public function getElasticSearchType(): array
    {
        return self::ELASTICSEARCH_TYPE;
    }
}