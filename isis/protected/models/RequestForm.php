<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 9/25/14
 * Time: 9:33 PM
 */
/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class RequestForm extends CFormModel
{
    public $firstname;
    public $lastname;
    public $email;
    public $category;
    public $body;
    public $verifyCode;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            // firstname, lastname, email, category and body are required
            array('firstname, lastname, email, category, body', 'required'),
            // email has to be a valid email address
            array('email', 'email'),
            // verifyCode needs to be entered correctly
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'verifyCode'=>'Verification Code',
        );
    }
}