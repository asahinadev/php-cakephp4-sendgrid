<?php
namespace App\SendGrid\Mailer\Transport;

use Cake\Mailer\AbstractTransport;
use Cake\Mailer\Transport\SmtpTransport as BaseTransport;
use Cake\Core\Configure;

class SmtpTransport extends BaseTransport
{

    /**
     * Default config for this class
     *
     * @var array
     */
    protected $_defaultConfig = [
        'host' => 'smtp.sendgrid.net',
        'port' => 587,
        'timeout' => 30,
        'username' => "apikey",
        'password' => null,
        'client' => null,
        'tls' => true,
        'keepAlive' => false
    ];

}

