<?php
/**
 * @author    Alexander Volodin <mr-stanlik@yandex.ru>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\UTM;

use Darvin\Bitrix24Bundle\UTM\Model\UTM;

/**
 * UTM manager
 */
interface UTMManagerInterface
{
    /**
     * @return \Darvin\Bitrix24Bundle\UTM\Model\UTM|null
     */
    public function getUTM();

    /**
     * @param \Darvin\Bitrix24Bundle\UTM\Model\UTM $utm UTM
     */
    public function setUTM(UTM $utm);

    /**
     * @return bool
     */
    public function hasUTM();
}
