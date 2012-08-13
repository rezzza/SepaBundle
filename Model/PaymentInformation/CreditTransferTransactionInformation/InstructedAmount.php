<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;


use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;
use JMS\SerializerBundle\Annotation\XmlAttribute;
use JMS\SerializerBundle\Annotation\XmlValue;

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
