<?php 
    class Movie 
    {
        public $id;
        public $title;
        public $genre;
        public $director;
        public $actors;

        // Constructor
        public function __construct ($_id, $_title, $_genre='unknown', $_director, $_actors) {
            $this->id = $_id;
            $this->title = $_title;
            $this->genre = $_genre;
            $this->director = $_director;
            $this->actors = $_actors;
        }

        //GET methods 
        public function getTitle() {
            echo $this->title;
        }
        public function getGenre() {
            echo $this->genre;
        }
        public function getDirector() {
            echo $this->director;
        }
        public function getActors() {
            echo $this->actors;
        }
    }
?>