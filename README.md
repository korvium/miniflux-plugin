# Miniflux Plugin for Korvium

![License](https://img.shields.io/badge/license-AGPL--3.0--or--later-blue.svg)
![PHP Version](https://img.shields.io/badge/php-%3E%3D8.1-8892BF.svg)

The **Miniflux Plugin for Korvium** is a PHP library designed to interact with the Miniflux RSS Reader API within the Korvium ecosystem. This plugin provides a feature-rich SDK built on OpenAPI specifications, enabling seamless integration of Miniflux functionalities into your PHP applications.

## Features

- Full support for Miniflux API operations.
- Automatically generated SDK using [Jane OpenAPI](https://github.com/janephp/open-api).
- Built for PHP `>= 8.1`.
- Leverages OpenAPI runtime for robust API interactions.
- Korvium-ready plugin for enhanced extensibility.

## Installation

To use this plugin in your PHP project, you can install it via [Composer](https://getcomposer.org/):

```bash
composer require korvium/miniflux-plugin
```

Ensure your environment meets the following requirements:

- PHP version `>= 8.1`
- Required extensions: `ext-curl`, `ext-json`, `ext-mbstring`.

## Getting Started

### 1. Configuration and Initialization

To interact with the Miniflux API, you need to initialize the client:

_give some examples of integration codes here_

### 2. Generating SDK Files (Optional)

This project leverages the [Jane OpenAPI](https://github.com/janephp/open-api) to generate API clients. If you need to regenerate the SDK, run:

```bash
composer build
```

Under the hood, Jane generator and PHP-CS fixer are used:

```bash
composer generate # Jane generator
composer fix      # cs-fixer
```

### 3. Code Formatting & Standards

To maintain code quality, use the provided script for code formatting:

```bash
composer fix
```

## License

This project is licensed under the [AGPL-3.0-or-later](LICENSE). If you use this software, please be sure to comply with its license terms.

---

## About the Author

This Miniflux plugin is maintained by **Franck Matsos**. Contributions and bug reports are welcome.