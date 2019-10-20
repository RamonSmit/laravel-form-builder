<?php

namespace DALTCORE\LaravelFormBuilder;

use DALTCORE\LaravelFormBuilder\Support\Builder;
use DALTCORE\LaravelFormBuilder\Support\Element;
use DALTCORE\LaravelFormBuilder\Support\Form;
use DALTCORE\LaravelFormBuilder\Support\Value;

class LaravelFormBuilder
{
    /**
     * @return \DALTCORE\LaravelFormBuilder\Support\Form
     */
    public function form()
    {
        return new Form();
    }

    /**
     * @return \DALTCORE\LaravelFormBuilder\Support\Element|null
     */
    public function element()
    {
        return new Element();
    }

    /**
     * @return \DALTCORE\LaravelFormBuilder\Support\Element|null
     */
    public function value()
    {
        return new Value();
    }

    /**
     * @return \DALTCORE\LaravelFormBuilder\Support\Builder
     */
    public function builder()
    {
        return new Builder();
    }
}
