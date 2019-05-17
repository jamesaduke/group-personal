<?php
    use AfricasTalking\SDK\AfricasTalking;
    $username = 'sandbox';
    $apiKey = 'b1e54dd915851b0bbe21192f59e602f5185aa17f9c0d4583f0333dbf6c6bcf63';
    $AT = new AfricasTalking($username, $apiKey);

    // get one of the services
    $sms = $AT->sms();

    // use the service
    $result  = $sms->send([
            'to' => '+254720655526',

        ])

?>