<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation;

use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

/**
 * PaymentTypeInformation
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class PaymentTypeInformation
{
    /**
     * REQUIRED
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\ServiceLevel")
     * @SerializedName("SvcLvl")
     */
    public $serviceLevel;

    /**
     * @param string $code code
     *
     * @return PaymentInformation
     */
    public static function create($code = null)
    {
        $instance = new static();

        if ($code) {
            $instance->serviceLevel = ServiceLevel::create($code);
        }

        return $instance;
    }
}
