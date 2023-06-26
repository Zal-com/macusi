<?php

use Stichoza\GoogleTranslate\GoogleTranslate;

$tr = new GoogleTranslate('en');

echo $tr->translate('Hello World!');
