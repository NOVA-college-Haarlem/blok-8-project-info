<?php

namespace Tests\Feature\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MigrationExistanceTest extends TestCase
{
    public function test_child_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('children'), 'Children table does not exist.');
    }

    public function test_parent_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('parents'), 'Parents table does not exist.');
    }

    public function test_enrollment_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('enrollments'), 'Enrollments table does not exist.');
    }

    public function test_medical_record_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('medical_records'), 'Medical records table does not exist.');
    }

    public function test_user_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('users'), 'Users table does not exist.');
    }

    public function test_role_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('roles'), 'Roles table does not exist.');
    }

    
}
