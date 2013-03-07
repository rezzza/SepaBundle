<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * PaymentIdentification
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class PaymentIdentification
{
    /**
     * OPTIONAL
     *
     * @Type("string")
     * @SerializedName("InstrId")
     */
    public $instructionIdentification;

    /**
     * MANDATORY
     *
     * @Type("string")
     * @SerializedName("EndToEndId")
     */
    public $endToEndIdentification;

    /**
     * @param string $endToEndIdentification    endToEndIdentification
     * @param string $instructionIdentification instructionIdentification
     *
     * @return PaymentIdentification
     */
    public static function create($endToEndIdentification, $instructionIdentification = null)
    {
        $instance = new static();
        $instance->endToEndIdentification    = $endToEndIdentification;
        $instance->instructionIdentification = $instructionIdentification;

        return $instance;
    }
}
