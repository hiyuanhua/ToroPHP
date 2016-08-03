<?php

require("./Toro.php");
class HelloHandler {
    function get() {
      echo "Hello, world";
    }
}
class TestToro {
	function get($tem) {
		var_dump($_GET);	// array(1) { ["d"]=> string(2) "23" }
		echo $tem;			// 111
	}
}
Toro::serve(array(
    "/" => "HelloHandler",
    // 访问地址http://192.168.15.148/ToroPHP/index.php/test111?d=23
    "/test:number" => "TestToro",
));