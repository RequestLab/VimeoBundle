# README

[![Build Status](https://travis-ci.org/RequestLab/VimeoBundle.svg?branch=master)](https://travis-ci.org/RequestLab/VimeoBundle)

The RequestLab VimeoBundle provides a way to use the Vimeo API as Symfony 2 Bundle. 

## Documentation

# composer

composer require requestlab/vimeo-bundle "^0.0.2"

# config.yml

request_lab_vimeo:
    client_id: "your_vimeo_client_id"
    client_secret: "your_vimeo_client_secret"
    access_token: "your_vimeo_token"

# appKernel.php

$bundles = [
  new RequestLab\VimeoBundle\RequestLabVimeoBundle(),
  new AppBundle\AppBundle()
];

## Contribute

We love contributors! The bundle is open source, if you'd like to contribute, feel free to propose a PR!

## License

The RequestLab Vimeo Bundle is under the MIT license. For the full copyright and license information, please read the [LICENSE](https://github.com/RequestLab/VimeoBundle/blob/master/LICENSE) file that was distributed with this source code.

# VimeoBundle
A Symfony 3 Bundle to use Vimeo API
