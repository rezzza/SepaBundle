<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Creditor
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class Creditor
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
     * @return Creditor
     */
    public static function create($name)
    {
        $instance = new static();
        $instance->name = $name;

        return $instance;
    }
}
