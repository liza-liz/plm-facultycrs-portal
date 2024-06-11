<?php

namespace App\Filament\Pages;

use App\Models\Instructor;
use App\Models\User;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class FacultyInformation extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static string $view = 'faculty.pages.faculty-information';

    protected static ?int $navigationsort = 4;

    public $faculty;
    public $instructor;
    public $college;
    public $user_id;

    public function mount()
    {
        $this->user_id = Session::get("user_id");
        $this->faculty = User::find($this->user_id);
        $this->instructor = Instructor::where('instructor_code', $this->faculty->name)->first();
        $this->college = $this->instructor->college->college_name;
    }
}
