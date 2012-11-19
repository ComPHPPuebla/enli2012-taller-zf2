<?php
namespace BookStore\Model;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Author
{
    /**
     * @var int
     */
    protected $authorId;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @param array $data
     */
    public function exchangeArray(array $data)
    {
        $this->authorId     = (isset($data['author_id'])) ? $data['author_id'] : null;
        $this->firstName = (isset($data['firstName'])) ? $data['firstName'] : null;
        $this->lastName  = (isset($data['lastName'])) ? $data['lastName'] : null;
    }

    /**
     * @return array
     */
	public function getArrayCopy()
    {
        return get_object_vars($this);
    }

}
