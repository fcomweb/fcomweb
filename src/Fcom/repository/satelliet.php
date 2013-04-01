<?php

namespace Fcom\Repository;

class Satelliet extends \Knp\Repository {

	public function getTableName() { return 'satellieten'; }

    public function findAll() {
        return $this->db->fetchAll('SELECT * FROM satellieten');
    }

    public function findDetail($id){
        return $this->db->fetchAssoc('SELECT * FROM satellieten WHERE satellieten.satellietenId = ?', array($id));
    }
}