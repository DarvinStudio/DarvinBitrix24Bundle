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
use Darvin\Bitrix24Bundle\Model\Contact;

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
     * @var \Darvin\Bitrix24Bundle\Model\Contact[]
     */
    protected $phone;

    /**
     * e-mail
     *
     * @var \Darvin\Bitrix24Bundle\Model\Contact[]
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

        $this->phone = $this->email = [];
    }

    /**
     * @param string $title title
     *
     * @return Lead
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $name name
     *
     * @return Lead
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $secondName secondName
     *
     * @return Lead
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * @param string $lastName lastName
     *
     * @return Lead
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string $companyTitle companyTitle
     *
     * @return Lead
     */
    public function setCompanyTitle($companyTitle)
    {
        $this->companyTitle = $companyTitle;

        return $this;
    }

    /**
     * @param string $sourceId sourceId
     *
     * @return Lead
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;

        return $this;
    }

    /**
     * @param string $sourceDescription sourceDescription
     *
     * @return Lead
     */
    public function setSourceDescription($sourceDescription)
    {
        $this->sourceDescription = $sourceDescription;

        return $this;
    }

    /**
     * @param string $statusId statusId
     *
     * @return Lead
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * @param string $statusDescription statusDescription
     *
     * @return Lead
     */
    public function setStatusDescription($statusDescription)
    {
        $this->statusDescription = $statusDescription;

        return $this;
    }

    /**
     * @param string $post post
     *
     * @return Lead
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * @param string $address address
     *
     * @return Lead
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param string $address2 address2
     *
     * @return Lead
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * @param string $addressCity addressCity
     *
     * @return Lead
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;

        return $this;
    }

    /**
     * @param string $addressPostalCode addressPostalCode
     *
     * @return Lead
     */
    public function setAddressPostalCode($addressPostalCode)
    {
        $this->addressPostalCode = $addressPostalCode;

        return $this;
    }

    /**
     * @param string $addressRegion addressRegion
     *
     * @return Lead
     */
    public function setAddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;

        return $this;
    }

    /**
     * @param string $addressProvince addressProvince
     *
     * @return Lead
     */
    public function setAddressProvince($addressProvince)
    {
        $this->addressProvince = $addressProvince;

        return $this;
    }

    /**
     * @param string $addressCountry addressCountry
     *
     * @return Lead
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;

        return $this;
    }

    /**
     * @param string $addressCountryCode addressCountryCode
     *
     * @return Lead
     */
    public function setAddressCountryCode($addressCountryCode)
    {
        $this->addressCountryCode = $addressCountryCode;

        return $this;
    }

    /**
     * @param string $currencyId currencyId
     *
     * @return Lead
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * @param string $opportunity opportunity
     *
     * @return Lead
     */
    public function setOpportunity($opportunity)
    {
        $this->opportunity = $opportunity;

        return $this;
    }

    /**
     * @param bool $opened opened
     *
     * @return Lead
     */
    public function setOpened($opened)
    {
        $this->opened = $opened;

        return $this;
    }

    /**
     * @param string $comments comments
     *
     * @return Lead
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * @param string $assignedById assignedById
     *
     * @return Lead
     */
    public function setAssignedById($assignedById)
    {
        $this->assignedById = $assignedById;

        return $this;
    }

    /**
     * @param \Darvin\Bitrix24Bundle\Model\Contact[] $phone phone
     *
     * @return Lead
     */
    public function setPhone(array $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param \Darvin\Bitrix24Bundle\Model\Contact $phone phone
     *
     * @return Lead
     */
    public function addPhone(Contact $phone)
    {
        $this->phone[] = $phone;

        return $this;
    }

    /**
     * @param \Darvin\Bitrix24Bundle\Model\Contact[] $email email
     *
     * @return Lead
     */
    public function setEmail(array $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param \Darvin\Bitrix24Bundle\Model\Contact $email email
     *
     * @return Lead
     */
    public function addEmail(Contact $email)
    {
        $this->email[] = $email;

        return $this;
    }

    /**
     * @param string $web web
     *
     * @return Lead
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * @param string $im im
     *
     * @return Lead
     */
    public function setIm($im)
    {
        $this->im = $im;

        return $this;
    }

    /**
     * @param string $originatorId originatorId
     *
     * @return Lead
     */
    public function setOriginatorId($originatorId)
    {
        $this->originatorId = $originatorId;

        return $this;
    }

    /**
     * @param string $originId originId
     *
     * @return Lead
     */
    public function setOriginId($originId)
    {
        $this->originId = $originId;

        return $this;
    }
}
