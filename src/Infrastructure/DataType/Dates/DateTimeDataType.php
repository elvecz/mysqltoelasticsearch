<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Dates;


use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\DataType;

/**
 * Class DateTimeDataType
 * @package ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Dates
 * @method array getElasticSearchType(){return self::ELASTICSEARCH_TYPE}
 */
class DateTimeDataType implements DataType
{
    const ELASTICSEARCH_TYPE = [
        'type' => 'date',
        'format' => 'yyyy-MM-dd HH:mm:ss||yyyy-MM-dd||epoch_millis'
    ];
}