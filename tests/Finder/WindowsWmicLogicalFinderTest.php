<?php

/*
 * This file is part of the Fidry CPUCounter Config package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Fidry\CpuCoreCounter\Test\Finder;

use Fidry\CpuCoreCounter\Finder\ProcOpenBasedFinder;
use Fidry\CpuCoreCounter\Finder\WindowsWmicLogicalFinder;

/**
 * @covers \Fidry\CpuCoreCounter\Finder\WindowsWmicLogicalFinder
 *
 * @internal
 */
final class WindowsWmicLogicalFinderTest extends ProcOpenBasedFinderTestCase
{
    public function test_it_can_describe_itself(): void
    {
        self::assertSame('WindowsWmicLogicalFinder', $this->getFinder()->toString());
    }

    protected function getFinder(): ProcOpenBasedFinder
    {
        return new WindowsWmicLogicalFinder();
    }
}
