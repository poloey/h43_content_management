<?php
namespace App\Libraries;

use Sunra\PhpSimple\HtmlDomParser;


class Helpers {
  public static function excerpt($content, $limit = 200) {
    $dom = HtmlDomParser::str_get_html( $content );
    $excerpt = str_limit( $dom->plaintext, $limit);
    return $excerpt;
  }
  const NUMBER_OF_POSTS = 30;
  const USERS = [
    [
      'name' => 'Sumon',
      'email' => 'sumon@gmail.com'
    ],
    [
      'name' => 'Sarwar',
      'email' => 'sarwar@gmail.com'
    ],
    [
      'name' => 'Mojibur',
      'email' => 'mojibur@gmail.com'
    ],
    [
      'name' => 'Tanim',
      'email' => 'tanim@gmail.com'
    ],
    [
      'name' => 'Riazul Hayder',
      'email' => 'riaz@gmail.com'
    ]

  ];

}