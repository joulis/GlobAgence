<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\C;

use App\M\LigueModel;

class LigueController extends \Core\Controller {

    static public function listeAction() {
        self::$_view->ligues = LigueModel::getAll();
        self::$_view->title = 'Liste des ligues';
    }    
}
