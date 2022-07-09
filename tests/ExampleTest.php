<?php

use DanielSpravtsev\BladeSchema\View\Components\Button;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can render simple component', function () {
    dd(
        Button::make('Simple Button')->render()->getData()
    );
});
