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
    protected $id;

    /**
     * Owner ID
     *
     * @var int|null
     */
    protected $ownerId;

    /**
     * Owner type
     *
     * @var string|null
     */
    protected $ownerType;

    /**
     * Product
     *
     * @var int
     */
    protected $productId;

    /**
     * Product name
     *
     * @var string|null
     */
    protected $productName;

    /**
     * Price
     *
     * @var float|null
     */
    protected $price;

    /**
     * Discounted price without tax
     *
     * @var float|null
     */
    protected $priceExclusive;

    /**
     * PRICE_NETTO
     *
     * @var float|null
     */
    protected $priceNetto;

    /**
     * PRICE_BRUTTO
     *
     * @var float|null
     */
    protected $priceBrutto;

    /**
     * Quantity
     *
     * @var float|null
     */
    protected $quantity;

    /**
     * Discount type
     *
     * @var int|null
     */
    protected $discountTypeId;

    /**
     * Discount value
     *
     * @var float|null
     */
    protected $discountRate;

    /**
     * Discount amount
     *
     * @var float|null
     */
    protected $discountSum;

    /**
     * Tax
     *
     * @var float|null
     */
    protected $taxRate;

    /**
     * Tax included
     *
     * @var bool|null
     */
    protected $taxIncluded;

    /**
     * Modified on
     *
     * @var bool|null
     */
    protected $customized;

    /**
     * Unit of measurement code
     *
     * @var int|null
     */
    protected $measureCode;

    /**
     * Unit of measurement
     *
     * @var string|null
     */
    protected $measureName;

    /**
     * Sort
     *
     * @var int|null
     */
    protected $sort;

    /**
     * @param int $productId Product
     */
    public function __construct(int $productId)
    {
        $this->productId = $productId;
    }

    /**
     * @param int|null $id id
     *
     * @return ProductRow
     */
    public function setId(?int $id): ProductRow
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param int|null $ownerId ownerId
     *
     * @return ProductRow
     */
    public function setOwnerId(?int $ownerId): ProductRow
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * @param string|null $ownerType ownerType
     *
     * @return ProductRow
     */
    public function setOwnerType(?string $ownerType): ProductRow
    {
        $this->ownerType = $ownerType;

        return $this;
    }

    /**
     * @param int $productId productId
     *
     * @return ProductRow
     */
    public function setProductId(int $productId): ProductRow
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param string|null $productName productName
     *
     * @return ProductRow
     */
    public function setProductName(?string $productName): ProductRow
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * @param float|null $price price
     *
     * @return ProductRow
     */
    public function setPrice(?float $price): ProductRow
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param float|null $priceExclusive priceExclusive
     *
     * @return ProductRow
     */
    public function setPriceExclusive(?float $priceExclusive): ProductRow
    {
        $this->priceExclusive = $priceExclusive;

        return $this;
    }

    /**
     * @param float|null $priceNetto priceNetto
     *
     * @return ProductRow
     */
    public function setPriceNetto(?float $priceNetto): ProductRow
    {
        $this->priceNetto = $priceNetto;

        return $this;
    }

    /**
     * @param float|null $priceBrutto priceBrutto
     *
     * @return ProductRow
     */
    public function setPriceBrutto(?float $priceBrutto): ProductRow
    {
        $this->priceBrutto = $priceBrutto;

        return $this;
    }

    /**
     * @param float|null $quantity quantity
     *
     * @return ProductRow
     */
    public function setQuantity(?float $quantity): ProductRow
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param int|null $discountTypeId discountTypeId
     *
     * @return ProductRow
     */
    public function setDiscountTypeId(?int $discountTypeId): ProductRow
    {
        $this->discountTypeId = $discountTypeId;

        return $this;
    }

    /**
     * @param float|null $discountRate discountRate
     *
     * @return ProductRow
     */
    public function setDiscountRate(?float $discountRate): ProductRow
    {
        $this->discountRate = $discountRate;

        return $this;
    }

    /**
     * @param float|null $discountSum discountSum
     *
     * @return ProductRow
     */
    public function setDiscountSum(?float $discountSum): ProductRow
    {
        $this->discountSum = $discountSum;

        return $this;
    }

    /**
     * @param float|null $taxRate taxRate
     *
     * @return ProductRow
     */
    public function setTaxRate(?float $taxRate): ProductRow
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @param bool|null $taxIncluded taxIncluded
     *
     * @return ProductRow
     */
    public function setTaxIncluded(?bool $taxIncluded): ProductRow
    {
        $this->taxIncluded = $taxIncluded;

        return $this;
    }

    /**
     * @param bool|null $customized customized
     *
     * @return ProductRow
     */
    public function setCustomized(?bool $customized): ProductRow
    {
        $this->customized = $customized;

        return $this;
    }

    /**
     * @param int|null $measureCode measureCode
     *
     * @return ProductRow
     */
    public function setMeasureCode(?int $measureCode): ProductRow
    {
        $this->measureCode = $measureCode;

        return $this;
    }

    /**
     * @param string|null $measureName measureName
     *
     * @return ProductRow
     */
    public function setMeasureName(?string $measureName): ProductRow
    {
        $this->measureName = $measureName;

        return $this;
    }

    /**
     * @param int|null $sort sort
     *
     * @return ProductRow
     */
    public function setSort(?int $sort): ProductRow
    {
        $this->sort = $sort;

        return $this;
    }
}
