<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\Debtors;

use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

/**
 * FinancialInstitutionIdentification
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class FinancialInstitutionIdentification
{
    /**
     * MANDATORY
     *
     * @Type("string")
     * @SerializedName("BIC")
     */
    public $bic;

    /**
     * @param string $bic bic
     *
     * @return FinancialInstitutionIdentification
     */
    public static function create($bic = null)
    {
        $instance = new static();
        $instance->bic = $bic;

        return $instance;
    }
}
