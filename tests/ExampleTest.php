<?php

use DanielSpravtsev\BladeSchema\View\Components\Button;
use DanielSpravtsev\BladeSchema\View\Components\Form;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can render simple component', function () {
    expect(Button::make('Simple Button')->toHtml())->toContain("<button ></button>");
});

it('can render simple component with slot', function () {
    expect(Button::make('Simple Button')->slot('Create')->toHtml())->toContain("<button >Create</button>");
});

it('can render schema component', function () {
    expect(
        Form::make('Form component')->schema(
            [
                Button::make('Simple Button')->slot('Button Inside Form')
            ]
        )->schema[0]->name
    )->toBe('Simple Button');
});
