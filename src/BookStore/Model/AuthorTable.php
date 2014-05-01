<?php
namespace BookStore\Model;

use \Zend\Db\Adapter\Adapter;
use \Zend\Db\ResultSet\ResultSet;
use \Zend\Db\TableGateway\AbstractTableGateway;

class AuthorTable extends AbstractTableGateway
{
    /**
     * @var string
     */
    protected $table ='author';

    /**
     * @param \Zend\Db\Adapter\Adapter $adapter
     */
    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Author());
        $this->initialize();
    }

    /**
     * @return \Zend\Db\ResultSet\ResultSet
     */
    public function fetchAll()
    {
        return $this->select();
    }

    /**
     * @param  int        $id
     * @throws \Exception
     */
    public function getAuthor($id)
    {
        $rowset = $this->select(array('author_id' => (int) $id));

        if (!($row = $rowset->current())) {
            throw new \Exception("Could not find row with ID: $id");
        }

        return $row;
    }
}
