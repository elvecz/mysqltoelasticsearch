<?php


namespace ElveCz\MysqlToElasticSearch\Tests;

use ElveCz\MysqlToElasticSearch\Infrastructure\Commands\MakeMappingCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;

class MakeMappingCommandConfigurationTest extends TestCase
{
    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }

    public function testIsTypeOfSymfonyCommand()
    {
        $command = new MakeMappingCommand();
        $this->assertInstanceOf(Command::class, $command);
    }

    public function testHasCommandConfiguredName()
    {
        $command = new MakeMappingCommand();
        $this->assertSame($command->getName(), 'make:elasticsearch:mapping');
    }


}