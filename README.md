# Data Serialize

Universal data serializer for PHP

Serializers:

- json(by `json_encode`)
- php(by `serialize`)
- igbinary(by extension `igbinary`)
- msgpack(by extension `msgpack`)

## Install

- composer command

```bash
composer require swoft/serialize
```

## Usage

```php
$serializer = new JsonSerializer();
// $serializer = new PhpSerializer();
// $serializer = new IgBinarySerializer();
// $serializer = new MsgPackSerializer();

// serialize data
$string = $serializer->serialize($data);

// unserialize string
$data = $serializer->unserialize($string);
```

## Unit testing

```bash
phpunit 
```

## LICENSE

The Component is open-sourced software licensed under the [Apache license](LICENSE).

