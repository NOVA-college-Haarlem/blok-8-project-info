<?php

namespace Tests\Unit;

use Tests\TestCase;

class ModelAndControllerExistenceTest extends TestCase
{
    // Test if the Child model exists
    public function test_child_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Child::class), 'Child model does not exist.');
    }

    // Test if the Child controller exists
    public function test_child_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\ChildController::class), 'Child controller does not exist.');
    }

    // Test if the MedicalRecord model exists
    public function test_medical_record_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\MedicalRecord::class), 'MedicalRecord model does not exist.');
    }

    // Test if the MedicalRecord controller exists
    public function test_medical_record_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\MedicalRecordController::class), 'MedicalRecord controller does not exist.');
    }

    // Test if the Enrollment model exists
    public function test_enrollment_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Enrollment::class), 'Enrollment model does not exist.');
    }

    // Test if the Enrollment controller exists
    public function test_enrollment_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\EnrollmentController::class), 'Enrollment controller does not exist.');
    }

    // Test if the Parent model exists
    public function test_parent_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Parent::class), 'Parent model does not exist.');
    }

    // Test if the Parent controller exists
    public function test_parent_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\ParentController::class), 'Parent controller does not exist.');
    }
}
