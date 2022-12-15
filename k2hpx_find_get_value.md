---
layout: contents
language: en-us
title: k2hpx_find_get_value
short_desc: K2HASH PHP Extension - PHP Extension library for K2HASH
lang_opp_file: k2hpx_find_get_valueja.html
lang_opp_word: To Japanese
prev_url: k2hpx_find_get_subkeys.html
prev_string: k2hpx_find_get_subkeys
top_url: k2hpx.html
top_string: k2hash Functions
next_url: k2hpx_find_next.html
next_string: k2hpx_find_next
---

# k2hpx_find_get_value
Gets value using the k2hash file handle to search for keys

## Description

```
string k2hpx_find_get_value ( mixed $findhandle_res )
```

Gets value using the k2hash file handle to search for keys. 

## Parameters
- findhandle_res  
Specifies the k2hash file handle that k2hpx_find_first returns.

## Return Values
Returns value of each key. 

## Examples
- Example 1 - Gets value using the k2hash file handle to search for keys

```
<?php
$handle = k2hpx_open_mem();
k2hpx_set_value($handle, "test1", "value1");
k2hpx_set_value($handle, "subkey1", "sub-value1");
k2hpx_add_subkey($handle, "test1", "subkey1");
$findhandle = k2hpx_find_first($handle);
var_dump($findhandle);
var_dump(k2hpx_find_get_value($findhandle));
k2hpx_find_free($findhandle);
k2hpx_close($handle);
?>
```

The above example will output:

```
resource(5) of type (k2hfindhandle)
string(6) "value1"
```


## See Also
- [k2hpx_find_first](k2hpx_find_first.html) - Gets the k2h file handle to search for the key
- [k2hpx_find_free](k2hpx_find_free.html) - Releases resources of the k2h file handle to search for keys
- [k2hpx_find_get_key](k2hpx_find_get_key.html) - Gets keys using the k2h file handle to search for keys
- [k2hpx_find_get_subkeys](k2hpx_find_get_subkeys.html) - Gets keys using the k2h file handle to search for keys with linked with each key
- [k2hpx_find_next](k2hpx_find_next.html) - Advances the internal pointer of the k2h file handle to search for keys