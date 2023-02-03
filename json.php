<?php
// $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$age = '{"Peter":35,"Ben":37,"Joe":43}';
print_r(json_decode($age));
//UPDATE countries_old JOIN countries ON countries_old.code=countries.country_code SET countries_old.phone_code=countries.phone_code