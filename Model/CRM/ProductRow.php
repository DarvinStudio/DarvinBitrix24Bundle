<?php declare(strict_types=1);
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2020, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Model\CRM;

use Darvin\Bitrix24Bundle\Model\AbstractModel;

/**
 * Product row
 */
class ProductRow extends AbstractModel
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $ownerId;

    /**
     * @var string|null
     */
    private $ownerType;

    /**
     * @var int
     */
    private $productId;

    /**
     * @var string|null
     */
    private $productName;

    /**
     * @var float|null
     */
    private $price;

    /**
     * @var float|null
     */
    private $priceExclusive;

    /**
     * @var float|null
     */
    private $priceNetto;

    /**
     * @var float|null
     */
    private $priceBrutto;

    /**
     * @var float|null
     */
    private $quantity;

    /**
     * @var int|null
     */
    private $discountTypeId;

    /**
     * @var float|null
     */
    private $discountRate;

    /**
     * @var float|null
     */
    private $discountSum;

    /**
     * @var float|null
     */
    private $taxRate;

    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * @var bool|null
     */
    private $customized;

    /**
     * @var int|null
     */
    private $measureCode;

    /**
     * @var string|null
     */
    private $measureName;

    /**
     * @var int|null
     */
    private $sort;
}
