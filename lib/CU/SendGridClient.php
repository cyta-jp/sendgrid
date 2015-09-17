<?php

namespace CU;

class SendGridClient
{
    private $_sendgrid;

    public function __construct($api_user, $api_key)
    {
        $this->_api_user = $api_user;
        $this->_api_key = $api_key;
        $this->_sendgrid = new \SendGrid($this->_api_user, $this->_api_key);
    }

    public function getDefaultForm()
    {
        return [
            "api_user" => $this->_api_user,
            "api_key" => $this->_api_key,
        ];
    }

    public function deleteFromBounceList($email)
    {
        $endpoint = "/api/bounces.delete.json";
        $form = $this->getDefaultForm();
        $form["email"] = $email;

        $this->_sendgrid->postRequest($endpoint, $form);
    }

    public function deleteFromInvalidList($email)
    {
        $endpoint = "/api/invalidemails.delete.json";
        $form = $this->getDefaultForm();
        $form["email"] = $email;

        $this->_sendgrid->postRequest($endpoint, $form);
    }

}
