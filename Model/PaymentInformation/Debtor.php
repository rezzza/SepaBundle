<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation;

use Rezzza\SepaBundle\Model\PaymentInformation\Debtors\Identification;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Debtor
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class Debtor
{
    /**
     * MANDATORY
     *
     * @Type("string")
     * @SerializedName("Nm")
     */
    public $name;

    /**
     * OPTIONAL
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\Debtors\Identification")
     * @SerializedName("Id")
     */
    public $identification;

    /**
     * @param string  $name                    name
     * @param integer $bankPartyIdentification bankPartyIdentification
     *
     * @return Debtor
     */
    public static function create($name = null, $bankPartyIdentification = null)
    {
        $instance = new static();

        $instance->name = $name;
        $instance->identification = Identification::create(null, $bankPartyIdentification);

        return $instance;
    }
}
