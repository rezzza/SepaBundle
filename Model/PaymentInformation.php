<?php

namespace Rezzza\SepaBundle\Model;

use JMS\SerializerBundle\Annotation\XmlList;
use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

/**
 * PaymentInformation
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class PaymentInformation
{
    /**
     * REQUIRED
     *
     * @Type("string")
     * @SerializedName("PmtInfId")
     */
    public $paymentInformationIdentification;

    /**
     * MANDATORY
     *
     * @Type("string")
     * @SerializedName("PmtMtd")
     */
    public $paymentMethod;

    /**
     * REQUIRED
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\PaymentTypeInformation")
     * @SerializedName("PmtTpInf")
     */
    public $paymentTypeInformation;

    /**
     * MANDATORY
     *
     * @Type("datetime")
     * @SerializedName("ReqdExctnDt")
     */
    public $requestedExecutionDate;

    /**
     * MANDATORY
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\Debtor")
     * @SerializedName("Dbtr")
     */
    public $debtor;

    /**
     * MANDATORY
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\DebtorAccount")
     * @SerializedName("DbtrAcct")
     */
    public $debtorAccount;

    /**
     * MANDATORY
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\DebtorAgent")
     * @SerializedName("DbtrAgt")
     */
    public $debtorAgent;

    /**
     * OPTIONAL
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\UltimateDebtor")
     * @SerializedName("UltmtDbtr")
     */
    public $ultimateDebtor;

    /**
     * OPTIONAL
     *
     * @Type("string")
     * @SerializedName("ChrgBr")
     */
    public $chargeBearer;

    /**
     * MANDATORY
     *
     * @XmlList(inline=true, entry= "CdtTrfTxInf")
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation")
     */
    public $creditTransferTransactionInformations;
}
