<?php

namespace Rezzza\SepaBundle\Model\GroupHeader;

use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

/**
 * InitiatingParty
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class InitiatingParty
{
    /**
     * REQUIRED
     * IGNORED
     *
     * @Type("string")
     * @SerializedName("Nm")
     */
    public $name;
}
