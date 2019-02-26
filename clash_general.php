<?php

return [
    'port'                => 8888,
    'socks-port'          => 8889,
    'redir-port'          => 9090,
    'allow-lan'           => true,
    'mode'                => 'Rule',
    'log-level'           => 'info',
    'external-controller' => '127.0.0.1:6170',
    'secret'              => '',
    'cfw-bypass'          => [
    	'music.163.com',
    	'*.music.126.net',
    ],
    'dns' => [
        'enable'          =>  true,
        'ipv6'            =>  false,
        'listen'          =>  '0.0.0.0:9053',
        'enhanced-mode'   =>  'redir-host',
        'nameserver'      => [
            '119.29.29.29',
            '119.28.28.28',
            '1.2.4.8',
            '223.5.5.5',
            'tls://dns.rubyfish.cn:853'
        ],
        'fallback'       =>  [
            'tls://1dot1dot1dot1.cloudflare-dns.com',
            'tls://dns.google'
        ]
    ]
];