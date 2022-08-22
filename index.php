<?php
// array filter for searching specific array value
echo "<pre>";
 $var = array(
[
'interval' => '2014-10-26',
'leads'=> '0',
'name' => 'CarEnquiry',
'status' => 'NEW',
'appointment' => '0'],
[
'interval' => '2022-10-26',
'leads'=> '0',
'name' => 'CarEnquiry1',
'status' => 'NEW',
'appointment' => 1],

);




$new = array_filter($var, function ($var) {
    return ($var['name'] == 'CarEnquiry1');
});

print_r($new);
