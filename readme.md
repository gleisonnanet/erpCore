# erpcore

[![Build Status](https://travis-ci.org/erpcore/core.svg?branch=develop)](https://travis-ci.org/erpcore/core)
[![Latest Stable Version](https://poser.pugx.org/erpcore/core/v/stable)](https://packagist.org/packages/erpcore/core) [![Total Downloads](https://poser.pugx.org/erpcore/core/downloads)](https://packagist.org/packages/erpcore/core) [![Latest Unstable Version](https://poser.pugx.org/erpcore/core/v/unstable)](https://packagist.org/packages/erpcore/core) [![License](https://poser.pugx.org/erpcore/core/license)](https://packagist.org/packages/erpcore/core)

ERP brasileiro de código fonte aberto escrito sob o Laravel Framework.

# Instalação

Adicione o núcleo do erpcore utilizando o Composer:

```shell
$ composer require erpcore/core
```

Registre o ServiceProvider no arquivo `app/config.php`:

```php
// file START ommited
    'providers' => [
        // other providers ommited
        \erpcore\Providers\erpcoreServiceProvider::class,
    ],
// file END ommited
```

Publique os arquivos necessários para o funcionamento do núcleo:

```shell
$ php artisan vendor:publish
$ composer dump-auto
```

Execute os comandos para criar e popular as tabelas:

```shell
$ php artisan migrate
$ php artisan db:seed --class="erpcoreSeeder"
```

# Template

A instalação do core não contempla o template. Você pode utilizar o template default do erpcore:

[http://github.com/erpcore/template](http://github.com/erpcore/template)

# License

The MIT License (MIT)

Copyright (c) 2015 Jansen Felipe

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
