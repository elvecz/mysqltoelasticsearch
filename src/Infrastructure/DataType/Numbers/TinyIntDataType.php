<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Numbers;

use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\DataType;

/**
 * Class TinyIntDataType
 * @package ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Numbers
 * @method array getElasticSearchType(){return self::ELASTICSEARCH_TYPE}
 */
class TinyIntDataType implements DataType
{
    const ELASTICSEARCH_TYPE = [
        'type' => 'boolean'
    ];

}