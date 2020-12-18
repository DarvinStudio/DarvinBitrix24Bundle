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
     * @var int
     */
    private $productId;

    /**
     * @var string
     */
    private $price;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @param int    $productId Product ID
     * @param string $price     Price
     * @param int    $quantity  Quantity
     */
    public function __construct(int $productId, string $price, int $quantity)
    {
        $this->productId = $productId;
        $this->price = $price;
        $this->quantity = $quantity;
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
     * @param string $price price
     *
     * @return ProductRow
     */
    public function setPrice(string $price): ProductRow
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param int $quantity quantity
     *
     * @return ProductRow
     */
    public function setQuantity(int $quantity): ProductRow
    {
        $this->quantity = $quantity;

        return $this;
    }
}

