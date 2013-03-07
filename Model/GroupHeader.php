<?php

namespace Rezzza\SepaBundle\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\PreSerialize;

/**
 * GroupHeader
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class GroupHeader
{
    /**
     * MANDATORY
     * IGNORED
     *
     * @Type("string")
     * @SerializedName("MsgId")
     */
    public $messageIdentification;

    /**
     * MANDATORY
     * IGNORED
     *
     * @Type("string")
     * @SerializedName("CreDtTm")
     */
    public $creationDateTime;

    /**
     * MANDATORY
     *
     * @Type("integer")
     * @SerializedName("NbOfTxs")
     */
    public $numberOfTransactions;

    /**
     * REQUIRED
     *
     * @Type("string")
     * @SerializedName("CtrlSum")
     */
    public $controlSum;

    /**
     * MANDATORY
     * IGNORED
     *
     * @Type("string")
     * @SerializedName("Grpg")
     */
    public $grouping = "MIXD";

    /**
     * IGNORED
     *
     * @Type("Rezzza\SepaBundle\Model\GroupHeader\InitiatingParty")
     * @SerializedName("InitgPty")
     */
    public $initiatingParty;

    /**
     * @PreSerialize()
     */
    public function fixDateTime()
    {
        if ($this->creationDateTime instanceof \DateTime) {
            $this->creationDateTime = $this->creationDateTime->format('Y-m-d\TH:i:s');
        }
    }
}
