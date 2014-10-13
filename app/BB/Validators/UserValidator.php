<?php namespace BB\Validators;

class UserValidator extends FormValidator
{

    /**
     * Validation rules
     *
     * @var array
     */
    protected $rules = [
        'given_name'            => 'required',
        'family_name'           => 'required',
        'email'                 => 'required|email|unique:users',
        'secondary_email'       => 'email|unique:users',
        'password'              => 'required|min:8',
        'address_line_1'        => 'required',
        'address_line_2'        => '',
        'address_line_3'        => '',
        'address_line_4'        => '',
        'address_postcode'      => 'required',
        'monthly_subscription'  => 'required|integer|min:5',
        'emergency_contact'     => 'required',
        'profile_private'       => 'boolean',
    ];


    //During an update these rules will override the ones above
    protected $updateRules = [
        'email'                => 'required|email|unique:users,email,{id}',
        'secondary_email'      => 'email|unique:users,secondary_email,{id}',
        'password'             => 'min:8',
        'monthly_subscription' => ''
    ];


    protected $adminOverride = [
        'password'          => 'min:8',
        'emergency_contact' => '',
    ];

} 