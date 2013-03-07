<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation;

use Rezzza\SepaBundle\Model\PaymentInformation\Debtors\FinancialInstitutionIdentification;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * DebtorAgent
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class DebtorAgent
{
    /**
     * MANDATORY
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\Debtors\FinancialInstitutionIdentification")
     * @SerializedName("FinInstnId")
     */
    public $financialInstitutionIdentification;

    /**
     * @param string $bic bic
     *
     * @return DebtorAgent
     */
    public static function create($bic = null)
    {
        $instance = new static();
        $instance->financialInstitutionIdentification = FinancialInstitutionIdentification::create($bic);

        return $instance;
    }
}
