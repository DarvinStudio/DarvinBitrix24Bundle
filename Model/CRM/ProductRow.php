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
    private $id;
    private $ownerId;
    private $ownerType;
    private $productId;
    private $productName;
    private $price;
    private $priceExclusive;
    private $priceNetto;
    private $priceBrutto;
    private $quantity;
    private $discountTypeId;
    private $discountRate;
    private $discountSum;
    private $taxRate;
    private $taxIncluded;
    private $customized;
    private $measureCode;
    private $measureName;
    private $sort;
}

