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

use Darvin\Bitrix24Bundle\Model\UTM;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Bitrix24 lead factory
 */
class UTMManager
{
    /**
     * @var \Symfony\Component\HttpFoundation\Session\Session
     */
    protected $session;

    /**
     * @var string
     */
    protected static $KEY = 'utm';

    /**
     * @param \Symfony\Component\HttpFoundation\Session\Session $session Session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * @return UTM|null
     */
    public function get()
    {
        return $this->session->get(self::$KEY);
    }

    /**
     * @param UTM $utm UTM
     */
    public function set(UTM $utm)
    {
        $this->session->set(self::$KEY, $utm);
    }

    /**
     * @return bool
     */
    public function has()
    {
        return $this->session->has(self::$KEY);
    }
}
