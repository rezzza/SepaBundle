<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;


use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlValue;

/**
 * InstructedAmount
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class InstructedAmount
{
    /**
     * @XmlValue
     */
    public $amount;

    /**
     * @XmlAttribute
     * @SerializedName("Ccy")
     */
    public $currency;

    /**
     * @param float $amount   amount
     * @param string $currency currency
     *
     * @return InstructedAmount
     */
    public static function create($amount, $currency = 'EUR')
    {
        $instance = new static();
        $instance->amount = $amount;
        $instance->currency = $currency;

        return $instance;
    }
}
