<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GetLeads implements JsonSerializable
{
    /**
     * If the request was successful or not
     * @var bool|null $success public property
     */
    public $success;

    /**
     * The array of Leads
     * @var \Pipedrive\Models\Lead[]|null $data public property
     */
    public $data;

    /**
     * The additional data of the list
     * @maps additional_data
     * @var \Pipedrive\Models\AdditionalData|null $additionalData public property
     */
    public $additionalData;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool           $success        Initialization value for $this->success
     * @param array          $data           Initialization value for $this->data
     * @param AdditionalData $additionalData Initialization value for $this->additionalData
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->success        = func_get_arg(0);
            $this->data           = func_get_arg(1);
            $this->additionalData = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['success']         = $this->success;
        $json['data']            = $this->data;
        $json['additional_data'] = $this->additionalData;

        return $json;
    }
}
