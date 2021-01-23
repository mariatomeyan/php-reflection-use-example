<?php
namespace App\Http\Cars;

use App\Car as CarModel;

class Car extends Accessor {

    private $car;
    public  $color;
    private $is_active;
    private $registration_number;

    public function __construct(CarModel $car_model = null)
    {
        $this->index();
        $this->car = $car_model ?? new CarModel();
    }
    public function index()
    {
        $this->color = 'red';
        $this->is_active = false;
        $this->registration_number = 'AS43543';
    }

    public function updateOrCreateRegistrationNumber(String $registration_number) : void
    {
        $this->registration_number = $registration_number;
    }



}
