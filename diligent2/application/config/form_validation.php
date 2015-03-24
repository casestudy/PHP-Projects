<?php
/**
 * Created by PhpStorm.
 * User: Femencha Azombo Fabr
 * Date: 8/31/14
 * Time: 3:19 PM
 */

$config = array(
    'signup' => array(
        array(
            'field' => 'surname',
            'label' => 'Sure Names',
            'rules' => 'trim|required|min_length[3]|max_length[45]|is_unique[accounts.surname]|xss_clean'
        ),
        array(
            'field' => 'givenname',
            'label' => 'Given Names',
            'rules' => 'trim|required|min_length[3]|max_length[45]|xss_clean'
        ),
        array(
            'field' => 'password',
            'label' => 'PassWord',
            'rules' => 'trim|required|min_length[10]|xss_clean'
        ),
        /*array(
            'field' => 'passconf',
            'label' => 'PassWord Confirmation' ,
            'rules' => 'trim|required|matches[password]|xss_clean'
        ),*/
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|xss_clean'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'trim|required|xss_clean'
        ),
        array(
            'field' => 'town',
            'label' => 'Town',
            'rules' => 'trim|required|xss_clean'
        ),
        array(
            'field' => 'ans',
            'label' => 'Answer',
            'rules' => 'trim|required|xss_clean'
        )
    ) ,
);