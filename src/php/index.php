<?php 
$temp_array = [
    'hoge' => "foo",
    'var'  => 2,
];

function print_log(){
    printf("Hello World!\hogehoge");
    printf($temp_array);
}

function var_dump_log(){
    var_dump("Hello World!\hogehoge");
    var_dump($temp_array);
}

function error_log_log(){
    error_log("Hello World!\nhogehoge");
    error_log($temp_array);
}

function main(){
    print_log();
    var_dump_log();
    error_log_log();
}


