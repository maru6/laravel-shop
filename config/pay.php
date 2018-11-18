<?php

return [
    'alipay' => [
        'app_id'         => '2016092000551874',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz86CcVMcLeGapSCKbI9Dhh9YVmTLB5HzMv5XrIf8tX68JjGHq+6aS/3eP2tRGbqXYhXhnnaaR7JnlJK/5zKtWLcpTD5Le4eaukcuUX1Nr2Zzno6WWa0ZOI8jWNqffz1MH3sK+HC2qgTWnyfnGzYq9qeny42aeYAQny9+IKnDTPzCirEU5OFlNKfadsYzGg8CsPVPBxEOJ5jq0fLOCWbPpoc+hHX9NZ3dn3xH93a+qa5VmfaIjDgrZebCYIvY8LswjVsLN7i3mUUjz0qeiFabMSQaivCZFfVB+KcENuFMgA2ad13lEUuPnZavtss/jnL0SExKWJmxZHAlDLqrLqhgAwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAz86CcVMcLeGapSCKbI9Dhh9YVmTLB5HzMv5XrIf8tX68JjGHq+6aS/3eP2tRGbqXYhXhnnaaR7JnlJK/5zKtWLcpTD5Le4eaukcuUX1Nr2Zzno6WWa0ZOI8jWNqffz1MH3sK+HC2qgTWnyfnGzYq9qeny42aeYAQny9+IKnDTPzCirEU5OFlNKfadsYzGg8CsPVPBxEOJ5jq0fLOCWbPpoc+hHX9NZ3dn3xH93a+qa5VmfaIjDgrZebCYIvY8LswjVsLN7i3mUUjz0qeiFabMSQaivCZFfVB+KcENuFMgA2ad13lEUuPnZavtss/jnL0SExKWJmxZHAlDLqrLqhgAwIDAQABAoIBADX0cHnsEkz3XqexIz+8ktOoH8+OrAhzJKoAz9LEHCEjnsZr5cYGVZmVeLcOrif4AoY9GC+Eq9ohwDMbRyhISCnYpKhfJEoWk136TVRrLFh2SV7Jts/h2cKNp6fSW8c1qyYhVF/dJBBQ4UjBm4e9MLqKHU8EnS8eyTILqrvgWA0Mu7hAWxd3cbtmzhZNuuZCG9zSJP19CpgEobx/vxmVK7wXBXr53Mipsop4nyDl8KQ+qCvYZ5FmM08JcqOh6C/XiPiVX/Hewy9l7dJGSxXcm1ZiQu0DIJChWOi98+tlj+VXYLHMToV5G6OlVNwKPgD3Nonv3QdGRUe9uDQ27g2tnoECgYEA7/55879HWhkMk2F3GOKSl7UVYPfIYvCzdBVN+nVfSHdHs7FXipJ+QK9Odm/SYjd0rPjcZiN2CnKZtiPdEdvK1IH9AteqYQgz2roMNhxRCfe3MsmMmddxmWDb9juHQm3z/kdS5Ma6QptZ0fUfRnZcoyZia8zsUfKiyz6hAdnAO9sCgYEA3ap77G7cdmx6hKEbVKaAHfinsiCVsj1JdFAPKw7Zl4jAqXxZ6G3T+v6x042VaeSyEeeAoKMLedDOpbyN3NcUVYsXYAG3H5dPMONanHli038HLwSUS/nC8X9/hTxShxQJZDQuJAK4R6Q5XkcKiwoMGBDYy00pg1dHRgmR3UG2+PkCgYAKhVRhTBxbpcd4Woh3Dc+xWN3kD1i4habISvrNJQIVUi1Rgk+9ImjoewbsiEBnz9iMkKhQzfMpyBZW9sGFO+ZrZHtr+XpdoJdtWkSYxqsCzdo5Hr7MK7auK6HY7Ikkb1+H4SaQIuoda2QHoUBKvXuYJ2GfKi+d9A4Q7ODwDNSxiwKBgGmHIDgPDyXRvwIlML28BoI+Ppeuq5WPV8jn1FDLYQujLxWA/cyJfMGhP0dXwCoJljyv2ayf8nar0bVVbrQUMLoI3bf3GRcREcJUem7D2yiU8PaRV4hT/1q5OBxV+3QTNeVechjysohoxmb7qylGPzu1yX//3COLCYNuSuLqxhEBAoGBANPTs31p0FWqbnHcgsUKvlR6AI+oHsM2SjtbVJfYVuzb+vRKsoTJFZsxA6f4y+MnGldHyc94d71UlIJKd/4SZLXKyi1qtF681G90YrQHTnh+LK+e9AxWGtqQwI0U6bpmWeWjS1wiTa2GtVqfMzIQ9la4LMzFp/11B3BpYGT2r8mb',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];