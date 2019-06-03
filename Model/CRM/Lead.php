<?php
/**
 * @author    Igor Nikolaev <igor.sv.n@gmail.com>
 * @copyright Copyright (c) 2019, Darvin Studio
 * @link      https://www.darvin-studio.ru
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Darvin\Bitrix24Bundle\Model\CRM;

use Darvin\Bitrix24Bundle\Model\AbstractModel;

/**
 * Lead
 */
class Lead extends AbstractModel
{
    /**
     * Название лида. Обязательное поле.
     *
     * @var string
     */
    protected $title;

    /**
     * Имя контакта
     *
     * @var string
     */
    protected $name;

    /**
     * Отчество контакта
     *
     * @var string
     */
    protected $secondName;

    /**
     * Фамилия
     *
     * @var string
     */
    protected $lastName;

    /**
     * Название компании
     *
     * @var string
     */
    protected $companyTitle;

    /**
     * Идентификатор источника
     *
     * @var string
     */
    protected $sourceId;

    /**
     * Дополнительно об источнике
     *
     * @var string
     */
    protected $sourceDescription;

    /**
     * Идентификатор статуса лида
     *
     * @var string
     */
    protected $statusId;

    /**
     * Дополнительная информация о статусе
     *
     * @var string
     */
    protected $statusDescription;

    /**
     * Должность
     *
     * @var string
     */
    protected $post;

    /**
     * Улица, дом, корпус, строение
     *
     * @var string
     */
    protected $address;

    /**
     * Квартира, офис
     *
     * @var string
     */
    protected $address2;

    /**
     * Город
     *
     * @var string
     */
    protected $addressCity;

    /**
     * Почтовый индекс
     *
     * @var string
     */
    protected $addressPostalCode;

    /**
     * Район
     *
     * @var string
     */
    protected $addressRegion;

    /**
     * Область
     *
     * @var string
     */
    protected $addressProvince;

    /**
     * Страна
     *
     * @var string
     */
    protected $addressCountry;

    /**
     * Код страны
     *
     * @var string
     */
    protected $addressCountryCode;

    /**
     * Идентификатор валюты
     *
     * @var string
     */
    protected $currencyId;

    /**
     * Предполагаемая сумма
     *
     * @var string
     */
    protected $opportunity;

    /**
     * Флаг "Доступен для всех"
     *
     * @var bool
     */
    protected $opened;

    /**
     * Комментарии
     *
     * @var string
     */
    protected $comments;

    /**
     * Ответственный
     *
     * @var string
     */
    protected $assignedById;

    /**
     * PHONE
     *
     * @var string
     */
    protected $phone;

    /**
     * e-mail
     *
     * @var string
     */
    protected $email;

    /**
     * веб-сайт
     *
     * @var string
     */
    protected $web;

    /**
     * Контакт в службе обмена мгновенными сообщениями
     *
     * @var string
     */
    protected $im;

    /**
     * Идентификатор внешней информационной базы. Назначение поля может меняться конечным разработчиком.
     *
     * @var string
     */
    protected $originatorId;

    /**
     * Внешний ключ, используется для операций обмена. Идентификатор объекта внешней информационной базы. Назначение поля может меняться конечным разработчиком.
     *
     * @var string
     */
    protected $originId;

    /**
     * @param string $title Название лида. Обязательное поле.
     */
    public function __construct($title)
    {
        $this->title = $title;
    }
}
