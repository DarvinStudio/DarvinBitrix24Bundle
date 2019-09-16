<?php
/**
 * @author    Alexander Volodin <mr-stanlik@yandex.ru>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Model;

/**
 * Urchin Tracking Module
 */
class UTM
{
    /**
     * Обозначение рекламной кампании UTM_CAMPAIGN
     *
     * @var string
     */
    protected $campaign;

    /**
     * Содержание кампании UTM_CONTENT
     *
     * @var string
     */
    protected $content;

    /**
     * Тип трафика UTM_MEDIUM
     *
     * @var string
     */
    protected $medium;

    /**
     * Рекламная система UTM_SOURCE
     *
     * @var string
     */
    protected $source;

    /**
     * Условие поиска кампании UTM_TERM
     *
     * @var string
     */
    protected $term;

    /**
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * @param string $campaign
     *
     * @return UTM
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return UTM
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param string $medium
     *
     * @return UTM
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return UTM
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $term
     *
     * @return UTM
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }
}
