# Kirby Boiler Field

There is not a massive tons of docs about Kirby form fields. As a solution to the problem I created a boilerplate it.

## Features

- Basic stuff
- Templating
- Routes
- Ajax
- jQuery field plugin

## Installation

1. Copy the `boiler` folder to the right location `site/fields`.
1. Add a [text field](https://getkirby.com/docs/cheatsheet/panel-fields/text) to your blueprint and change the type to `boiler`.
1. Change it to your needs.

## Basic stuff

Just the [basics](https://getkirby.com/docs/panel/developers/custom-form-fields) to get a text field working for loading and saving.

## Templating

I prefer working on a [template](https://getkirby.com/docs/toolkit/api/tpl/load) instead of [brick](https://getkirby.com/docs/toolkit/api#brick). Therefor this boilerplate has template support.

## Routes

It's possible to use routes in panel form fields and I solved it by looking at [Routing in custom form field](https://forum.getkirby.com/t/routing-in-custom-form-field/3101/7).

## Ajax

Routes makes it possible to do Ajax requests.

## jQuery field plugin

To make javascript calls work both before and after save it's good to hook it by using a [jQuery field plugin](https://forum.getkirby.com/t/panel-field-javascript-click-does-not-work-after-save/3474/7).

## Future

- I have not figured out how controllers work for form fields yet but it would be nice to add.
- Maybe change the ajax call from get to post.