<?php

namespace DanielSpravtsev\BladeSchema;

use Illuminate\View\Component;

class BladeSchema extends Component
{
    public ?string $name = null;
    public ?string $slot = null;

    protected ?string $view = null;
    protected ?string $extends = null;

    protected array $data = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function make(string $name): self
    {
        return new self($name);
    }

    public function slot(string $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|bool|\Illuminate\Contracts\Support\Htmlable|string|\Closure|\Illuminate\Contracts\Foundation\Application
    {
        if (! $this->view) {
            return false;
        }

        if (method_exists($this, 'schemaRender')) {
            $this->data = array_merge($this->data, ['schema' => $this->schemaRender()]);
        }

        return view($this->view, array_merge($this->data(), $this->data, ['slot' => $this->slot]));
    }

    public function toHtml(): string
    {
        return $this->render()->render();
    }
}
