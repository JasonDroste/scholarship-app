<?php

namespace App\Livewire;

use Livewire\Component;

class Application extends Component
{
    public $step = 1;
    public $name = "";
    public $email = "";
    public $dob = "";
    public $phone = "";
    public $address = "";
    public $city = "";
    public $state = "";
    public $zip = "";
    public $graduate_status = "";
    public $high_school = "";
    public $post_secondary = "";
    public $study_focus = "";
    public $first_gen = "";
    public $member_status = "";
    public $previous_scholarship = "";
    public $gpa = "";
    public $essay = "";
    public $short_answer = "";

    public function index()
    {
        return view('livewire.scholarship.application');
    }

    public function nextStep()
    {
        switch ($this->step){
            case '1':
                $this->validate([
                    'name' => 'required|min:3',
                    'email' => 'required|email|unique:users,email',
                    'dob' => 'required',
                    'phone' => 'required',
                ]);
                break;
            case '2':
                $this->validate([
                    'address' => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'zip' => 'required',
                ]);
                break;
            case '3':
                $this->validate([
                    'graduate_status' => 'required',
                    'high_school' => 'required',
                    'post_secondary' => 'required',
                    'study_focus' => 'required',
                    'first_gen' => 'required',
                    'member_status' => 'required',
                    'previous_scholarship' => 'required',
                    'gpa' => 'required',
                ]);
                break;
            case '4':
                $this->validate([
                    'essay' => 'required',
                    'short_answer' => 'required'
                ]);
                break;
            default:
                break;

        }
        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'dob' => 'required',
            'phone' => 'required', 
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'graduate_status' => 'required',
            'high_school' => 'required',
            'post_secondary' => 'required',
            'study_focus' => 'required',
            'first_gen' => 'required',
            'member_status' => 'required',
            'previous_scholarship' => 'required',
            'gpa' => 'required',    

        ]);
    }
}
