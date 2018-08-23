# Nova Trumbowyg

Nova field wrapper around the [vue-trumbowyg](https://github.com/ankurk91/vue-trumbowyg) which is a wrapper around [trumbowyg](https://alex-d.github.io/Trumbowyg/).

## Installation
1. `composer require johnathan/nova-trumbowyg`
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
