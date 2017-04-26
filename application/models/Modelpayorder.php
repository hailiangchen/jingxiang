<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modelpayorder extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function _required($required, $data)
    {
        foreach ($required as $field) if (!isset($data[$field])) return false;
        return true;
    }

    function _default($defaults, $options)
    {
        return array_merge($defaults, $options);
    }


    function AddPayOrder($options = array()){

        $arr=array('username','paytype','orderno');

        if(!$this->_required($arr, $options)) return false;
        // Add where col to adds
        $qualificationArray = array('username','paytype','orderno','payamount','addtime','client');
        foreach($qualificationArray as $qualifier)
        {
            if(isset($options[$qualifier]))
                $data[$qualifier]=$options[$qualifier];
        }
        $this->db->insert('payorder', $data);
        return $this->db->insert_id();
    }


    public function GetPayOrder($options = array())
    {
        // default values
        $options = $this->_default(array('sortDirection' => 'desc'), $options);

        // Add where clauses to query
        $qualificationArray = array('id','orderno');
        foreach ($qualificationArray as $qualifier) {
            if (isset($options[$qualifier]))
                $this->db->where($qualifier, $options[$qualifier]);
        }

        // If limit / offset are declared (usually for pagination)
        // then we need to take them into account
        if (isset($options['limit']) && isset($options['offset']))
            $this->db->limit($options['limit'], $options['offset']);
        else if (isset($options['limit'])) $this->db->limit($options['limit']);

        // sort
        if (isset($options['sortBy']))
            $this->db->order_by($options['sortBy'], $options['sortDirection']);

        $query = $this->db->get('payorder');
        if ($query->num_rows() == 0) return false;

        if (isset($options['first'])) {
            // If we know that we're returning a singular record,
            // then let's just return the object
            return $query->row(0);
        } else {
            // If we could be returning any number of records
            // then we'll need to do so as an array of objects
            return $query->result();
        }
    }


    function UpdatePayOrder($options = array())
    {
        // required values
        if (!$this->_required(array('id'), $options)) return false;

        // qualification (make sure that
        // we're not allowing the site to update data that it shouldn't)
        $qualificationArray = array('id','username','paytype','payamount','orderno','addtime','client');
        foreach ($qualificationArray as $qualifier) {
            if (isset($options[$qualifier]))
                $this->db->set($qualifier, $options[$qualifier]);
        }

        $this->db->where('id', $options['id']);

        // Execute the query
        $this->db->update('payorder');

        // Return the number of rows updated, or false if the row could not be inserted
        return $this->db->affected_rows();
    }

    function DeletePayOrder($options = array())
    {
        // required values
        if(!$this->_required(array('id'), $options)) return false;

        $this->db->where('id', $options['id']);
        $this->db->delete('payorder');
        return $this->db->affected_rows();
    }


}