<?php

class City_model extends MY_Model {

    public $name;

    /**
     * @cardinality has_many
     * @class User_model
     * @order name
     */
    protected $users;
}