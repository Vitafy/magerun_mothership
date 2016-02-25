<?php
/**
 * This file is part of the Mothership GmbH code.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Mothership\Magerun\Base\Command\Reports;

use Mothership\Magerun\Base\Command\Reports\MagentoPatch1_9_2_3;
/**
 * Class AbstractMagentoPatchFactory
 *
 * @category   Mothership
 * @package    Mothership_Reports
 * @author     Maurizio Brioschi <brioschi@mothership.de>
 * @copyright  2016 Mothership Gmbh
 * @link       http://www.mothership.de/
 */
class AbstractMagentoPatchFactory
{
    protected $magentoVersion;

    /**
     * AbstractMagentoPatchFactory constructor.
     *
     * @param $magentoV
     */
    public function __construct($magentoV)
    {
        $this->magentoVersion = $magentoV;
    }

    /**
     * Get the class for the patch, in base of the Magento version
     *
     * @return Mothership\Magerun\Base\Command\Reports\PatchInterface
     *
     * @throws \Exception
     */
    public function getMagentoPatchClass()
    {
        switch ($this->magentoVersion) {
            case "1.9.2.2":
                return new MagentoPatch1922();
            case "1.9.2.3":
                return new MagentoPatch1923();
        }

        throw new \Exception("The patch for your Magento version is implemented yet");
    }
}