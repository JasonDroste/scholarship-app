<?php

namespace App\Livewire;

use Livewire\Component;

class Application extends Component
{
    
    public $step = 1;
    public $total_steps = 4;

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

    public function render()
    {
        return view('livewire.application')->layout('livewire.layout.app');
    }

    public function nextStep()
    {
        $this->validateForm();
        if ($this->step < $this->total_steps) {
            $this->step++;
        }

    }

    public function previousStep()
    {
        if ($this->step > 1) {
            $this->step--;
        } 
    }

    public function submit()
    {

    }

    public function validateForm()
    {
        if($this->step==1){
            $validated=$this->validate([
                'name' => 'required|min:3',
                'email' => 'required|email|unique:users,email',
                'dob' => 'required',
                'phone' => 'required',
            ]);
        }elseif($this->step==2){
            $validated=$this->validate([
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip' => 'required',
            ]);
        }elseif($this->step==3){
            $validated=$this->validate([
                'graduate_status' => 'required',
                'high_school' => 'required',
                'post_secondary' => 'required',
                'study_focus' => 'required',
                'first_gen' => 'required',
                'member_status' => 'required',
                'previous_scholarship' => 'required',
                'gpa' => 'required',
            ]);
        }elseif($this->step==4){
             $validated=$this->validate([
                'essay' => 'required',
                'short_answer' => 'required'
            ]);
        }
    }
}
