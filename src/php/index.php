
n print_log(){
    $temp_array = [
        'hoge' => "foo",
        'var'  => 2,
    ];
    printf("Hello World!\hogehoge");
    printf($temp_array);
}

function var_dump_log(){
    $temp_array = [
        'hoge' => "foo",
        'var'  => 2,
    ];
    var_dump("Hello World!\hogehoge");
    var_dump($temp_array);
}

function error_log_log(){
    $temp_array = [
        'hoge' => "foo",
        'var'  => 2,
    ];
    error_log("Hello World!\nhogehoge");
    error_log($temp_array);
    $json_temp_array = json_encode($temp_array);
    error_log($json_temp_array);
}

function main(){
    print_log();
    var_dump_log();
    error_log_log();
}
