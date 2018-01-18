# how to use html dom parser in laravel 

add dom parser library in composer.json file 
~~~js
  "sunra/php-simple-html-dom-parser": "^1.5",
~~~

Make a Helpers class inside app/Libraries  (its totally up to where you want to create a class)     
in my case `app>Libraries>Helpers.php`

~~~php
namespace App\Libraries;

use Sunra\PhpSimple\HtmlDomParser;


class Helpers {
  public static function excerpt($content, $limit = 200) {
    $dom = HtmlDomParser::str_get_html( $content );
    $excerpt = str_limit( $dom->plaintext, $limit);
    return $excerpt;
  }
} 
~~~

Now create a alias inside `config/app.php`
~~~php
'Helpers' => App\Libraries\Helpers::class,
~~~

Now I can use this inside any blade file

~~~html
{% raw %}
{{ Helpers::excerpt($post->content) }}
{% endraw %}
~~~






