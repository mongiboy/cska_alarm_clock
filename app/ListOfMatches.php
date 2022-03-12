<?php

namespace app;

class ListOfMatches
{
    private $pageURL = 'https://pfc-cska.com/matches/spisok-matchej/';

    public function __construct()
    {
        echo $this->getMatches($this->pageURL);
    }

    private function getMatches($url)
    {
        $page = file_get_contents($url);
        return $page;
    }

}