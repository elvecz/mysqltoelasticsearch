<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType;


interface DataType
{
    public function getElasticSearchType(): array;
}