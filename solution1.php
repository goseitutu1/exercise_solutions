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

        $this->values[$key] = $element;
    }
}

$config = new Config();

//$config->getValues()['second'] = 'mango'; this is not a setter method

$config->setValues('second','mango'); // I defined a setter method to add element to the array


echo $config->getValues()['first'] . PHP_EOL;
echo $config->getValues()['second']. PHP_EOL;

//echo $config->values['third']. PHP_EOL; the array values is a private variable, hence it can not be used outside the config class

echo $config->getValues()['third']. PHP_EOL; //i used the getValues() method to get the third element