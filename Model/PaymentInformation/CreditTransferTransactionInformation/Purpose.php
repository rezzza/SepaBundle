<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Purpose
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class Purpose
{
    /**
     * MANDATORY
     *
     * @Type("string")
     * @SerializedName("Cd")
     */
    public $code;

    /**
     * @param string $code code
     *
     * @return Purpose
     */
    public static function create($code)
    {
        $instance = new static();
        $instance->code = $code;

        return $instance;
    }

}
