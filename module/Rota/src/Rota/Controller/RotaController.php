<?php
namespace Rota\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Rota\Model\RotaTable ;
use Rota\Model\Rota ;

class RotaController extends AbstractActionController
{
protected $rotaTable;
    public function indexAction()
    {
	 {
        return new ViewModel(array(
            'rotas' => $this->getRotaTable()->fetchAll(),
        ));
    }
    }

    public function addAction()
    {
	
	
    }

    public function editAction()
    {
	
	
    }

    public function deleteAction()
    {
	
	
    }
	public function getRotaTable()
    {
        if (!$this->rotaTable) {
            $sm = $this->getServiceLocator();
            $this->rotaTable = $sm->get('Rota\Model\RotaTable');
        }
        return $this->rotaTable;
    }
}