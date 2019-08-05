<?php
class Foo {
    public function bar($param)  {
        if ($param === 42) {
            eval('$param = 23;');
        }
    }
}
echo 'Hello World';
// echo 'Hello World';


// trigger RSPEC-2068
$uname = "jeff";
$password = "hunter2";
connect($uname, $password);

?>
