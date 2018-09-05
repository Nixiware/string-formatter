StringFormatter
=======================

## Introduction
String formatter supporting named arguments.

## Requirements
* PHP >= 5.3

## Usage
1. Import package namespace ```use Nixiware\StringFormatter;```
2. Format strings using the static method ```format($str, $data)```
  * ```$str``` - template string
  * ```$data``` - values

Arguments are specified in the template string by placing them between double curly braces: ```{{argumentName}}```. 

Argument names can contain letters (a-z, A-Z), numbers (0-9) and underscore (_) character.

## Example

* Display a simple formatted string.

```
echo StringFormatter::format(
	'It {{status}}!', 
	[
		'status' => 'works'
	]
);
```

Outputs: ```It works!```


## License
StringFormatter is available under the MIT license. See the LICENSE file for more info.
