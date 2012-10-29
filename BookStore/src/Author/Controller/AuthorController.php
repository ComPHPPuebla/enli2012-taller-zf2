<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use BookStore\Model\Author;  

class AuthorController extends AbstractActionController
{
	protected $authorTable;

    public function indexAction()
    {
		return new ViewModel(array(
            'authors' => $this->getAuthorTable()->fetchAll(),
        ));
    }

    public function showAction()
    {
		$id = (int) $this->params()->fromRoute('id', 0);
        $author = $this->getAuthorTable()->getAuthor($id);
        return array('author' => $author,);
    }
	
	public function getAuthorTable()
    {
        if (!$this->authorTable) {
            $sm = $this->getServiceLocator();
            $this->authorTable = $sm->get('BookStore\Model\AuthorTable');
        }
        return $this->authorTable;
    }
	
}
