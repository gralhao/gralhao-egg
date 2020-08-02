<p align="center">
  <a href="https://github.com/gralhao/gralhao-egg" rel="noopener">
    <img src="https://github.com/gralhao/gralhao/raw/master/docs/assets/logo.svg" alt="Gralhao logo">
  </a>
</p>

<h3 align="center">gralhao/gralhao-egg</h3>

<div align="center">

[![Latest Stable Version](https://img.shields.io/packagist/v/gralhao/gralhao-egg.svg?style=flat-square)](https://packagist.org/packages/gralhao/gralhao-egg)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg)](https://php.net/)
[![Build Status](https://travis-ci.com/gralhao/gralhao-egg.svg?branch=master)](https://travis-ci.com/gralhao/gralhao-egg)
[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![License](https://img.shields.io/badge/license-BSD-blue.svg)](/LICENSE)

</div>

---

<div align="center">
  <p>This is a Gralhao Application Kickstart</p>
</div>

## Index

- [About](#about)
- [Getting Started](#getting_started)
- [Usage](#usage)
- [Built Using](#built_using)
- [Authors](#authors)
- [Acknowledgments](#acknowledgement)

## About <a name = "about"></a>

Egg is an application kickstart, it provides the basic structure to create apis with Phalcon, using [Gralhao](https://github.com/gralhao/gralhao) skeleton.

Gralhao is built with Phalcon MVC Micro. It means that all Phalcon features still available to be used.
[Read more about Phalcon](https://phalcon.io).

## Getting Started <a name = "getting_started"></a>

### Prerequisites
PHP ^7.4, Phalcon ^4.x, Gralhao ^1.x

### Usage <a name="usage"></a>
To learn how to create a module, please check the [sample module repository](https://github.com/gralhao/status-module).
##### Create the project using composer
```bash
composer create-project gralhao/gralhao-egg project/path
```
##### Running with php server
```bash
composer serve
```
Go to: http://localhost:8080/ping

##### Running with docker (Phalcon extension is available in container)
```bash
docker-compose build && docker-compose up
```
Go to: http://localhost:8080/ping

### QA Tools
##### PHP Unit
```bash
composer test
```
##### PHP CS
```bash
composer cs-check
```
```bash
composer cs-fix
```


## Built Using <a name = "built_using"></a>
- [Gralhao](https://github.com/gralhao/gralhao)
- [Phalcon](https://phalcon.io/)

## Authors <a name = "authors"></a>
- [@mocallu](https://github.com/mocallu) - Idea & Initial work

See also the list of [contributors](https://github.com/gralhao/gralhao-egg/contributors) who participated in this project.

## Acknowledgements <a name = "acknowledgement"></a>
- [Phalcon Project](https://phalcon.io)
- [A.K.A. Gralhao](https://en.wikipedia.org/wiki/Red-throated_caracara)
