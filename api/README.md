## Installation

You can install the package via composer:

download this repo and make a folder inside @core 
name packages/api
add all file to this api folder

add below code in your composer.json
```
 "repositories": [
        {
            "type": "path",
            "url": "./packages/api",
            "options": {
                "symlink": false
            }
        }
    ],
```

```bash
composer require techsoft/api
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits


