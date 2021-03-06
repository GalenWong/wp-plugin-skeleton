## WP Plugin Skeleton

## Requirements

- [PHP](http://php.net/) v5.6+
- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/) (globally installed as `composer`)

## Install

```
git clone https://github.com/luizbills/wp-plugin-skeleton.git _skeleton \
&& cd $_ \
&& php ./install && sleep .1 \
&& cd ../$(cat ../.tmp_wp_plugin_dir) \
&& rm -f ../.tmp_wp_plugin_dir \
&& rm -rf ../_skeleton \
&& ls -Apl
```

## Contributing

- Fork this repo
- Clone inside of `wp-content/plugins` folder
- Enable the WordPress Debug mode in your `wp-config.php`:

```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );
```

- **Make your changes!**
- Optional: *create a `src/includes/dev.php` to test your changes (see `src/includes/dev-sample.php`).*
- Open your terminal and run the following commands:

```bash
cd /path/to/your/wp-content/plugins/wp-plugin-skeleton
php ./install --test
```
- Then, open your WordPress admin panel and active the **`A Skeleton Test`** plugin.

## LICENSE

GPL v3
