# PHP-CMD
**Skeleton project for new php command line applications**

##Usage

```bash
$ git clone https://github.com/RudyJessop/php-cmd.git MyApp
```

##Development

`phpcmd` - is the 'point of entry'

```bash
$ php phpcmd
```

To change the command to your choice just change the filename

`src/ExampleCommand.php` - Holds the class(es) for the application.

```php
<?php

/**
 * Configures the command, arguments and flags
 */
public function configure(){}

/**
 * Executes the command
 */
public function execute(){}
```

## License

Eclipse Public License (EPL v1.0). Please see [License](LICENSE.md) for more information.
