<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The service account key create request.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.CreateServiceAccountKeyRequest</code>
 */
class CreateServiceAccountKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The output format of the private key. `GOOGLE_CREDENTIALS_FILE` is the
     * default output format.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     */
    private $private_key_type = 0;
    /**
     * Which type of key and algorithm to use for the key.
     * The default is currently a 2K RSA key.  However this may change in the
     * future.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountKeyAlgorithm key_algorithm = 3;</code>
     */
    private $key_algorithm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the service account in the following format:
     *           `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     *           Using `-` as a wildcard for the project will infer the project from
     *           the account. The `account` value can be the `email` address or the
     *           `unique_id` of the service account.
     *     @type int $private_key_type
     *           The output format of the private key. `GOOGLE_CREDENTIALS_FILE` is the
     *           default output format.
     *     @type int $key_algorithm
     *           Which type of key and algorithm to use for the key.
     *           The default is currently a 2K RSA key.  However this may change in the
     *           future.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the service account in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}`.
     * Using `-` as a wildcard for the project will infer the project from
     * the account. The `account` value can be the `email` address or the
     * `unique_id` of the service account.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The output format of the private key. `GOOGLE_CREDENTIALS_FILE` is the
     * default output format.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     * @return int
     */
    public function getPrivateKeyType()
    {
        return $this->private_key_type;
    }

    /**
     * The output format of the private key. `GOOGLE_CREDENTIALS_FILE` is the
     * default output format.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPrivateKeyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Iam\Admin\V1\ServiceAccountPrivateKeyType::class);
        $this->private_key_type = $var;

        return $this;
    }

    /**
     * Which type of key and algorithm to use for the key.
     * The default is currently a 2K RSA key.  However this may change in the
     * future.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountKeyAlgorithm key_algorithm = 3;</code>
     * @return int
     */
    public function getKeyAlgorithm()
    {
        return $this->key_algorithm;
    }

    /**
     * Which type of key and algorithm to use for the key.
     * The default is currently a 2K RSA key.  However this may change in the
     * future.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountKeyAlgorithm key_algorithm = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Iam\Admin\V1\ServiceAccountKeyAlgorithm::class);
        $this->key_algorithm = $var;

        return $this;
    }

}

