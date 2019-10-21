<?php declare(strict_types=1);
/**
 * @author    Alexander Volodin <mr-stanlik@yandex.ru>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\UTM\Model;

/**
 * Urchin Tracking Module
 */
class UTM
{
    /**
     * Обозначение рекламной кампании UTM_CAMPAIGN
     *
     * @var string|null
     */
    private $campaign;

    /**
     * Содержание кампании UTM_CONTENT
     *
     * @var string|null
     */
    private $content;

    /**
     * Тип трафика UTM_MEDIUM
     *
     * @var string|null
     */
    private $medium;

    /**
     * Рекламная система UTM_SOURCE
     *
     * @var string|null
     */
    private $source;

    /**
     * Условие поиска кампании UTM_TERM
     *
     * @var string|null
     */
    private $term;

    /**
     * @return string|null
     */
    public function getCampaign(): ?string
    {
        return $this->campaign;
    }

    /**
     * @param string|null $campaign
     *
     * @return UTM
     */
    public function setCampaign(?string $campaign): UTM
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     *
     * @return UTM
     */
    public function setContent(?string $content): UTM
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMedium(): ?string
    {
        return $this->medium;
    }

    /**
     * @param string|null $medium
     *
     * @return UTM
     */
    public function setMedium(?string $medium): UTM
    {
        $this->medium = $medium;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     *
     * @return UTM
     */
    public function setSource(?string $source): UTM
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTerm(): ?string
    {
        return $this->term;
    }

    /**
     * @param string|null $term
     *
     * @return UTM
     */
    public function setTerm(?string $term): UTM
    {
        $this->term = $term;

        return $this;
    }
}
