<?php
class Employee extends CI_model
{
    private $f = '';        // filter
    private $o = '';        // order

    private $q = Null;        // query
    private $rs = Null;        // record set
    private $r = Null;        // current record
    private $c = 0;            // record count
    public function __construct()
    {
        $this->load->database();
    }

    public function employee_list()
    {
        $query = $this->db->get('employee');
        $result = $query->result();
        return $result;
    }
    
    public function delEm($ssn = "")
    {
        $this->db->where('ssn', $ssn);
        $this->db->delete('employee');
        return true;
    }
    public function employeeById($ssn = "")
    {
        $sql = "
        SELECT * 
        FROM `employee` 
        WHERE `ssn` = '$ssn'
        ";
        $this->q = $this->db->query($sql);
        $result = $this->q->result();
        return $result;
        // return $this->q;
    }

    public function edit_employee($id, $data)
    {
        $this->db->where('ssn', $id);
        $this->db->update('employee', $data);
        return true;
    }

    public function edit_user($data)
    {
        $id = $data['ssn'];
        $this->db->where('ssn', $id);
        $this->db->update('employee', $data);
        return true;
    }

    public function insert_user($data)
    {
        $this->db->insert('employee', $data);
        return true;
    }
}
