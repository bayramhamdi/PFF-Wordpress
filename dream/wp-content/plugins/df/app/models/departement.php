<?php

class Departement extends MvcModel {

    var $display_field = 'name';
    var $has_many = array('Etudiant');

}
