<?php


namespace ElveCz\MysqlToElasticSearch\Tests;


use ElveCz\MysqlToElasticSearch\Infrastructure\Commands\MakeMappingCommand;
use PHPUnit\Framework\TestCase;

class MakeMappingCommandExecuteTest extends TestCase
{
    public function testExecute()
    {

        $command = new MakeMappingCommand();
        $this->assertInstanceOf(MakeMappingCommand::class, $command);


    }
}