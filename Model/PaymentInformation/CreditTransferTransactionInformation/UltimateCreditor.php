<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * UltimateCreditor
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class UltimateCreditor
{
    /**
     * REQUIRED
     *
     * @Type("string")
     * @SerializedName("Nm")
     */
    public $name;

    /**
     * @param string $name name
     *
     * @return UltimateCreditor
     */
    public static function create($name)
    {
        $instance = new static();
        $instance->name = $name;

        return $instance;
    }

}
