<?php

namespace Tests\Unit;

use Tests\TestCase;

class ModelAndControllerExistenceTest extends TestCase
{
    public function test_video_model_exists()
    {
        // Assert that the Book model class exists
        $this->assertTrue(class_exists(\App\Models\Video::class), 'Video model does not exist.');
    }

    public function test_video_controller_exists()
    {
        // Assert that the Book controller class exists
        $this->assertTrue(class_exists(\App\Http\Controllers\VideoController::class), 'Video controller does not exist.');
    }

    //test if the director model exists
    public function test_director_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Director::class), 'Director model does not exist.');
    }

    //test if the author controller exists
    public function test_author_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\AuthorController::class), 'Author controller does not exist.');
    }

    //test if the production house model exists
    public function test_production_house_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\ProductionHouse::class), 'Production house model does not exist.');
    }

    //test if the production house controller exists
    public function test_production_house_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\ProductionHouseController::class), 'Production house controller does not exist.');
    }

    //test if the genre model exists
    public function test_genre_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Genre::class), 'Genre model does not exist.');
    }

    //test if the genre controller exists
    public function test_genre_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\GenreController::class), 'Genre controller does not exist.');
    }

    //test if the subgenre model exists
    public function test_subgenre_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Subgenre::class), 'Subgenre model does not exist.');
    }

    //test if the subgenre controller exists
    public function test_subgenre_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\SubgenreController::class), 'Subgenre controller does not exist.');
    }
}
