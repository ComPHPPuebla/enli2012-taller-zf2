<?php
namespace BookStore\Model;

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
     * @return int
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @param int $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param array $data
     */
    public function exchangeArray(array $data)
    {
        $this->authorId = (isset($data['author_id'])) ? $data['author_id'] : null;
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
