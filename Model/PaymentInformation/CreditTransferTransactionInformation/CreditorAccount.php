<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;

use Rezzza\SepaBundle\Model\PaymentInformation\Debtors\Identification;
use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

/**
 * CreditorAccount
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class CreditorAccount
{
    /**
     * MANDATORY
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\Debtors\Identification")
     * @SerializedName("Id")
     */
    public $identification;

    /**
     * @param string $iban iban
     *
     * @return CreditorAccount
     */
    public static function create($iban = null)
    {
        $instance = new static();
        $instance->identification = Identification::create($iban);

        return $instance;
    }

}
