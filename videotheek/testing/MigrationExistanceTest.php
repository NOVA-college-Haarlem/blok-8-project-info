<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;

class MigrationExistanceTest extends TestCase
{
    public function test_films_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('films'), 'Films table does not exist.');
    }

    public function test_directors_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('directors'), 'Directors table does not exist.');
    }

    public function test_genres_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('genres'), 'Genres table does not exist.');
    }

    public function test_subgenres_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('subgenres'), 'Subgenres table does not exist.');
    }

    public function test_production_houses_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('production_houses'), 'Production houses table does not exist.');
    }

    public function test_film_director_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('film_director'), 'Film_director pivot table does not exist.');
    }

    public function test_film_subgenre_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('film_subgenre'), 'Film_subgenre pivot table does not exist.');
    }
}
