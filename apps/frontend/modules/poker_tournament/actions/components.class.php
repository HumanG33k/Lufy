<?php

class poker_tournamentComponents extends sfComponents {

    public function executeList(sfWebRequest $request) {
        $this->nexttournaments = Doctrine_Core::getTable('PokerTournament')
          ->createQuery('a')
          ->where('is_active = 1')
          ->orderBy('start_at ASC')
          ->execute();
    }

}