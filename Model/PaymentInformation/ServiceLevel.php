<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class ServiceLevel
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
     */
    public static function create($code)
    {
        $instance = new self();
        $instance->code = $code;

        return $instance;
    }
}
