<?php


namespace ElveCz\MysqlToElasticSearch\Tests;


use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Dates\DateTimeDataType;
use ElveCz\MysqlToElasticSearch\Infrastructure\DataType\Strings\VarcharDataType;
use PHPUnit\Framework\TestCase;

class DataTypeTest extends TestCase
{

    public function testDateTime()
    {
        $dateTime = new DateTimeDataType();
        $this->assertSame($dateTime::ELASTICSEARCH_TYPE, ['type' => 'date', 'format' => 'yyyy-MM-dd HH:mm:ss||yyyy-MM-dd||epoch_millis']);
    }

    public function testVarcharKeyword()
    {
        $varchar = new VarcharDataType();
        $this->assertSame($varchar::ELASTICSEARCH_TYPE['keyword'], [
            'type' => 'keyword']);
    }

    public function testVarcharNoKeyword()
    {
        $varchar = new VarcharDataType();
        $this->assertSame($varchar::ELASTICSEARCH_TYPE['string'], [
            'type' => 'text']);
    }

}