<?php

namespace DanielSpravtsev\BladeSchema\Traits;

use DanielSpravtsev\BladeSchema\BladeSchema;

trait HasSchema
{
    public array $schema = [];

    public function schema(array $components): static
    {
        $this->schema = $components;

        return $this;
    }

    public function schemaRender(): array
    {
        $renderedComponents = [];

        /** @var BladeSchema $child */
        foreach ($this->schema as $child) {
            $renderedComponents[] = $child->render()->render();
        }

        return $renderedComponents;
    }
}
