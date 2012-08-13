<?php

namespace Rezzza\SepaBundle\Model;

use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

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
     * @Type("datetime")
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
     * @Type("decimal")
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
}
