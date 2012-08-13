<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\Debtors;

use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

/**
 * OrganisationIdentification
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class OrganisationIdentification
{
    /**
     * @Type("integer")
     * @SerializedName("BkPtyId")
     */
    public $bankPartyIdentification;

    /**
     * @param integer $bankPartyIdentification bankPartyIdentification
     *
     * @return OrganisationIdentification
     */
    public static function create($bankPartyIdentification)
    {
        $this->bankPartyIdentification = $bankPartyIdentification;
    }
}
