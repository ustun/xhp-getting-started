<?hh

require('vendor/autoload.php');

$title = 'My Project';

$head =
    <head>
        <meta charset="utf-8" />
        <title>{$title}</title>
        <link rel="stylesheet" href="pure-min.css"/>
        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

    </head>;

$content =
    <x:frag>
    Welcome to my project!
    </x:frag>;

$body =
    <body>
        {$content}
    </body>;

echo
    <x:doctype>
        <html>
            {$head}
            {$body}
        </html>
    </x:doctype>;
