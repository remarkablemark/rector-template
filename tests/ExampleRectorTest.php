<?php

declare(strict_types=1);

namespace Remarkablemark\Tests\RectorExample;

use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class ExampleRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData
     */
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    public static function provideData(): Iterator
    {
        return self::yieldFilesFromDirectory(__DIR__ . '/fixture');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/rector-config.php';
    }
}
