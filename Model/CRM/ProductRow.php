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
     * ID
     *
     * @var int|null
     */
    private $id;

    /**
     * Owner ID
     *
     * @var int|null
     */
    private $ownerId;

    /**
     * Owner type
     *
     * @var string|null
     */
    private $ownerType;

    /**
     * Product
     *
     * @var int
     */
    private $productId;

    /**
     * Product name
     *
     * @var string|null
     */
    private $productName;

    /**
     * Price
     *
     * @var float|null
     */
    private $price;

    /**
     * Discounted price without tax
     *
     * @var float|null
     */
    private $priceExclusive;

    /**
     * PRICE_NETTO
     *
     * @var float|null
     */
    private $priceNetto;

    /**
     * PRICE_BRUTTO
     *
     * @var float|null
     */
    private $priceBrutto;

    /**
     * Quantity
     *
     * @var float|null
     */
    private $quantity;

    /**
     * Discount type
     *
     * @var int|null
     */
    private $discountTypeId;

    /**
     * Discount value
     *
     * @var float|null
     */
    private $discountRate;

    /**
     * Discount amount
     *
     * @var float|null
     */
    private $discountSum;

    /**
     * Tax
     *
     * @var float|null
     */
    private $taxRate;

    /**
     * Tax included
     *
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * Modified on
     *
     * @var bool|null
     */
    private $customized;

    /**
     * Unit of measurement code
     *
     * @var int|null
     */
    private $measureCode;

    /**
     * Unit of measurement
     *
     * @var string|null
     */
    private $measureName;

    /**
     * Sort
     *
     * @var int|null
     */
    private $sort;
}
