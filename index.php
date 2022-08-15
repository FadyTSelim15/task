 <?php

require 'field.php';
require 'boolean.php';
require 'text.php';
require 'radio.php';
require 'checkbox.php';
$fields = [
    new App\Field('main'),
    new App\Text('text'),
    new App\Boolean('boolean'),
    new App\Checkbox('checkbox'),
    new App\radio('radio'),
];


foreach ($fields as $field){
    echo $field->render()."</br>";
}
?> 