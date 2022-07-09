<?php

namespace DanielSpravtsev\BladeSchema\View\Components;

use DanielSpravtsev\BladeSchema\BladeSchema;
use DanielSpravtsev\BladeSchema\Traits\HasSchema;

class Form extends BladeSchema
{
    use HasSchema;

    protected ?string $view = 'bladeschema::components.form';
}
