# auf-kirby-plugin-template

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

## Installation

1. Clone this repository to desired plugin-folder

```git clone https://github.com/peterstollenwerk/auf-kirby-plugin-template.git my-plugin```

2. Remove .git-Folder

```myProject/.git```

3. Install with dev-dependencies via composer.

```php ../composer.phar install --dev```

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

## Test your Installation

1. Change the site-title

```my-plugin/content/site.txt```

2. Point your webserver to your project and Start it. Verify to see your new site title.

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

## Test your Installation for creating Panel-Plugins

!Assuming you have installed parcel via yarn globally!

1. Change something in

```my-plugin/src/components/fields/AufPluginField.vue```

2. Recompile the field

```yarn run dev```

4. Open the kirby panel, go to home page and verify to see your changes change live in AufPluginField

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

## Running Unit Tests

there´s a test script in composer.json wich executes the unit test.

```composer run test``` or ```php ../composer.phar run test```

depending on your composer-setup.

Alternativly you can watch for changes with:

```php ../composer.phar run watch```

This will run unit tests everytime you change a php file. 
You can set the watched folders in the watchers configuration:

```my-plugin/phpunit-watcher.yml```

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

## House Keeping

Rename files:

```my-plugin/index.php```
```my-plugin/src/index.js```
```my-plugin/...etc...```


- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

## Releasing your plugin

1. Create new git Repo

```https://github.com/git-account/my-plugin```

3. Connect local project with github

4. Exclude Files for your Release in ```my-plugin/.gitattributes```

5. Compile your panel-fields

```yarn run build```

6. Push Project

7. Create Release-Tag

8. Connect Project with your Packagist-Account

9. Install project in your kirby-installation

```composer require git-account/my-plugin```

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

## Docs

<https://getkirby.com/docs/guide/plugins/plugin-setup-panel>
<https://getkirby.com/docs/cookbook/setup/monolithic-plugin-setup>

### If the plugin has dependencies follow the guide:

<https://getkirby.com/docs/guide/plugins/plugin-setup-composer>

<https://phpunit.readthedocs.io/en/9.2/># auf-styles
