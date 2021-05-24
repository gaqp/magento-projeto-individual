# Mage2 Module DevGabriel Individual

    ``devgabriel/module-individual``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
API Crud Básica

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/DevGabriel`
 - Enable the module by running `php bin/magento module:enable DevGabriel_Individual`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require devgabriel/module-individual`
 - enable the module by running `php bin/magento module:enable DevGabriel_Individual`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - API Endpoint
	- PUT - DevGabriel\Individual\Api\CreateManagementInterface > DevGabriel\Individual\Model\CreateManagement

 - API Endpoint
	- GET - DevGabriel\Individual\Api\ReadManagementInterface > DevGabriel\Individual\Model\ReadManagement

 - API Endpoint
	- POST - DevGabriel\Individual\Api\UpdateManagementInterface > DevGabriel\Individual\Model\UpdateManagement

 - API Endpoint
	- GET - DevGabriel\Individual\Api\DeleteManagementInterface > DevGabriel\Individual\Model\DeleteManagement


## Attributes



