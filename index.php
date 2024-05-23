<?php 



jsoncorrector($jsondata);


function jsoncorrector($data){

    return json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $value->response), true );
}

?>