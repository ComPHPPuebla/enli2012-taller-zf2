<?php
namespace BookStore\Controller;

use BookStore\Model\AuthorTable;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use BookStore\Model\Author;

class AuthorController extends AbstractActionController
{
    /**
     * @var \BookStore\Model\AuthorTable
     */
    protected $authorTable;

    /**
     * Retrieve the list of authors
     */
    public function indexAction()
    {
        return new ViewModel(array(
            'authors' => $this->getAuthorTable()->fetchAll(),
        ));
    }

    /**
     * Get yhe information of a given author
     */
    public function showAction()
    {
        $author = $this->getAuthorTable()->getAuthor((int) $this->params()->fromRoute('id', 0));

        return array('author' => $author,);
    }

    /**
     * @return \BookStore\Model\AuthorTable
     */
    public function getAuthorTable()
    {
        if (!$this->authorTable) {
            $this->authorTable = $this->getServiceLocator()->get('BookStore\Model\AuthorTable');
        }

        return $this->authorTable;
    }
}
