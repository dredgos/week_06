<?php

namespace App\Library;

class Book 
{
    private $title;
    private $totalPages;
    private $currentPage = 1;

    public function __construct($title, $totalPages)
    {
        $this->title = $title;
        $this->totalPages = $totalPages;
    }

    public function read($pages)
    {
        $this->currentPage += $pages;
    }

    public function currentPage()
    {
        return $this->currentPage;
    }

}