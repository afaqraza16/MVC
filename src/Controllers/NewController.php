<?php

namespace App\Controllers;

use App\Models\NewModel;
use Framework\Viewer;

class NewController
{
    private Viewer $viewer;
    private NewModel $newModel;
    public function __construct(Viewer $viewer, NewModel $newModel)
    {
        $this->viewer = $viewer;
        $this->newModel = $newModel;
    }
    public function show()
    {
        // require "src/Model/new_model.php";
        $all_news = new NewModel();
        $all_news = $all_news->connect();

        print $this->viewer->render("new_view", ['all_news' => $all_news]);



    }
}

?>