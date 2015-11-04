<?php
namespace TYPO3\Flow\Tests\Unit\Cli\Fixtures\Command;

/*
 * This file is part of the TYPO3.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

/**
 * A mock CLI Command
 */
class MockACommandController extends \TYPO3\Flow\Cli\Command
{
    public function fooCommand()
    {
    }

    public function barCommand($someArgument)
    {
    }
}

/**
 * Another mock CLI Command
 */
class MockBCommandController extends \TYPO3\Flow\Cli\Command
{
    public function bazCommand()
    {
    }
}
