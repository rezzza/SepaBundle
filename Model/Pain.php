<?php

namespace Rezzza\SepaBundle\Model;

use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Pain
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class Pain
{
    /**
     * MANDATORY
     *
     * @Type("Rezzza\SepaBundle\Model\GroupHeader")
     * @SerializedName("GrpHdr")
     */
    public $groupHeader;

    /**
     * MANDATORY
     *
     * @XmlList(inline=true, entry= "PmtInf")
     * @Type("array<Rezzza\SepaBundle\Model\PaymentInformation>")
     */
    public $paymentInformations;
}
