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
        $resultSet = $this->select();
        return $resultSet;
    }

    /**
     * @param int $id
     * @throws \Exception
     */
    public function getAuthor($id)
    {
        $id  = (int) $id;
        $rowset = $this->select(array('author_id' => $id,));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

}
