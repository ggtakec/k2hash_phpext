--TEST--
K2hQueue::count() member function
--DESCRIPTION--
K2HASH PHP Extension library

Copyright 2015 Yahoo! JAPAN corporation.

K2HASH is key-valuew store base libraries.
K2HASH is made for the purpose of the construction of
original KVS system and the offer of the library.
The characteristic is this KVS library which Key can
layer. And can support multi-processing and multi-thread,
and is provided safely as available KVS.

For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.
--SKIPIF--
<?php 
if(!extension_loaded('k2hash')) die('skip ');
?>
--FILE--
<?php
$handle = k2hpx_open_mem();
$k2hqueue = new K2hQueue($handle, true, "test_queue_");
$count = $k2hqueue->count();
if(0 == $count){
	echo "OK";
}else{
	echo "NG";
}
unset($k2hqueue);
k2hpx_close($handle);
?>
--EXPECT--
OK