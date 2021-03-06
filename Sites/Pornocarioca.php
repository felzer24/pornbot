<?php
namespace Pornbot\Sites;

class Pornocarioca extends \Pornbot\Core\Sitebase
{
    public function name()
    {
        return 'pornocarioca.com';
    }

    public function type()
    {
        return 'html';
    }

    public function random($page)
    {
        return 'http://www.pornocarioca.com/page/' . $page . '/';
    }

    public function url()
    {
        return 'http://www.pornocarioca.com/';
    }

    public function title()
    {
        return [
            'pattern' => '/<title>([^\<]+)<\/title>/i',
            'regex'   => true
        ];
    }

    public function thumbnail()
    {
        return [
            'pattern' => 'div.thumb-image img',
            'attr'    => 'src',
            'regex'   => false
        ];
    }

    public function link()
    {
        return [
            'pattern' => 'li.list-item a',
            'attr'    => 'href',
            'regex'   => false
        ];
    }

    public function category()
    {
        return [
            'pattern' => 'meta[name="keywords"]',
            'attr'    => 'content',
            'regex'   => false
        ];
    }

    public function embed()
    {
        return [
            'pattern' => '#emm',
            'attr'    => 'value',
            'regex'   => false
        ];
    }
}