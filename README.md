# Kirby Boiler Field

*Version 0.2*

There is not much documentation about Kirby form fields. As a solution to the problem I created a boilerplate for it.

**[Intallation instructions](docs/install.md)**

## Features

### Textfield

- Extends basefield.
- Includes field [routes](https://forum.getkirby.com/t/routing-in-custom-form-field/3101/7).
- [Connects field to javascript](https://forum.getkirby.com/t/panel-field-javascript-click-does-not-work-after-save/3474/7).
- Includes ajax request. Output data to the console.

### Checkboxesfield

- Extends checkboxesfield.
- Inherit values from the options.
- Appends own values.

## Setup

### Blueprint

To make it work as expected, add the following code to your blueprint:

#### Textfield

```text
fields:
  boilertext:
    title: Your Field1
    type: boilertext
```

#### Checkboxfield

```text
fields:
  boilercheckboxes:
    title: Your Field2
    type: boilercheckboxes
```

## Changelog

**0.2**

- Register as plugin instead of field
- Renamed field from `boiler` to `boilertext`
- Added field `boilercheckboxes`

**0.1**

- Initial release

## Requirements

- [**Kirby**](https://getkirby.com/) 2.0+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/jenstornell/kirby-boiler-field/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Jens Törnell](https://github.com/jenstornell)