<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace Flyfinder;

/**
 * Integration test against examples/02-find-on-multiple-criteria.php
 * @coversNothing
 */
class FindOnMultipleCriteriaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string[] $result
     */
    public function testFindingFilesOnMultipleCriteria()
    {
        include(__DIR__ . '/../../examples/02-find-on-multiple-criteria.php');

        $this->assertEquals(2, count($result));
        $this->assertEquals("found.txt", $result[0]['basename']);
        $this->assertEquals("example.txt", $result[1]['basename']);
    }
}
