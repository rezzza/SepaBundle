<?php

namespace Rezzza\SepaBundle\Model;

use JMS\SerializerBundle\Annotation\XmlList;
use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

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
     * @Type("GroupHeader")
     * @SerializedName("GrpHdr")
     */
    public $groupHeader;

    /**
     * MANDATORY
     *
     * @XmlList(inline=true, entry= "PmtInf")
     * @Type("ArrayCollection<PaymentInformation>")
     */
    public $paymentInformations;
}
