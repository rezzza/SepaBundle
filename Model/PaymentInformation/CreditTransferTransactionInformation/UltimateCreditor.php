<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;

use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

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
