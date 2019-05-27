<?php

return [
    'alipay' => [
        'app_id'         => '2016092900622858',
//        公钥
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmFYgt8OGOG5SpsLgrue88wuwUItQt3iyHSQ6YE/5G26GALO6x5n4UVNfQ3aKwfWAJ9f7k0MQUmUvDREjwCeVc4kVpTPKsSQcEnMF8hqndxR5naUyWGfhqmIMJpZqQP8H8u+qsSY86PTq6TqsTphkIPoFh0QqxXIHhotuxHneZf5HWfsiF9p6VPf9Ya0b71Sz/IF9CGfcjGUgkkYsXpy/MAwNZJ7K42RaZh/kYaanwpT9sY+SrH+wrzkUDvMi0Pbed+iuFc/zZ0Zo/NzbpC2JfBwfshIBFSgMK7W/UdIXW3BHXivyby9KBOfJQ93O2gL3t1PKfxi1go6G9zpAjXcrnQIDAQAB',
//        私钥
        'private_key'    => 'MIIEogIBAAKCAQEAwlH9Milg0U7kAZJj9+Tq6bLjiIIrbNk5muDiw0tkmk3XDBT82VH4RsRstbpyUkko5UqMYoTAeAwDVhrXiJ9BjvUZbOdJ3nAJO7Jb6S11uhi4YZ67AVGkv17PqgJXPlU1YQH1oDiQwNbIUzTs/eZu2/FjHJ/QGO2ejUjNamjintcjeSJovt7mQfPEbcjeEaDIVZ5Mbw3WImjpcxKhayF4nIeok1lLJtF3P5v3ifUah1llK0cLZkbk7Le5pprHQ8Hh5kKKYXBX0pWNSmpgMjsiYMUYyrmMAVHt4rXjLTFi1O40WOFrH9COLkvzPhZz6dObbnIwOfAMW4ByvY9K5timGQIDAQABAoIBAD/QUQfyErtp3vKtMmssIAETICmqJbyfMY2tIIrl7WnG+kIbelWb157VzqV3Tye6otV5v9RyqApEV6wlMHbLZeoej3T2F4oW3NFf51MR/MFacOKOD/eE6kd2SVgZYLE1pkvvKsytBsxtPGgmz1UqIWnVQakaymoFTrYzHFI/k3x5sw+UnsovZAL5vw+UYDLe8spNicTBKpI0776owefBUMky7MzWQz2s4gqkqhKSKCaJM00PmT2GqLq959IKGU584ExQV3hT7vqZ2wq01qm21ZtB2ephznMZGrWfPS5IJqy2wKu020P5sO467SqIuyxt9rHs+RbH1iDGD6lSrA0pTQkCgYEA9ph5DRDHY0/maSCW8w42nnIvH2bCiykF16N5YGzExQAoZTu+A3reSKIlXwtJTutsgHCYRUFfAblSGzgJ0PZbIZym0x7hoR536mFlaT8JQv3Qj7sLA8f2ama2Ggb7heWRteubiQ7JVuavPcm2UNd0sAUNxg+ZDbRm8eWUn2T17lMCgYEAybsmLYTEY2VpLyHbZdkaZq4Fz5VU41qlEAH6pE8jGbvHIOXO5wn9ISfi+P6b3xu7Go/f30bCdqHSHdmGeoq0fHkVsBFL2W4Xz+nae+E3QdOtRYUQIYmOvCSAaBflohG4ZoNIs9VaOxxdRON5Z7DkJtz9atu0Q1N6FX0NI1yFFGMCgYBUN3JwAeD2i90W3ihvTdVde4WYZdHfEN2L7aqQQdVZqlohaKvWKGotyCKXORWKPGDL5Kg8Tr0Rq6bc4OCJWvl4mzVmOM+55NvzUdv+e6bAGErYK3rxiaMgZ3+dl/Dio6qFxLdTsZcVdKc4pOD87vhM/QzdLYqJ4aieyFdfsG1FPQKBgEmZE9arh5LT3sopSgggavdnKguP6caAvZPXhQAJNz8eOQoRjajRBh7glHhPO8LsNRj9wKmPAUeSxjvJrrxqemqnKnhv9wI+nkVmhiWIB0bm2WJxp2705rRRhN91SHwWhvYvk4i4oBDMymJls1dXPAXJvlMMEPo3LGVGmFJ8YLkNAoGAOa/kh38t/H/IdrI0IlIgoWylY6CecElj/lCp0be69XTmHTGp9K8j3AE/7Ta042MBflx25yLWQP2mndRMzrCtktDB9TCxW1GhuRipWMMMZQuWIX6pLJsEoHv5gkGenZ2N2nqdibifV0dZxSFNI33mCQj3Z/qQXabwJ1lLb9dInbI=',
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
