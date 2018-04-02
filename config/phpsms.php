<?php

return [
    /*
     * The scheme information
     * -------------------------------------------------------------------
     *
     * The key-value paris: {name} => {value}
     *
     * Examples:
     * 'Log' => '10 backup'
     * 'SmsBao' => '100'
     * 'CustomAgent' => [
     *     '5 backup',
     *     'agentClass' => '/Namespace/ClassName'
     * ]
     *
     * Supported agents:
     * 'Log', 'YunPian', 'YunTongXun', 'SubMail', 'Luosimao',
     * 'Ucpaas', 'JuHe', 'Alidayu', 'SendCloud', 'SmsBao',
     * 'Qcloud', 'Aliyun'
     *
     */
    'scheme' => [
        'Log',
        'Luosimao'=>'100'
    ],

    /*
     * The configuration
     * -------------------------------------------------------------------
     *
     * Expected the name of agent to be a string.
     *
     */
    'agents' => [
        /*
         * -----------------------------------
         * luosimao
         * -----------------------------------
         * website:http://luosimao.com
         * support content sms.
         */
        'Luosimao' => [
            'apikey'        => '8a50b9b2bec58090ce46f3ec3a398ee',

        ],


    ],
];
