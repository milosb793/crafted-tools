<?php

### IMPORTANT: 
### To use this function, you ought to install package: 
### jeremykendall/php-domain-parser 
### (https://github.com/jeremykendall/php-domain-parser)

function getApexDomain($url, $cache_path = '/tmp')
{
    $manager    = new Manager(new Cache($cache_path), new CurlHttpClient());
    $rules      = $manager->getRules(); //$rules is a Pdp\Rules object

    $url = str_replace('http://', '', str_replace('https://', '', $url));

    return $rules->resolve($url)->getRegistrableDomain();
}
