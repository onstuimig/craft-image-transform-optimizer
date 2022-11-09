# Image Transform Optimizer plugin for Craft CMS

Wrapper for [image-optimizer](https://github.com/spatie/image-optimizer) for Craft image transforms

<img src="src/icon.svg" alt="Icon" width="200">

## Requirements

This plugin requires Craft CMS 4.3 or later.

For Craft 3.x use [MutationDigitale's Images optimization plugin](https://github.com/MutationDigitale/craft3-imagesoptim)

## Installation

Install from the Plugin Store or composer:

```bash
composer require onstuimig/craft-image-transform-optimizer
php ./craft install/plugin image-transform-optimizer
```

And make sure to install the desired optimization tools on the server as described here for Ubuntu:

```bash
sudo apt-get install jpegoptim
sudo apt-get install optipng
sudo apt-get install pngquant
sudo npm install -g svgo@1.3.2
sudo apt-get install gifsicle
sudo apt-get install webp
```

For up-to-date instructions and other distributions see:
https://github.com/spatie/image-optimizer#optimization-tools

\
Copyright © [Onstuimig](https://onstuimig.nl/)
