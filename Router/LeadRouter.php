<?php declare(strict_types=1);
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2021, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Router;

/**
 * Lead router
 */
class LeadRouter implements LeadRouterInterface
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @param string $domain Domain
     */
    public function __construct(string $domain)
    {
        $this->domain = $domain;
    }

    /**
     * {@inheritDoc}
     */
    public function generateShowUrl(string $id): string
    {
        return sprintf('https://%s/crm/lead/show/%s/', $this->domain, $id);
    }
}
