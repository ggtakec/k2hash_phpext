---
layout: contents
language: en-us
title: K2hash::getAttrInfos
short_desc: K2HASH PHP Extension - PHP Extension library for K2HASH
lang_opp_file: k2h_getattrinfosja.html
lang_opp_word: To Japanese
prev_url: k2h_enabletransaction.html
prev_string: K2hash::enableTransaction
top_url: k2h_class.html
top_string: K2hash Class
next_url: k2h_getattrs.html
next_string: K2hash::getAttrs
---

# K2hash::getAttrInfos
Prints the attribute information

## Description

```
 public bool K2hash::getAttrInfos ([ mixed $output ] )
```

Prints the attribute information. 

## Parameters
- output  
Specifies a file stream of data to be written.

## Return Values
Returns true on success or false on failure. 

## Examples
- Example 1 - Prints the attributes information

```
<?php
$k2hash = new K2hash();
$k2hash->openMem();
$fp = fopen("/tmp/k2hash_attr_information.log", 'w');
$k2hash->getAttrInfos($fp);
fclose($fp);
$k2hash->close();

$fp = fopen("/tmp/k2hash_attr_information.log", 'r');
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
K2HASH attribute libraries:  K2H ATTR BUILTIN
```


## See Also
- [K2hash::addAttr](k2h_addattr.html) - Adds the attribute to the key
- [K2hash::addAttrCryptPass](k2h_addattrcryptpass.html) - Adds the password to encrypt values
- [K2hash::addAttrPluginLib](k2h_addattrpluginlib.html) - Adds the user-defined library to handle attributes
- [K2hash::cleanCommonAttribute](k2h_cleancommonattribute.html) - Initializes the common attributes
- [K2hash::getAttrs](k2h_getattrs.html) - Gets attributes of the key
- [K2hash::getAttrValue](k2h_getattrvalue.html) - Gets an attribute value of the attribute key of the key
- [K2hash::getAttrVersionInfos](k2h_getattrversioninfos.html) - Prints the attribute library version