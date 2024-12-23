<?php



/**

 * Used to store website configuration information.

 *

 * @var string or null

 */

function config($key = '')
{

    // LIve
    // $config = [
    //     'name' => 'ITHEA',
    //     //Mail Settings
    //     'sysEmail' => 'no-reply@ithea.edu.au',
    //     'sysCompany' => 'ITHEA',
    //     'host' => 'smtp.office365.com',
    //     'username' => 'no-reply@ithea.edu.au',
    //     'password' => '1theA2023',
    //     'secure' => 'tls',
    //     'port' => 587,

    // ];

    // Testing
    $config = [
        'name' => 'ITHEA',
        //Mail Settings
        'sysEmail' => 'admin@ithea.com',
        'sysCompany' => 'ITHEA',
        'host' => 'sandbox.smtp.mailtrap.io',
        'username' => 'd4a243c1f50e14',
        'password' => '2b197113fa4ab6',
        'secure' => 'tls',
        'port' => 2525
    ];


    return isset($config[$key]) ? $config[$key] : null;

}

