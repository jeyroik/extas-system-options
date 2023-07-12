<?php
use extas\components\systems\options\SystemOption;
use extas\components\systems\System;
use tests\ExtasTestCase;

class SystemTest extends ExtasTestCase
{
    protected array $libsToInstall = [
        '' => ['php', 'php']
        //'vendor/lib' => ['php', 'json'] storage ext, extas ext
    ];
    protected bool $isNeedInstallLibsItems = false;
    protected string $testPath = __DIR__;

    public function testBasics(): void
    {
        $system = new System();

        $system->systemOptions()->create(new SystemOption([
            SystemOption::FIELD__NAME => 'test',
            SystemOption::FIELD__VALUE => 'ok'
        ]));
        $system->systemOptions()->create(new SystemOption([
            SystemOption::FIELD__NAME => 'test-1',
            SystemOption::FIELD__VALUE => 'ok-1'
        ]));

        $this->assertTrue($system->hasOption('test'));
        $this->assertEquals('ok', $system->getOptionValue('test'));

        // check cache
        $this->assertTrue($system->hasOption('test'));

        $this->assertFalse($system->hasOption('test-0'));

        $this->assertEquals('ok-1', $system->getOptionValue('test-1'));

        $this->assertNull($system->getOptionValue('test-0'));
    }
}
