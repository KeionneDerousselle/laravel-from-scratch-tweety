<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonForm extends Component
{
    public $method;
    public $action;
    public $buttonText;
    public $buttonStyle;
    protected $defaultButtonClasses = 'rounded-full py-2 px-4 text-sm';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method, $action, $buttonText, $buttonStyle = 'primary')
    {
        $this->method = $method;
        $this->action = $action;
        $this->buttonText = $buttonText;
        $this->buttonStyle = $buttonStyle;
    }

    public function getButtonClasses()
    {
        $classes = $this->defaultButtonClasses;

        if ($this->buttonStyle === 'primary') {
            $classes.=' bg-blue-500 shadow text-white';
        } elseif ($this->buttonStyle === 'secondary') {
            $classes.= ' border border-gray-400 bg-white';
        }

        return $classes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.button-form');
    }
}
