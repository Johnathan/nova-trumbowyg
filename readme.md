[![Latest Stable Version](https://poser.pugx.org/johnathan/nova-trumbowyg/v/stable)](https://packagist.org/packages/johnathan/nova-trumbowyg) [![Total Downloads](https://poser.pugx.org/johnathan/nova-trumbowyg/downloads)](https://packagist.org/packages/johnathan/nova-trumbowyg) [![Latest Unstable Version](https://poser.pugx.org/johnathan/nova-trumbowyg/v/unstable)](https://packagist.org/packages/johnathan/nova-trumbowyg) [![License](https://poser.pugx.org/johnathan/nova-trumbowyg/license)](https://packagist.org/packages/johnathan/nova-trumbowyg)

# Nova Trumbowyg

Nova field wrapper around the [vue-trumbowyg](https://github.com/ankurk91/vue-trumbowyg) which is a wrapper around [trumbowyg](https://alex-d.github.io/Trumbowyg/).

## Installation
1. `composer require johnathan/nova-trumbowyg`
2. Run `php artisan vendor:publish --tag=public` to puslish the icon font to the public directory
2. That's it.

## Usage
Add the following to one of your resources

Import NovaTrumbowyg

`use Johnathan\NovaTrumbowyg\NovaTrumbowyg;`

Then call it inside the fields method of your resource.

```
    public function fields(Request $request)
    {
        return [
            ...,
            NovaTrumbowyg::make('body'),
            ...
        ];
    }
```

You can also pass in an array of options to use with Trumbowyg
```
    public function fields(Request $request)
    {
        return [
            ...,
            NovaTrumbowyg::make('body')

                ->withMeta(['options' => [
                    'btns' => [
                        ['viewHTML'],
                        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ]
                ]]),
             ...
        ];
    }
```

By default, the Trumbowyg field will not display their content when viewing a resource on its detail page. It will be hidden behind a "Show Content" link, that when clicked will reveal the content. You may specify the Trumbowyg field should always display its content by calling the alwaysShow method on the field itself

```
    public function fields(Request $request)
    {
        return [
            ...,
            NovaTrumbowyg::make('body')->alwaysShow(),
            ...
        ];
    }
```

By default, the Trumbowyg field will display in full width you can change this back to Nova's default (half) by using the `defaultWidth` method on the field, as shown below.

```
    public function fields(Request $request)
    {
        return [
            ...,
            NovaTrumbowyg::make('body')->defaultWidth(),
            ...
        ];
    }
```
