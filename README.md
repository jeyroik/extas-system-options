![tests](https://github.com/jeyroik/extas-system-options/workflows/PHP%20Composer/badge.svg?branch=master&event=push)
![codecov.io](https://codecov.io/gh/jeyroik/extas-system-options/coverage.svg?branch=master)

[![Latest Stable Version](https://poser.pugx.org/jeyroik/extas-system-options/v)](//packagist.org/packages/jeyroik/extas-system-options)
[![Total Downloads](https://poser.pugx.org/jeyroik/extas-system-options/downloads)](//packagist.org/packages/jeyroik/extas-system-options)
[![Dependents](https://poser.pugx.org/jeyroik/extas-system-options/dependents)](//packagist.org/packages/jeyroik/extas-system-options)


# extas-system-options
System options for extas

# usage

in an extas.json
```json
{
    "system_options": [
        {
            "name": "some.name",
            "title": "Some param",
            "description": "Some system param",
            "value": "string|int|array|object"
        }
    ]
}
```

in a code
```php
$system = new System();

$option = $system->systemOptions()->one([ISystemOption::FIELD__NAME => 'some.name']);
print_r($option->getValue());

//or

if ($system->hasOption('some.name')) {
    print_r($system->getOptionValue());
}
```