# Kami IcoBecnch Bundle

This bundle provides Symfony wrapper for [icobench-client](https://github.com/kamilabs/icobench-client)

## Installation

```bash
composer require kami/icobench-bundle
```

```php 
<?php
// app/AppKernel.php

$bundles = [
    ...
    new Kami\IcoBenchBundle\KamiIcoBenchBundle(),
    ...
]
```

## Configuration
```yaml
kami_icobench:
    private_key: "your_private_key"
    public_key: "your_public_key"
    guzzle_options: ~
```

## Usage
```php
<?php

/** @var \Kami\IcoBench\Client $client */
$client = $this->get('kami.icobench.client');

$client->getIco($id, $data);
$client->getIcos($type, $data);
$client->getOther($type);
$client->getPeople($type, $data);
```

### Testing
```bash
vendor/bin/phpunit
```