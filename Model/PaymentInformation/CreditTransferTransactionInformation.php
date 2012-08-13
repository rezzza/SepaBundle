<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation;

use JMS\SerializerBundle\Annotation\Type;
use JMS\SerializerBundle\Annotation\SerializedName;

/**
 * CreditTransferTransactionInformation
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class CreditTransferTransactionInformation
{
    /**
     * MANDATORY
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\paymentIdentification")
     * @SerializedName("PmtId")
     */
    public $paymentIdentification;

    /**
     * MANDATORY
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\Amount")
     * @SerializedName("Amt")
     */
    public $amount;

    /**
     * OPTIONAL
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\UltimateDebtor")
     * @SerializedName("UltmtDbtr")
     */
    public $ultimateDebtor;

    /**
     * REQUIRED
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\CreditorAgent")
     * @SerializedName("CdtrAgt")
     */
    public $creditorAgent;

    /**
     * REQUIRED
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\Creditor")
     * @SerializedName("Cdtr")
     */
    public $creditor;

    /**
     * REQUIRED
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\CreditorAccount")
     * @SerializedName("CdtrAcct")
     */
    public $creditorAccount;

    /**
     * OPTIONAL
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\UltimateCreditor")
     * @SerializedName("UltmtCdtr")
     */
    public $ultimateCreditor;

    /**
     * OPTIONAL
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\Purpose")
     * @SerializedName("Purp")
     */
    public $purpose;

    /**
     * OPTIONAL
     *
     * @Type("Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation\RemittanceInformation")
     * @SerializedName("RmtInf")
     */
    public $remittanceInformation;
}
