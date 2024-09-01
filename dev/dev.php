<?php
/**
 * Simple Tests
 */

use ProTag\ElementCf;
use ProTag\HtmlFactory;

require_once __DIR__ . '/../vendor/autoload.php';

ElementCf::setMode(ElementCf::MODE_HTML5);

echo HtmlFactory::div()
    ->add('Some content')
    ->addClass(['test', 'b', 'a', ['another']])
    ->addClass('some funny classes')
    ->addClass('some funny classes')
    ->addClass('notshown')
    ->setAttributes([
        'test' => null,
    ]);




