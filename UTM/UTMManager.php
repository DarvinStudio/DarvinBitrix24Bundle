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
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * UTM manager
 */
class UTMManager implements UTMManagerInterface
{
    const SESSION_KEY = 'darvin.bitrix24.utm';

    /**
     * @var \Symfony\Component\HttpFoundation\Session\SessionInterface
     */
    private $session;

    /**
     * @param \Symfony\Component\HttpFoundation\Session\SessionInterface $session Session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * {@inheritDoc}
     */
    public function getUTM()
    {
        return $this->session->get(self::SESSION_KEY);
    }

    /**
     * {@inheritDoc}
     */
    public function setUTM(UTM $utm)
    {
        $this->session->set(self::SESSION_KEY, $utm);
    }

    /**
     * {@inheritDoc}
     */
    public function hasUTM()
    {
        return $this->session->has(self::SESSION_KEY);
    }
}
