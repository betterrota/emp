<?php
namespace Rota\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class RotaTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
	
    {
        $this->tableGateway = $tableGateway;
    }
	

    public function fetchAll()
   
   {
     $resultSet = $this->tableGateway->select(function (Select $select) {
      $select->order('name ASC')->limit(200);// solving problem with extra entries
	
	
	
});
        return $resultSet;
    }
	
	
    public function getRota($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
	
	

    public function saveRota(Rota $rota)
    {
        $data = array(
            'name' => $rota->name,
            'date'  => $rota->date,
             'shift'  => $rota->shift,

        );

        $id = (int)$rota->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getRota($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Form id does not exist');
            }
        }
    }

    public function deleteRota($id)
    {
        $this->tableGateway->delete(array('id' => $id));
    }
}