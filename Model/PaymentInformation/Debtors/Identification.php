<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\Debtors;

use Rezzza\SepaBundle\Model\PaymentInformation\Debtors\OrganisationIdentification;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Identification
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class Identification
{
    /**
     * MANDATORY (depend on parent)
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\Debtors\OrganisationIdentification")
     * @SerializedName("OrgId")
     */
    public $organisationIdentification;

    /**
     * MANDATORY (depend on parent)
     *
     * @Type("string")
     * @SerializedName("IBAN")
     */
    public $iban;

    /**
     * @param string  $iban                    iban
     * @param integer $bankPartyIdentification bankPartyIdentification
     *
     * @return Identification
     */
    public static function create($iban = null, $bankPartyIdentification = null)
    {
        $instance = new static();

        if (null !== $iban) {
            $instance->iban = $iban;
        }

        if (null !== $bankPartyIdentification) {
            $instance->organisationIdentification = OrganisationIdentification::create($bankPartyIdentification);
        }

        return $instance;
    }
}
