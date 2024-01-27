<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;


use App\Models\Application;
use App\Models\CreditorNotification;
use App\Models\ObligatoryPayment;
use App\Models\User;
use App\Models\UserDoc;
use App\Models\BankAccount;
use App\Models\Credotor;

use App\Models\UserChild;

use App\Models\UserLandPlot;
use App\Models\UserResidentialHouse;
use App\Models\UserFlat;
use App\Models\UserGarage;
use App\Models\UserAnotherEstate;

use App\Models\UserCar;
use App\Models\UserCargoVehicle;
use App\Models\UserMotorizedTransport;
use App\Models\UserAgriculturalTechnique;
use App\Models\UserWaterTransport;
use App\Models\UserAirTransport;
use App\Models\UserOtherTransport;

use App\Models\UserCurrentPassport;
use App\Models\OldPassport;

class ApplicationController extends Controller
{

    public function update(Application $application)
    {
        $data=request()->validate(['employee_id'=>'required|integer']);

        $application->update($data);

        return redirect()->route('employee.main.index');
    }

    public function destroy(Application $application)
    {
        $buffer=UserDoc::query()->where('application_id', '=', $application->id);$buffer->delete();

        $buffer=UserChild::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserLandPlot::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserResidentialHouse::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserFlat::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserGarage::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserAnotherEstate::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserCar::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserCargoVehicle::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserMotorizedTransport::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserAgriculturalTechnique::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserWaterTransport::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserAirTransport::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=UserOtherTransport::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=BankAccount::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=ObligatoryPayment::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=Credotor::query()->where('application_id', '=', $application->id);$buffer->delete();
        $buffer=CreditorNotification::query()->where('application_id', '=', $application->id);$buffer->delete();

        $application->delete();
        return redirect()->route('employee.main.index');
    }
}
