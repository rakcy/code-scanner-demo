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


?>
