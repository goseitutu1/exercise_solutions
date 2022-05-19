<?php
error_reporting(0);

class Config
{
    private $values = [
        'first'     => "apple",
        'third'    => "banana"
    ];

    public function getValues() {
        return $this->values;
    }

    public function setValues($key, $element) {
        $this->$values[$key] = $element;
    }
}

$config = new Config();

$config->getValues()['second'] = 'mango';

$config->setValues('second','mango');


echo $config->getValues()['first'] . PHP_EOL;
echo $config->getValues()['second']. PHP_EOL;
echo $config->getValues()['third']. PHP_EOL;