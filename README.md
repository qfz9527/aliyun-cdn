Aliyun OpenAPI Cdn SDK
==============================

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Aliyun OpenAPI Cdn SDK

## Install

``` bash
$ composer require wenpeng/aliyun-cdn
```

## Usage

```php
/**
 * 初始配置
 */
$config = [
	'access_key_id' => 'xxx',
	'access_key_secret' => 'xxx',
];
$region = EndpointConfig::getRegionIds();
$domain = EndpointConfig::getProductDomains();
$endpoint = new Endpoint('cn-hangzhou', $region, $domain);
EndpointProvider::setEndpoints([$endpoint]);

$profile = DefaultProfile::getProfile('cn-hangzhou', $config['access_key_id'], $config['access_key_secret']);

/**
 * 刷新缓存
 */
$request = new \Aliyun\Cdn\Request\RefreshObjectCachesRequest();
$request->setObjectType("File");
$request->setObjectPath("www.yourdomain.com/path/filename.ext");


$client   = new DefaultAcsClient($profile);
$response = $client->getAcsResponse($request);

var_dump($response);
```

[官网文档](https://help.aliyun.com/document_detail/27257.html)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/wenpeng/aliyun-cdn.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/wenpeng/aliyun-cdn.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/wenpeng/aliyun-cdn
[link-downloads]: https://packagist.org/packages/wenpeng/aliyun-cdn