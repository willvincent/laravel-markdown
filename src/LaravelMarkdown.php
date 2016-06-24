<?php

namespace willvincent\LaravelMarkdown;

use \Parsedown;
use Michelf\SmartyPants;

class LaravelMarkdown
{
    protected $pretty = false;
    protected $parsedown;
    protected $smartypants;

    public function __construct($config) {
        if ($config['pretty']) {
            $this->pretty = true;
            $this->smartypants = new SmartyPants($config['pretty_options']);
        }
        $this->parsedown = new Parsedown();
        $this->parsedown->setBreaksEnabled = $config['breaks'];
        $this->parsedown->setMarkupEscaped = $config['escape'];
        $this->parsedown->setUrlsLinked = $config['urls_linked'];        
    }

    public function parse($text) {
        $text = $this->preTransformText($text);
        $text = $this->parsedown->parse($text);
        if ($this->pretty) {
            $text = $this->smartypants->transform($text);
        }
        $text = $this->postTransformText($text);

        return $text;
    }

    protected function preTransformText($text) {
        return $text;
    }

    protected function postTransformText($text) {
        return $text;
    }
}
