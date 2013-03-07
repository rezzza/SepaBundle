<?php

namespace Rezzza\SepaBundle\Model;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Document
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 *
 * @XmlRoot("Document")
 */
class Document
{
    /**
     * MANDATORY
     *
     * @Type("string")
     * @XmlAttribute
     * @SerializedName("xmlns");
     */
    private $xmlns = "urn:iso:std:iso:20022:tech:xsd:pain.001.001.02";

    /**
     * @Type("Rezzza\SepaBundle\Model\Pain")
     * @SerializedName("pain.001.001.02");
     */
    public $pain;
}
