<?php
namespace Rota\Model;

class Rota
{
    public $id;
    public $name;
    public $date;
	public $shift;

    public function exchangeArray($data)
    {
        $this->id     = (isset($data['id'])) ? $data['id'] : null;
        $this->name = (isset($data['name'])) ? $data['name'] : null;
        $this->date  = (isset($data['date'])) ? $data['date'] : null;
		$this->shift = (isset($data['shift'])) ? $data['shift'] : null;
    }
}