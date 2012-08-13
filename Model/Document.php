<?php

namespace Rezzza\SepaBundle\Model;

use JMS\SerializerBundle\Annotation\XmlRoot;
use JMS\SerializerBundle\Annotation\XmlAttribute;
use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

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
     * @Type("Pain")
     * @SerializedName("pain.001.001.02");
     */
    public $pain;
}
