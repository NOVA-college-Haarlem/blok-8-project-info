<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;

class MigrationExistanceTest extends TestCase
{
    public function test_books_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('books'), 'Books table does not exist.');
    }

    public function test_authors_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('authors'), 'Authors table does not exist.');
    }

    public function test_genres_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('genres'), 'Genres table does not exist.');
    }

    public function test_subgenres_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('subgenres'), 'Subgenres table does not exist.');
    }

    public function test_suppliers_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('suppliers'), 'Suppliers table does not exist.');
    }

    public function test_book_author_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('book_author'), 'Book_author pivot table does not exist.');
    }

    public function test_book_supplier_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('book_supplier'), 'Book_supplier pivot table does not exist.');
    }

    public function test_book_subgenre_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('book_subgenre'), 'Book_subgenre pivot table does not exist.');
    }

}
