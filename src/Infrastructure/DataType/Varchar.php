<?php


namespace ElveCz\MysqlToElasticSearch\Infrastructure\DataType;


class Varchar implements DataType
{
    const ELASTICSEARCH_TYPE_NO_KEYWORD = [
        'type' => 'text'
    ];

    const ELASTICSEARCH_TYPE_KEYWORD = [
        'type' => 'keyword'
    ];

    private $keyword = false;

    public function getElasticSearchType(): array
    {
        return $this->keyword ? self::ELASTICSEARCH_TYPE_KEYWORD : self::ELASTICSEARCH_TYPE_NO_KEYWORD;
    }

    /**
     * @param bool $keyword
     */
    public function setKeyword(bool $keyword): void
    {
        $this->keyword = $keyword;
    }


}