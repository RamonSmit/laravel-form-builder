<?php

namespace DALTCORE\LaravelFormBuilder\Support;

/**
 * Class Linker
 *
 * Global model holder
 *
 * @package DALTCORE\LaravelFormBuilder\Support
 */
class Linker
{
    /**
     * @var \DALTCORE\LaravelFormBuilder\Support\Form|null
     */
    public static $form = null;

    /**
     * @var \DALTCORE\LaravelFormBuilder\Support\Element|null
     */
    public static $element = null;

    /**
     * @var \DALTCORE\LaravelFormBuilder\Support\Value|null
     */
    public static $value = null;
}
