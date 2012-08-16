<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;

use Rezzza\SepaBundle\Model\PaymentInformation\Debtors\FinancialInstitutionIdentification;
use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

/**
 * CreditorAgent
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class CreditorAgent
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
     * @return CreditorAgent
     */
    public static function create($bic)
    {
        $instance = new static();
        $instance->financialInstitutionIdentification = FinancialInstitutionIdentification::create($bic);

        return $instance;
    }
}
