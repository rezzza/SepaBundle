<?php

namespace Rezzza\SepaBundle\Model\GroupHeader;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

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
