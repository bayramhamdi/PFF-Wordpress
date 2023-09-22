<?php

class Etudiant extends MvcModel {

    var $display_field = 'nom';
    var $belongs_to = array('Departement');

}
