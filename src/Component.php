<?php

namespace Boly\FormBuilder;


class Component
{

    public  $name = 'TextInput';
    public  $label;
    public $validation;
    public $value;
    public $options;
    public $model;
    public $serverSideFetch;

    public function name(string $name)
    {
        $this->name = $name;
        return $this;
    }


    public function vModel(string $model)
    {
        $this->model  = $model;
        return $this;
    }
    public function label(string $label)
    {
        $this->label = $label;
        return $this;
    }

    public function clientSideValidation(string $validation)
    {

        $this->validation  = $validation;
        return $this;
    }

    public function defaultValue($value)
    {
        $this->value = $value;
        return $this;
    }


    public function placeHolder($placeHolder)
    {
        $this->placeHolder = $placeHolder;
        return $this;
    }

    public function showWhen($otherInputKey, $operator = '=', $otherInputValue)
    {
        $this->conditionalShow = true;
        $this->conditional   = [
            'key' => $otherInputKey,
            'operator' => $operator,
            'value' => $otherInputValue
        ];
        return $this;
    }


    public function serverSideFetch($url, $key_will_send_to_server = 'id', $value_of_dependant = "static_key")
    {
        $this->serverSideFetch = [
            'url' => $url,
            'key' => $key_will_send_to_server,
            'value' => $value_of_dependant
        ];

        return $this;
    }
    public function option(array $options)
    {
        $this->options = $options;
        return $this;
    }

    public function additionalAttributes(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            $this->{$key} = $value;
        }
        return $this;
    }
}
