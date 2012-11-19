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
		$id = (int) $this->params()->fromRoute('id', 0);
        $author = $this->getAuthorTable()->getAuthor($id);
        return array('author' => $author,);
    }

    /**
     * @return \BookStore\Model\AuthorTable
     */
	public function getAuthorTable()
    {
        if (!$this->authorTable) {
            $sm = $this->getServiceLocator();
            $this->authorTable = $sm->get('BookStore\Model\AuthorTable');
        }
        return $this->authorTable;
    }

}
