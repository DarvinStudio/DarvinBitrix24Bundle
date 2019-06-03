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

/**
 * Lead
 */
class Lead
{
    /**
     * Название лида. Обязательное поле.
     *
     * @var string
     */
    private $title;

    /**
     * Имя контакта
     *
     * @var string
     */
    private $name;

    /**
     * Отчество контакта
     *
     * @var string
     */
    private $secondName;

    /**
     * Фамилия
     *
     * @var string
     */
    private $lastName;

    /**
     * Название компании
     *
     * @var string
     */
    private $companyTitle;

    /**
     * Идентификатор источника
     *
     * @var string
     */
    private $sourceId;

    /**
     * Дополнительно об источнике
     *
     * @var string
     */
    private $sourceDescription;

    /**
     * Идентификатор статуса лида
     *
     * @var string
     */
    private $statusId;

    /**
     * Дополнительная информация о статусе
     *
     * @var string
     */
    private $statusDescription;

    /**
     * Должность
     *
     * @var string
     */
    private $post;

    /**
     * Улица, дом, корпус, строение
     *
     * @var string
     */
    private $address;

    /**
     * Квартира, офис
     *
     * @var string
     */
    private $address2;

    /**
     * Город
     *
     * @var string
     */
    private $addressCity;

    /**
     * Почтовый индекс
     *
     * @var string
     */
    private $addressPostalCode;

    /**
     * Район
     *
     * @var string
     */
    private $addressRegion;

    /**
     * Область
     *
     * @var string
     */
    private $addressProvince;

    /**
     * Страна
     *
     * @var string
     */
    private $addressCountry;

    /**
     * Код страны
     *
     * @var string
     */
    private $addressCountryCode;

    /**
     * Идентификатор валюты
     *
     * @var string
     */
    private $currencyId;

    /**
     * Предполагаемая сумма
     *
     * @var string
     */
    private $opportunity;

    /**
     * Флаг "Доступен для всех"
     *
     * @var string
     */
    private $opened;

    /**
     * Комментарии
     *
     * @var string
     */
    private $comments;

    /**
     * Ответственный
     *
     * @var string
     */
    private $assignedById;

    /**
     * PHONE
     *
     * @var string
     */
    private $phone;

    /**
     * e-mail
     *
     * @var string
     */
    private $email;

    /**
     * веб-сайт
     *
     * @var string
     */
    private $web;

    /**
     * Контакт в службе обмена мгновенными сообщениями
     *
     * @var string
     */
    private $im;

    /**
     * Идентификатор внешней информационной базы. Назначение поля может меняться конечным разработчиком.
     *
     * @var string
     */
    private $originatorId;

    /**
     * Внешний ключ, используется для операций обмена. Идентификатор объекта внешней информационной базы. Назначение поля может меняться конечным разработчиком.
     *
     * @var string
     */
    private $originId;

    /**
     * @param string $title Название лида. Обязательное поле.
     */
    public function __construct($title)
    {
        $this->title = $title;
    }
}
