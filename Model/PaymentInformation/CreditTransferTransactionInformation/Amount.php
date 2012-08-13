<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;

use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;
use Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\InstructedAmount;

/**
 * Amount
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class Amount
{
    /**
     * MANDATORY
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\InstructedAmount")
     * @SerializedName("InstdAmt")
     */
    public $instructedAmount;

    /**
     * @param float $instructedAmount instructedAmount
     *
     * @return Amount
     */
    public static function create($instructedAmount)
    {
        $instance = new static();
        $instance->instructedAmount = InstructedAmount::create((float) $instructedAmount);

        return $instance;
    }
}
