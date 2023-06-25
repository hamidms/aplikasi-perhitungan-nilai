<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nim',
        'quiz',
        'assigment',
        'attendance',
        'practice',
        'exam'
    ];

    protected $attributes = [
        'quiz' => 0,
        'assigment' => 0,
        'attendance' => 0,
        'practice' => 0,
        'exam' => 0
    ];

    public function getScores() {
        $quiz = $this->quiz;
        $assigment = $this->assigment;
        $attendance = $this->attendance;
        $practice = $this->practice;
        $exam = $this->exam;

        $scores = ($quiz + $assigment + $attendance + $practice + $exam) / 5;
        return $scores;
    }

    public function getGrades() {
        $grades = $this->getScores();
        
        if ($grades <= 65) {
            return 'D';
        } elseif ($grades <= 75) {
            return 'C';
        } elseif ($grades <= 85) {
            return 'B';
        } else {
            return 'A';
        }
    }
}
