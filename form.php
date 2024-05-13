<?php

class Form
{
    private $method;
    private $action;
    private $fields = [];

    public function __construct($method, $action)
    {
        $this->method = $method;
        $this->action = $action;
    }

    public function addLabel($text, $for)
    {
        $this->fields[] = "<label for='$for' class='form-label'>$text</label>";
    }

    public function addInput($type, $name, $value = '', $id = '', $class = '')
    {
        $classAttr = !empty($class) ? "class='$class'" : '';
        $input = "<input type='$type' name='$name' value='$value' id='$id' $classAttr class='form-control'>";
        $this->fields[] = $input;
    }

    public function render()
    {
        $html = "<form method='$this->method' action='$this->action'>";
        foreach ($this->fields as $field) {
            $html .= "<div class='mb-3'>$field</div>";
        }
        $html .= "<button type='submit' class='btn btn-primary'>Submit</button>";
        $html .= "</form>";
        return $html;
    }
}
