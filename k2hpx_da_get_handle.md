---
layout: contents
language: en-us
title: k2hpx_da_get_handle
short_desc: K2HASH PHP Extension - PHP Extension library for K2HASH
lang_opp_file: k2hpx_da_get_handleja.html
lang_opp_word: To Japanese
prev_url: k2hpx_da_get_handle_write.html
prev_string: k2hpx_da_get_handle_write
top_url: k2hpx.html
top_string: k2hash Functions
next_url: k2hpx_da_get_length.html
next_string: k2hpx_da_get_length
---

# k2hpx_da_get_handle
Gets the k2hash direct access file handle

## Description

```
mixed k2hpx_da_get_handle ( mixed $handle_res , string $key , int $mode )
```

Gets the k2hash direct access file handle with arbitrary mode: 'K2H_DA_READ' (read-only), 'K2H_DA_RW' (read-write) or 'K2H_DA_WRITE' (write).

### Note
The [k2hash direct access](https://pages.ghe.corp.yahoo.co.jp/yjcore/k2hash_phpext/en/function.k2hpx-da-free.html) handle is a handler to provide quick access to the specific part of large data using offset. 

## Parameters
- handle_res  
Specifies the k2hash file handle that k2hpx_open returns.
- key  
Specifies the key to have access.
- mode  
Specifies one of 'K2H_DA_READ' (read-only), 'K2H_DA_RW' (read-write) or 'K2H_DA_WRITE' (write).

## Return Values
Returns the k2hash direct access file handle. 

## Examples
- Example 1 - Gets the k2hash direct access file handle

```
<?php
$handle = k2hpx_open_mem();
k2hpx_set_value($handle, "test", "value");
$dahandle = k2hpx_da_get_handle($handle, "test", K2H_DA_READ);
var_dump(k2hpx_da_free($dahandle));
k2hpx_close($handle);
?>
```

The above example will output:

```
resource(5) of type (k2hdahandle)
```


## See Also
- [k2hpx_da_free](k2hpx_da_free.html) - Frees resources of k2hash direct access handle
- [k2hpx_da_get_handle_read](k2hpx_da_get_handle_read.html) - Reads data
- [k2hpx_da_get_handle_rw](k2hpx_da_get_handle_rw.html) - Gets the k2h direct access file handle with read-write only mode
- [k2hpx_da_get_handle_write](k2hpx_da_get_handle_write.html) - Gets the k2h direct access file handle with write only mode
- [k2hpx_da_get_length](k2hpx_da_get_length.html) - Gets the data length
- [k2hpx_da_get_offset](k2hpx_da_get_offset.html) - Gets the k2h direct access file offset with read-write access mode
- [k2hpx_da_get_read_offset](k2hpx_da_get_read_offset.html) - Gets the k2h direct access file offset with read access mode
- [k2hpx_da_get_value_to_file](k2hpx_da_get_value_to_file.html) - Reads value using the offset and write it to the file
- [k2hpx_da_get_value](k2hpx_da_get_value.html) - Reads value using the offset
- [k2hpx_da_get_write_offset](k2hpx_da_get_write_offset.html) - Gets the k2h direct access file offset with write access mode
- [k2hpx_da_set_offset](k2hpx_da_set_offset.html) - Sets the offset to modify the data
- [k2hpx_da_set_read_offset](k2hpx_da_set_read_offset.html) - Sets the offset to read the data
- [k2hpx_da_set_value_from_file](k2hpx_da_set_value_from_file.html) - Sets value using the offset reading data from the file with length
- [k2hpx_da_set_value](k2hpx_da_set_value.html) - Sets value
- [k2hpx_da_set_write_offset](k2hpx_da_set_write_offset.html) - Sets value using the offset