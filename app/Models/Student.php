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
