<?php

namespace Tests\Unit\Books;

use Tests\TestCase;

class ModelAndControllerExistenceTest extends TestCase
{
    public function test_book_model_exists()
    {
        // Assert that the Book model class exists
        $this->assertTrue(class_exists(\App\Models\Book::class), 'Book model does not exist.');
    }

    public function test_book_controller_exists()
    {
        // Assert that the Book controller class exists
        $this->assertTrue(class_exists(\App\Http\Controllers\BookController::class), 'Book controller does not exist.');
    }

    //test if the author model exists
    public function test_author_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Author::class), 'Author model does not exist.');
    }

    //test if the author controller exists
    public function test_author_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\AuthorController::class), 'Author controller does not exist.');
    }

    //test if the supplier model exists
    public function test_supplier_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Supplier::class), 'Supplier model does not exist.');
    }

    //test if the supplier controller exists
    public function test_supplier_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\SupplierController::class), 'Supplier controller does not exist.');
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
