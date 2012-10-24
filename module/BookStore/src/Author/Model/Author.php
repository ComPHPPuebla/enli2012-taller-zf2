<?php
namespace Album\Model;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Album
{
    public $id;
    public $firstName;
    public $lastName;

    public function exchangeArray($data)
    {
        $this->id     = (isset($data['id'])) ? $data['id'] : null;
        $this->firstName = (isset($data['firstName'])) ? $data['firstName'] : null;
        $this->lastName  = (isset($data['lastName'])) ? $data['lastName'] : null;
    }
	
	public function getArrayCopy()
    {
        return get_object_vars($this);
    }
	
}
