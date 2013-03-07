<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation;

use Rezzza\SepaBundle\Model\PaymentInformation\Debtors\Identification;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * DebtorAccount
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class DebtorAccount
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
     * @return DebtorAccount
     */
    public static function create($iban = null)
    {
        $instance = new static();
        $instance->identification = Identification::create($iban);

        return $instance;
    }
}
