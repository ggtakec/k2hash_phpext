---
layout: contents
language: en-us
title: K2hash::dumpFullKeytable
short_desc: K2HASH PHP Extension - PHP Extension library for K2HASH
lang_opp_file: k2h_dumpfullkeytableja.html
lang_opp_word: To Japanese
prev_url: k2h_dumpfull.html
prev_string: K2hash::dumpFull
top_url: k2h_class.html
top_string: K2hash Class
next_url: k2h_dumphead.html
next_string: K2hash::dumpHead
---

# K2hash::dumpFullKeytable
Prints details of the k2hash's hash tables

## Description

```
 public bool K2hash::dumpFullKeytable ([ mixed $output ] )
```

Prints details of the k2hash's hash tables including headers, hash tables and sub-hash tables. 

## Parameters
- output  
Specifies a file stream of data to be written.

## Return Values
Returns true on success or false on failure. 

## Examples
- Example 1 - Prints details of the k2hash's hash tables

```
<?php
K2hash::create("/tmp/test_k2hash.k2h");
$k2hash = new K2hash();
$k2hash->openRO("/tmp/test_k2hash.k2h");
$fp = fopen("/tmp/k2hash_dump_full_keytable.log", 'w');
$k2hash->dumpFullKeytable($fp);
fclose($fp);
$k2hash->close();

$fp = fopen("/tmp/k2hash_dump_full_keytable.log", 'r');
if ($fp) {
        while (!feof($fp)) {
                if (($buf = fgets($fp, 4096)) !== false) {
                        echo $buf;
                }
        }
        fclose($fp);
}
?>
```

The above example will output:

```
...
    Key Index Pointer[29] = Not Allocated
    Key Index Pointer[30] = Not Allocated
    Key Index Pointer[31] = Not Allocated
  }
```


## See Also
- [K2hash::dumpElementtable](k2h_dumpelementtable.html) - Prints elements of the k2hash's hash table elements
- [K2hash::dumpFull](k2h_dumpfull.html) - Prints the k2hash's hash tables in details
- [K2hash::dumpHead](k2h_dumphead.html) - Prints the k2hash's headers
- [K2hash::dumpKeytable](k2h_dumpkeytable.html) - Prints the k2hash's hash tables