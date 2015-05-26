Gabrieljmj\TranslatorBundle
===========================
Bundle for use [Gabrieljmj\Translator](http://github.com/gabrieljmj/translator) with Symfony application.

## Usage
### Installing
Add this bundle on kernel:
```php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Gabrieljmj\TranslatorBundle\TranslatorBundle()
    );
}
```

### Configuring
```yaml
translator:
    google_translate:
        api_key: [YOUR-API-KEY]
    yandex_translate:
        api_key: [YOUR-API-KEY]
```
### Using
The translators are registred as services, so you can get on a controller:
```php
$translator = $this->get('gabrieljmj.translator.google'); // or gabrieljmj.translator.yandex
$text = $translator->translate('en', 'es', 'Fucking bastards!');
```