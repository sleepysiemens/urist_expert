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

class DocumentsController extends Controller
{
    //================================CREATE NEW DOCUMENT PAGE================================\\
    public function create(Application $application)
    {
        $data=[
            'application_id'=>$application->id,
            'fio'=>$application->fio,
            'phone'=>$application->phone,
            'email'=>$application->email,
        ];
        $application_id=['application_id'=>$application->id];
        UserDoc::create($data);
        UserCurrentPassport::create($application_id);
        OldPassport::create($application_id);

        for($i=1; $i<=10;$i++)
        {
            $application_id=['application_id'=>$application->id, 'number'=>$i];
            UserChild::create($application_id);
            UserLandPlot::create($application_id);
            UserResidentialHouse::create($application_id);
            UserFlat::create($application_id);
            UserGarage::create($application_id);
            UserAnotherEstate::create($application_id);
            UserCar::create($application_id);
            UserCargoVehicle::create($application_id);
            UserMotorizedTransport::create($application_id);
            UserAgriculturalTechnique::create($application_id);
            UserWaterTransport::create($application_id);
            UserAirTransport::create($application_id);
            UserOtherTransport::create($application_id);
            BankAccount::create($application_id);
            ObligatoryPayment::create($application_id);
            Credotor::create($application_id);
            CreditorNotification::create($application_id);
        }

        $data=['stage'=>1];
        $application->update($data);

        $document=UserDoc::query()->where('application_id', '=',$application->id)->get();

        return redirect()->route('employee.documents.edit', $application->id);
    }


    //================================EDIT DOCUMENT PAGE================================\\
    public function edit(Application $application)
    {
        $stage=1;
        $document=UserDoc::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $bank_accounts=BankAccount::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $creditors=Credotor::query()->where('application_id','=',$application->id)->where('name','!=',NULL)->orderBy('id')->get();
        $users=User::query()->where('role','=','user')->orderBy('id')->get();
        $creditors_amount=Credotor::query()->where('application_id','=',$application->id)->count();

        $current_passport=UserCurrentPassport::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $old_passport=OldPassport::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $land_plots=UserLandPlot::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $residential_houses=UserResidentialHouse::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $flats=UserFlat::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $garages=UserGarage::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $another_estate=UserAnotherEstate::query()->where('application_id','=',$application->id)->orderBy('id')->get();

        $cars=UserCar::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $cargo_vehicles=UserCargoVehicle::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $motorized_transport=UserMotorizedTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $agricultural_techique=UserAgriculturalTechnique::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $water_transport=UserWaterTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $air_transport=UserAirTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $other_transports=UserOtherTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();

        return view('employee.documents.index', compact(['document',
            'application',
            'bank_accounts',
            'users',
            'creditors_amount',
            'current_passport',
            'old_passport',
            'stage',
            'land_plots',
            'residential_houses',
            'flats',
            'garages',
            'another_estate',
            'cars',
            'cargo_vehicles',
            'motorized_transport',
            'agricultural_techique',
            'water_transport',
            'air_transport',
            'other_transports',
            'creditors'
        ]));
    }


    //================================UPDATE DOCUMENT PAGE================================\\
    public function update(UserDoc $document)
    {
        $data=request()->all();
        //birth_certificate
        if(isset($data['birth_certificate']))
        {
            $i=0;
            foreach ($data['birth_certificate'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/birth_certificates/', $name);

                $sql_data=['birth_certificate'=>$name];
                $user_children=UserChild::query()->where('application_id','=',$data['application_id'])->get();

                $user_children[$i]->update($sql_data);
                $i++;
            }
        }
        //marriage
        if(isset($data['is_married']) and $data['is_married']==1)
        {
            if(request()->hasFile('marriage_certificate'))
            {
                $name=request()->file('marriage_certificate')->getClientOriginalName();
                $file = request()->file('marriage_certificate');
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/marriage_certificates/', $name);

                $sql_data['marriage_certificate']=$name;
                $document->update($sql_data);
            }
            if(request()->hasFile('spouse_passport'))
            {
                $name=request()->file('spouse_passport')->getClientOriginalName();
                $file = request()->file('spouse_passport');
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/marriage_certificates/', $name);

                $sql_data['spouse_passport']=$name;
                $document->update($sql_data);
            }
            if(request()->hasFile('spouse_snils'))
            {
                $name=request()->file('spouse_snils')->getClientOriginalName();
                $file = request()->file('spouse_snils');
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/marriage_certificates/', $name);

                $sql_data['spouse_snils']=$name;
                $document->update($sql_data);
            }
            if(request()->hasFile('spouse_inn'))
            {
                $name=request()->file('spouse_inn')->getClientOriginalName();
                $file = request()->file('spouse_inn');
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/marriage_certificates/', $name);

                $sql_data['spouse_inn']=$name;
                $document->update($sql_data);
            }
        }
        //work
        if(isset($data['is_work_official']) and $data['is_work_official']==1)
        {
            if(request()->hasFile('employment_history'))
            {
                $name=request()->file('employment_history')->getClientOriginalName();
                $file = request()->file('employment_history');
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/employment_history/', $name);

                $sql_data=['employment_history'=>$name];
                $document->update($sql_data);
            }
        }
        //pensia
        if(isset($data['is_pensioner']) and $data['is_pensioner']==1)
        {
            if(request()->hasFile('pensioner_certificate'))
            {
                $name=request()->file('pensioner_certificate')->getClientOriginalName();
                $file = request()->file('pensioner_certificate');
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/pensioner_certificate/', $name);

                $sql_data=['pensioner_certificate'=>$name];
                $document->update($sql_data);
            }
        }
        //income
            if(request()->hasFile('2_ndfl'))
            {
                $name=request()->file('2_ndfl')->getClientOriginalName();
                $file = request()->file('2_ndfl');
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/2_ndfl/', $name);

                $sql_data=['2_ndfl'=>$name];
                $document->update($sql_data);
            }
        if(request()->hasFile('ils'))
        {
            $name=request()->file('ils')->getClientOriginalName();
            $file = request()->file('ils');
            $file->move(public_path() . '/user_docs/'.$data['fio'].'/ils/', $name);

            $sql_data=['ils'=>$name];
            $document->update($sql_data);
        }

        if(request()->hasFile('appointment_certificate_pensions'))
        {
            $name=request()->file('appointment_certificate_pensions')->getClientOriginalName();
            $file = request()->file('appointment_certificate_pensions');
            $file->move(public_path() . '/user_docs/'.$data['fio'].'/appointment_certificate_pensions/', $name);

            $sql_data=['appointment_certificate_pensions'=>$name];
            $document->update($sql_data);
        }

        //estate
        if(request()->hasFile('estate_egrn'))
        {
            $name=request()->file('estate_egrn')->getClientOriginalName();
            $file = request()->file('estate_egrn');
            $file->move(public_path() . '/user_docs/'.$data['fio'].'/estate_egrn/', $name);

            $sql_data=['estate_egrn'=>$name];
            $document->update($sql_data);
        }
        //land_plot
        if(isset($data['land_plot_amount']) and $data['land_plot_amount']>0)
        {
            for($i=1;$i<=$data['land_plot_amount'];$i++)
            {
                $land_plot=UserLandPlot::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['land_plot_certificate_'.$i]))
                {
                    foreach ($data['land_plot_certificate_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/land_plot_certificate_/', $name);

                        $sql_data=[
                            'name'=>$data['land_plot_name_'.$i],
                            'address'=>$data['land_plot_address_'.$i],
                            'type'=>$data['land_plot_type_'.$i],
                            'square'=>$data['land_plot_square_'.$i],
                            'cost'=>$data['land_plot_cost_'.$i],
                            'deposit'=>$data['land_plot_deposit_'.$i],
                            'certificate'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'name'=>$data['land_plot_name_'.$i],
                        'address'=>$data['land_plot_address_'.$i],
                        'type'=>$data['land_plot_type_'.$i],
                        'square'=>$data['land_plot_square_'.$i],
                        'cost'=>$data['land_plot_cost_'.$i],
                        'deposit'=>$data['land_plot_deposit_'.$i],
                    ];
                }
                $land_plot[0]->update($sql_data);
            }
        }
        //residential_houses
        if(isset($data['residential_houses_amount']) and $data['residential_houses_amount']>0)
        {
            for($i=1;$i<=$data['residential_houses_amount'];$i++)
            {
                $residential_house=UserResidentialHouse::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['residential_houses_certificate_'.$i]))
                {
                    foreach ($data['residential_houses_certificate_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/residential_houses/', $name);

                        $sql_data=[
                            'name'=>$data['residential_houses_name_'.$i],
                            'address'=>$data['residential_houses_address_'.$i],
                            'type'=>$data['residential_houses_type_'.$i],
                            'square'=>$data['residential_houses_square_'.$i],
                            'cost'=>$data['residential_houses_cost_'.$i],
                            'deposit'=>$data['residential_houses_deposit_'.$i],
                            'certificate'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'name'=>$data['residential_houses_name_'.$i],
                        'address'=>$data['residential_houses_address_'.$i],
                        'type'=>$data['residential_houses_type_'.$i],
                        'square'=>$data['residential_houses_square_'.$i],
                        'cost'=>$data['residential_houses_cost_'.$i],
                        'deposit'=>$data['residential_houses_deposit_'.$i],
                    ];
                }
                $residential_house[0]->update($sql_data);
            }
        }
        //flats
        if(isset($data['flats_amount']) and $data['flats_amount']>0)
        {
            for($i=1;$i<=$data['flats_amount'];$i++)
            {
                $flat=UserFlat::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['flats_certificate_'.$i]))
                {
                    foreach ($data['flats_certificate_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/flats/', $name);

                        $sql_data=[
                            'name'=>$data['flats_name_'.$i],
                            'address'=>$data['flats_address_'.$i],
                            'type'=>$data['flats_type_'.$i],
                            'square'=>$data['flats_square_'.$i],
                            'cost'=>$data['flats_cost_'.$i],
                            'deposit'=>$data['flats_deposit_'.$i],
                            'certificate'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'name'=>$data['flats_name_'.$i],
                        'address'=>$data['flats_address_'.$i],
                        'type'=>$data['flats_type_'.$i],
                        'square'=>$data['flats_square_'.$i],
                        'cost'=>$data['flats_cost_'.$i],
                        'deposit'=>$data['flats_deposit_'.$i],
                    ];
                }
                $flat[0]->update($sql_data);
            }
        }
        //garages
        if(isset($data['garages_amount']) and $data['garages_amount']>0)
        {
            for($i=1;$i<=$data['garages_amount'];$i++)
            {
                $garage=UserGarage::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['garages_certificate_'.$i]))
                {
                    foreach ($data['garages_certificate_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/garages/', $name);

                        $sql_data=[
                            'name'=>$data['garages_name_'.$i],
                            'address'=>$data['garages_address_'.$i],
                            'type'=>$data['garages_type_'.$i],
                            'square'=>$data['garages_square_'.$i],
                            'cost'=>$data['garages_cost_'.$i],
                            'deposit'=>$data['garages_deposit_'.$i],
                            'certificate'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'name'=>$data['garages_name_'.$i],
                        'address'=>$data['garages_address_'.$i],
                        'type'=>$data['garages_type_'.$i],
                        'square'=>$data['garages_square_'.$i],
                        'cost'=>$data['garages_cost_'.$i],
                        'deposit'=>$data['garages_deposit_'.$i],
                    ];
                }
                $garage[0]->update($sql_data);
            }
        }
        //another_estate
        if(isset($data['another_estate_amount']) and $data['another_estate_amount']>0)
        {
            for($i=1;$i<=$data['another_estate_amount'];$i++)
            {
                $another_estate=UserAnotherEstate::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['another_estate_certificate_'.$i]))
                {
                    foreach ($data['another_estate_certificate_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/another_estate/', $name);

                        $sql_data=[
                            'name'=>$data['another_estate_name_'.$i],
                            'address'=>$data['another_estate_address_'.$i],
                            'type'=>$data['another_estate_type_'.$i],
                            'square'=>$data['another_estate_square_'.$i],
                            'cost'=>$data['another_estate_cost_'.$i],
                            'deposit'=>$data['another_estate_deposit_'.$i],
                            'certificate'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'name'=>$data['another_estate_name_'.$i],
                        'address'=>$data['another_estate_address_'.$i],
                        'type'=>$data['another_estate_type_'.$i],
                        'square'=>$data['another_estate_square_'.$i],
                        'cost'=>$data['another_estate_cost_'.$i],
                        'deposit'=>$data['another_estate_deposit_'.$i],
                    ];
                }
                $another_estate[0]->update($sql_data);
            }
        }

        //cars
        if(isset($data['cars_amount']) and $data['cars_amount']>0)
        {
            for($i=1;$i<=$data['cars_amount'];$i++)
            {
                $car=UserCar::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['cars_certificate_'.$i]))
                {
                    foreach ($data['cars_pts_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/cars/', $name);

                        $sql_data=[
                            'id_number'=>$data['cars_id_number_'.$i],
                            'type'=>$data['cars_type_'.$i],
                            'address'=>$data['cars_address_'.$i],
                            'cost'=>$data['cars_cost_'.$i],
                            'deposit'=>$data['cars_deposit_'.$i],
                            'pts'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'id_number'=>$data['cars_id_number_'.$i],
                        'type'=>$data['cars_type_'.$i],
                        'address'=>$data['cars_address_'.$i],
                        'cost'=>$data['cars_cost_'.$i],
                        'deposit'=>$data['cars_deposit_'.$i],
                    ];
                }
                $car[0]->update($sql_data);
            }
        }
        //cargo_vehicles
        if(isset($data['cargo_vehicles_amount']) and $data['cargo_vehicles_amount']>0)
        {
            for($i=1;$i<=$data['cargo_vehicles_amount'];$i++)
            {
                $cargo=UserCargoVehicle::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['cargo_vehicles_certificate_'.$i]))
                {
                    foreach ($data['cargo_vehicles_pts_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/cargo_vehicles/', $name);

                        $sql_data=[
                            'id_number'=>$data['cargo_vehicles_id_number_'.$i],
                            'type'=>$data['cargo_vehicles_type_'.$i],
                            'address'=>$data['cargo_vehicles_address_'.$i],
                            'cost'=>$data['cargo_vehicles_cost_'.$i],
                            'deposit'=>$data['cargo_vehicles_deposit_'.$i],
                            'pts'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'id_number'=>$data['cargo_vehicles_id_number_'.$i],
                        'type'=>$data['cargo_vehicles_type_'.$i],
                        'address'=>$data['cargo_vehicles_address_'.$i],
                        'cost'=>$data['cargo_vehicles_cost_'.$i],
                        'deposit'=>$data['cargo_vehicles_deposit_'.$i]
                    ];
                }
                $cargo[0]->update($sql_data);
            }
        }
        //motorized_transport
        if(isset($data['motorized_transport_amount']) and $data['motorized_transport_amount']>0)
        {
            for($i=1;$i<=$data['motorized_transport_amount'];$i++)
            {
                $motorized=UserMotorizedTransport::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['motorized_transport_certificate_'.$i]))
                {
                    foreach ($data['motorized_transport_pts_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/motorized_transport/', $name);

                        $sql_data=[
                            'id_number'=>$data['motorized_transport_id_number_'.$i],
                            'type'=>$data['motorized_transport_type_'.$i],
                            'address'=>$data['motorized_transport_address_'.$i],
                            'cost'=>$data['motorized_transport_cost_'.$i],
                            'deposit'=>$data['motorized_transport_deposit_'.$i],
                            'pts'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'id_number'=>$data['motorized_transport_id_number_'.$i],
                        'type'=>$data['motorized_transport_type_'.$i],
                        'address'=>$data['motorized_transport_address_'.$i],
                        'cost'=>$data['motorized_transport_cost_'.$i],
                        'deposit'=>$data['motorized_transport_deposit_'.$i]
                    ];
                }
                $motorized[0]->update($sql_data);
            }
        }
        //agricultural_technique
        if(isset($data['agricultural_technique_amount']) and $data['agricultural_technique_amount']>0)
        {
            for($i=1;$i<=$data['agricultural_technique_amount'];$i++)
            {
                $agricultural=UserAgriculturalTechnique::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['agricultural_technique_certificate_'.$i]))
                {
                    foreach ($data['agricultural_technique_pts_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/agricultural_technique/', $name);

                        $sql_data=[
                            'id_number'=>$data['agricultural_technique_id_number_'.$i],
                            'type'=>$data['agricultural_technique_type_'.$i],
                            'address'=>$data['agricultural_technique_address_'.$i],
                            'cost'=>$data['agricultural_technique_cost_'.$i],
                            'deposit'=>$data['agricultural_technique_deposit_'.$i],
                            'pts'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'id_number'=>$data['agricultural_technique_id_number_'.$i],
                        'type'=>$data['agricultural_technique_type_'.$i],
                        'address'=>$data['agricultural_technique_address_'.$i],
                        'cost'=>$data['agricultural_technique_cost_'.$i],
                        'deposit'=>$data['agricultural_technique_deposit_'.$i],
                    ];
                }
                $agricultural[0]->update($sql_data);
            }
        }
        //water_transport
        if(isset($data['water_transport_amount']) and $data['water_transport_amount']>0)
        {
            for($i=1;$i<=$data['water_transport_amount'];$i++)
            {
                $water_transport=UserWaterTransport::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['water_transport_certificate_'.$i]))
                {
                    foreach ($data['water_transport_pts_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/water_transport/', $name);

                        $sql_data=[
                            'id_number'=>$data['water_transport_id_number_'.$i],
                            'type'=>$data['water_transport_type_'.$i],
                            'address'=>$data['water_transport_address_'.$i],
                            'cost'=>$data['water_transport_cost_'.$i],
                            'deposit'=>$data['water_transport_deposit_'.$i],
                            'pts'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'id_number'=>$data['water_transport_id_number_'.$i],
                        'type'=>$data['water_transport_type_'.$i],
                        'address'=>$data['water_transport_address_'.$i],
                        'cost'=>$data['water_transport_cost_'.$i],
                        'deposit'=>$data['water_transport_deposit_'.$i],
                    ];
                }
                $water_transport[0]->update($sql_data);
            }
        }
        //air_transport
        if(isset($data['air_transport_amount']) and $data['air_transport_amount']>0)
        {
            for($i=1;$i<=$data['air_transport_amount'];$i++)
            {
                $air_transport=UserAirTransport::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['air_transport_certificate_'.$i]))
                {
                    foreach ($data['air_transport_pts_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/air_transport/', $name);

                        $sql_data=[
                            'id_number'=>$data['air_transport_id_number_'.$i],
                            'type'=>$data['air_transport_type_'.$i],
                            'address'=>$data['air_transport_address_'.$i],
                            'cost'=>$data['air_transport_cost_'.$i],
                            'deposit'=>$data['air_transport_deposit_'.$i],
                            'pts'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'id_number'=>$data['air_transport_id_number_'.$i],
                        'type'=>$data['air_transport_type_'.$i],
                        'address'=>$data['air_transport_address_'.$i],
                        'cost'=>$data['air_transport_cost_'.$i],
                        'deposit'=>$data['air_transport_deposit_'.$i],
                    ];
                }
                $air_transport[0]->update($sql_data);
            }
        }
        //other_transport
        if(isset($data['other_transport_amount']) and $data['other_transport_amount']>0)
        {
            for($i=1;$i<=$data['other_transport_amount'];$i++)
            {
                $other_transport=UserOtherTransport::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['other_transport_certificate_'.$i]))
                {
                    foreach ($data['other_transport_pts_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/other_transport/', $name);

                        $sql_data=[
                            'id_number'=>$data['other_transport_id_number_'.$i],
                            'type'=>$data['other_transport_type_'.$i],
                            'address'=>$data['other_transport_address_'.$i],
                            'cost'=>$data['other_transport_cost_'.$i],
                            'deposit'=>$data['other_transport_deposit_'.$i],
                            'pts'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'id_number'=>$data['other_transport_id_number_'.$i],
                        'type'=>$data['other_transport_type_'.$i],
                        'address'=>$data['other_transport_address_'.$i],
                        'cost'=>$data['other_transport_cost_'.$i],
                        'deposit'=>$data['other_transport_deposit_'.$i],
                    ];
                }
                $other_transport[0]->update($sql_data);
            }
        }

        //bank_accounts
        if(isset($data['bank_accounts_amount']) and $data['bank_accounts_amount']>0)
        {
            for($i=1;$i<=$data['bank_accounts_amount'];$i++)
            {
                $bank_account=BankAccount::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();

                if(isset($data['bank_account_account_statement_'.$i]))
                {
                    foreach ($data['bank_account_account_statement_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/bank_account_statement_/', $name);

                        $sql_data=[
                            'bank_name'=>$data['bank_accounts_bank_name_'.$i],
                            'kind_of_account'=>$data['bank_accounts_kind_of_account_'.$i],
                            'creation_date'=>$data['bank_accounts_creation_date_'.$i],
                            'bank_account_rest'=>$data['bank_account_rest_'.$i],
                            'account_statement'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'bank_name'=>$data['bank_accounts_bank_name_'.$i],
                        'kind_of_account'=>$data['bank_accounts_kind_of_account_'.$i],
                        'creation_date'=>$data['bank_accounts_creation_date_'.$i],
                        'bank_account_rest'=>$data['bank_account_rest_'.$i],
                    ];
                }
                //BankAccount::create($sql_data);
                $bank_account[0]->update($sql_data);
            }
        }

        //creditors
        if(isset($data['creditors_amount']) and $data['creditors_amount']>0)
        {
            for($i=1;$i<=$data['creditors_amount'];$i++)
            {
                $creditor=Credotor::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();
                if(isset($data['creditors_statement_'.$i]))
                {
                    foreach ($data['creditors_statement_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/creditors_statement/', $name);

                        $sql_data=[
                            'name'=>$data['creditors_name_'.$i],
                            'kind_of_credit'=>$data['creditors_kind_of_credit_'.$i],
                            'region'=>$data['creditors_region_'.$i],
                            'statement'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'name'=>$data['creditors_name_'.$i],
                        'kind_of_credit'=>$data['creditors_kind_of_credit_'.$i],
                        'region'=>$data['creditors_region_'.$i],
                    ];
                }
                //BankAccount::create($sql_data);
                $creditor[0]->update($sql_data);
            }
        }

        //obligatory_payments
        if(isset($data['obligatory_payments_amount']) and $data['obligatory_payments_amount']>0)
        {
            for($i=1;$i<=$data['obligatory_payments_amount'];$i++)
            {
                $obligatory_payment=ObligatoryPayment::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();
                $sql_data=[
                    'tax_name'=>$data['obligatory_payments_tax_name_'.$i],
                    'arrears'=>$data['obligatory_arrears_'.$i],
                    'kind_of_credit'=>$data['obligatory_kind_of_credit_'.$i],
                    'main_duty'=>$data['obligatory_main_duty_'.$i],
                    'expired_duty'=>$data['obligatory_expired_duty_'.$i],
                    'fines'=>$data['obligatory_fines_'.$i],
                ];


                if(isset($data['obligatory_tax_requirements_'.$i]))
                {
                    foreach ($data['obligatory_tax_requirements_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/obligatory_tax_requirements_/', $name);

                        $sql_data['tax_requirements']=$name;
                    }
                }

                if(isset($data['obligatory_certificate_of_absence_'.$i]))
                {
                    foreach ($data['obligatory_certificate_of_absence_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/obligatory_certificate_of_absence_/', $name);

                        $sql_data['certificate_of_absence']=$name;
                    }
                }

                if(isset($data['obligatory_state_duty_'.$i]))
                {
                    foreach ($data['obligatory_state_duty_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/obligatory_state_duty_/', $name);

                        $sql_data['state_duty']=$name;
                    }
                }

                if(isset($data['obligatory_court_deposit_'.$i]))
                {
                    foreach ($data['obligatory_court_deposit_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/obligatory_court_deposit_/', $name);

                        $sql_data['court_deposit']=$name;
                    }
                }
                $obligatory_payment[0]->update($sql_data);
            }
        }

        //creditor_notifications
        if(isset($data['creditor_notifications_certificate']))
        {
            $i=0;
            foreach ($data['creditor_notifications_certificate'] as $cetificate)
            {
                $name=$cetificate->getClientOriginalName();
                $file = $cetificate;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/creditor_notifications_certificate/', $name);

                $sql_data=['certificate'=>$name];
                $creditor_notifications=CreditorNotification::query()->where('application_id','=',$data['application_id'])->get();

                $creditor_notifications[$i]->update($sql_data);
                $i++;
            }
        }

        //current_passport
        $current_pasport_data=
            [
              'application_id'=>$data['application_id'],
              'surname'=>$data['current_surname'],
              'name'=>$data['current_name'],
              'parent_name'=>$data['current_parent_name'],
              'serial'=>$data['current_passport_serial'],
              'number'=>$data['current_passport_number'],
              'kem'=>$data['current_passport_kem'],
              'date_of_issue'=>$data['current_date_of_issue'],
              'date_of_birth'=>$data['current_date_of_birth'],
              'department_code'=>$data['current_department_code'],
              'place_of_birth'=>$data['current_place_of_birth'],
              'inn'=>$data['current_inn'],
              'snils'=>$data['current_snils'],
            ];

        $current_passport=UserCurrentPassport::query()->where('application_id','=',$data['application_id'])->get();
        $current_passport[0]->update($current_pasport_data);


        $old_pasport_data=
            [
                'application_id'=>$data['application_id'],
                'surname'=>$data['old_surname'],
                'name'=>$data['old_name'],
                'parent_name'=>$data['old_parent_name'],
                'serial'=>$data['old_passport_serial'],
                'number'=>$data['old_passport_number'],
                'kem'=>$data['old_passport_kem'],
                'date_of_issue'=>$data['old_date_of_issue'],
                'date_of_birth'=>$data['old_date_of_birth'],
                'department_code'=>$data['old_department_code'],
                'place_of_birth'=>$data['old_place_of_birth'],
                'inn'=>$data['old_inn'],
                'snils'=>$data['old_snils'],
            ];

        $old_pasport=OldPassport::query()->where('application_id','=',$data['application_id'])->get();
        $old_pasport[0]->update($old_pasport_data);

        //unset for UserDocs
        unset($data['_token']);
        unset($data['_method']);
        unset($data['birth_certificate']);

        $data['name']=$data['current_name'];
        $data['surname']=$data['current_surname'];
        $data['parent_name']=$data['current_parent_name'];

        unset($data['current_surname']);
        unset($data['current_name']);
        unset($data['current_parent_name']);
        unset($data['current_passport_serial']);
        unset($data['current_passport_number']);
        unset($data['current_passport_kem']);
        unset($data['current_date_of_issue']);
        unset($data['current_date_of_birth']);
        unset($data['current_department_code']);
        unset($data['current_place_of_birth']);
        unset($data['current_inn']);
        unset($data['current_snils']);

        unset($data['old_surname']);
        unset($data['old_name']);
        unset($data['old_parent_name']);
        unset($data['old_passport_serial']);
        unset($data['old_passport_number']);
        unset($data['old_passport_kem']);
        unset($data['old_date_of_issue']);
        unset($data['old_date_of_birth']);
        unset($data['old_department_code']);
        unset($data['old_place_of_birth']);
        unset($data['old_inn']);
        unset($data['old_snils']);


        for($i=1;$i<=10;$i++)
        {
            unset($data['land_plot_name_'.$i]);
            unset($data['land_plot_type_'.$i]);
            unset($data['land_plot_square_'.$i]);
            unset($data['land_plot_address_'.$i]);
            unset($data['land_plot_cost_'.$i]);
            unset($data['land_plot_deposit_'.$i]);

            unset($data['residential_houses_name_'.$i]);
            unset($data['residential_houses_type_'.$i]);
            unset($data['residential_houses_square_'.$i]);
            unset($data['residential_houses_address_'.$i]);
            unset($data['residential_houses_cost_'.$i]);
            unset($data['residential_houses_deposit_'.$i]);

            unset($data['flats_name_'.$i]);
            unset($data['flats_type_'.$i]);
            unset($data['flats_square_'.$i]);
            unset($data['flats_address_'.$i]);
            unset($data['flats_cost_'.$i]);
            unset($data['flats_deposit_'.$i]);

            unset($data['garages_name_'.$i]);
            unset($data['garages_type_'.$i]);
            unset($data['garages_square_'.$i]);
            unset($data['garages_address_'.$i]);
            unset($data['garages_cost_'.$i]);
            unset($data['garages_deposit_'.$i]);

            unset($data['another_estate_name_'.$i]);
            unset($data['another_estate_type_'.$i]);
            unset($data['another_estate_square_'.$i]);
            unset($data['another_estate_address_'.$i]);
            unset($data['another_estate_cost_'.$i]);
            unset($data['another_estate_deposit_'.$i]);

            unset($data['cargo_vehicles_id_number_'.$i]);
            unset($data['cargo_vehicles_type_'.$i]);
            unset($data['cargo_vehicles_address_'.$i]);
            unset($data['cargo_vehicles_cost_'.$i]);
            unset($data['cargo_vehicles_deposit_'.$i]);
            unset($data['cargo_vehicles_pts_'.$i]);

            unset($data['motorized_transport_id_number_'.$i]);
            unset($data['motorized_transport_type_'.$i]);
            unset($data['motorized_transport_address_'.$i]);
            unset($data['motorized_transport_cost_'.$i]);
            unset($data['motorized_transport_deposit_'.$i]);
            unset($data['motorized_transport_pts_'.$i]);

            unset($data['agricultural_technique_id_number_'.$i]);
            unset($data['agricultural_technique_type_'.$i]);
            unset($data['agricultural_technique_address_'.$i]);
            unset($data['agricultural_technique_cost_'.$i]);
            unset($data['agricultural_technique_deposit_'.$i]);
            unset($data['agricultural_technique_pts_'.$i]);

            unset($data['water_transport_id_number_'.$i]);
            unset($data['water_transport_type_'.$i]);
            unset($data['water_transport_address_'.$i]);
            unset($data['water_transport_cost_'.$i]);
            unset($data['water_transport_deposit_'.$i]);
            unset($data['water_transport_pts_'.$i]);

            unset($data['air_transport_id_number_'.$i]);
            unset($data['air_transport_type_'.$i]);
            unset($data['air_transport_address_'.$i]);
            unset($data['air_transport_cost_'.$i]);
            unset($data['air_transport_deposit_'.$i]);
            unset($data['air_transport_pts_'.$i]);

            unset($data['other_transport_id_number_'.$i]);
            unset($data['other_transport_type_'.$i]);
            unset($data['other_transport_address_'.$i]);
            unset($data['other_transport_cost_'.$i]);
            unset($data['other_transport_deposit_'.$i]);
            unset($data['other_transport_pts_'.$i]);

            unset($data['cars_id_number_'.$i]);
            unset($data['cars_type_'.$i]);
            unset($data['cars_address_'.$i]);
            unset($data['cars_cost_'.$i]);
            unset($data['cars_deposit_'.$i]);
            unset($data['cars_pts_'.$i]);

            unset($data['bank_accounts_bank_name_'.$i]);
            unset($data['bank_accounts_kind_of_account_'.$i]);
            unset($data['bank_accounts_creation_date_'.$i]);
            unset($data['bank_account_rest_'.$i]);

            unset($data['creditors_name_'.$i]);
            unset($data['creditors_region_'.$i]);
            unset($data['creditors_kind_of_credit_'.$i]);
            unset($data['creditors_statement_'.$i]);

            unset($data['obligatory_payments_tax_name_'.$i]);
            unset($data['obligatory_arrears_'.$i]);
            unset($data['obligatory_kind_of_credit_'.$i]);
            unset($data['obligatory_main_duty_'.$i]);
            unset($data['obligatory_expired_duty_'.$i]);
            unset($data['obligatory_fines_'.$i]);
        }

        if(!isset($data['address_matches'])) $data['address_matches']=0;

        foreach ($data as $key => $value)
        {
            if ($value === null) {
                unset($data[$key]);
            }
        }

        $document->update($data);

        return redirect()->route('employee.documents.edit', request()->application_id);
    }
    //================================/UPDATE DOCUMENT PAGE================================\\

    //================================UPLOAD DOCUMENTS================================\\
    public function add_file(UserDoc $document)
    {
        $data=request()->all();
        if(isset($data['passport_file']))
        {
                $name=$data['passport_file']->getClientOriginalName();
                $file = $data['passport_file'];
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/passport/', $name);

                $sql_data=['passport_file'=>$name];
        }

        if(isset($data['inn_file']))
        {
                $name=$data['inn_file']->getClientOriginalName();
                $file = $data['inn_file'];
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/inn/', $name);

                $sql_data=['inn_file'=>$name];
        }

        if(isset($data['snils_file']))
        {
                $name=$data['snils_file']->getClientOriginalName();
                $file = $data['snils_file'];
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/snils/', $name);

                $sql_data=['snils_file'=>$name];
        }

        if(isset($data['employment_history']))
        {
                $name=$data['employment_history']->getClientOriginalName();
                $file = $data['employment_history'];
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/employment_history/', $name);

                $sql_data=['employment_history'=>$name];
        }

        if(isset($data['marriage_certificate']))
        {
                $name=$data['marriage_certificate']->getClientOriginalName();
                $file = $data['marriage_certificate'];
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/marriage_certificate/', $name);

                $sql_data=['marriage_certificate'=>$name];
        }
        $document->update($sql_data);

        return redirect()->route('employee.documents.edit', request()->application_id);
    }
    //================================/UPLOAD DOCUMENTS================================\\


    //================================SECOND STAGE DOCUMENTS================================\\
    public function second_stage(Application $application)
    {
        $sql_data=['stage'=>2];
        $application->update($sql_data);
        return redirect()->route('employee.documents.inventory', $application->id);
    }
    //================================/SECOND STAGE DOCUMENTS================================\\

    //================================STAGE 2 DOCUMENTS================================\\
    public function inventory(Application $application)
    {
        $stage=2;
        $document=UserDoc::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $bank_accounts=BankAccount::query()->where('application_id','=',$application->id)->where('bank_name','!=','NULL')->orderBy('id')->get();
        $creditors=Credotor::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $users=User::query()->where('role','=','user')->orderBy('id')->get();
        $creditors_amount=Credotor::query()->where('application_id','=',$application->id)->count();

        $current_passport=UserCurrentPassport::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $old_passport=OldPassport::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $land_plots=UserLandPlot::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $residential_houses=UserResidentialHouse::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $flats=UserFlat::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $garages=UserGarage::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $another_estates=UserAnotherEstate::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();

        $cars=UserCar::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $cargo_vehicles=UserCargoVehicle::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $motorized_transports=UserMotorizedTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $agricultural_techiques=UserAgriculturalTechnique::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $water_transports=UserWaterTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $air_transports=UserAirTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $other_transports=UserOtherTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();

        return view('employee.documents.inventory', compact(['document',
            'application',
            'bank_accounts',
            'users',
            'creditors_amount',
            'current_passport',
            'old_passport',
            'stage',
            'land_plots',
            'residential_houses',
            'flats',
            'garages',
            'another_estates',
            'cars',
            'cargo_vehicles',
            'motorized_transports',
            'agricultural_techiques',
            'water_transports',
            'air_transports',
            'other_transports',
        ]));
    }

    public function bfl(Application $application)
    {
        $stage=2;
        $document=UserDoc::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $bank_accounts=BankAccount::query()->where('application_id','=',$application->id)->where('bank_name','!=','NULL')->orderBy('id')->get();
        $creditors=Credotor::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $users=User::query()->where('role','=','user')->orderBy('id')->get();
        $creditors_amount=Credotor::query()->where('application_id','=',$application->id)->count();

        $current_passport=UserCurrentPassport::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $old_passport=OldPassport::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $land_plots=UserLandPlot::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $residential_houses=UserResidentialHouse::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $flats=UserFlat::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $garages=UserGarage::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $another_estates=UserAnotherEstate::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();

        $cars=UserCar::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $cargo_vehicles=UserCargoVehicle::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $motorized_transports=UserMotorizedTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $agricultural_techiques=UserAgriculturalTechnique::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $water_transports=UserWaterTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $air_transports=UserAirTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $other_transports=UserOtherTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();

        return view('employee.documents.bfl', compact(['document',
            'application',
            'bank_accounts',
            'users',
            'creditors_amount',
            'current_passport',
            'old_passport',
            'stage',
            'land_plots',
            'residential_houses',
            'flats',
            'garages',
            'another_estates',
            'cars',
            'cargo_vehicles',
            'motorized_transports',
            'agricultural_techiques',
            'water_transports',
            'air_transports',
            'other_transports',
        ]));
    }

    public function creditors(Application $application)
    {
        $stage=2;
        $document=UserDoc::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $bank_accounts=BankAccount::query()->where('application_id','=',$application->id)->where('bank_name','!=','NULL')->orderBy('id')->get();
        $creditors=Credotor::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $users=User::query()->where('role','=','user')->orderBy('id')->get();
        $creditors_amount=Credotor::query()->where('application_id','=',$application->id)->count();
        $obligatory_payments=ObligatoryPayment::query()->where('application_id','=',$application->id)->get();

        $current_passport=UserCurrentPassport::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $old_passport=OldPassport::query()->where('application_id','=',$application->id)->orderBy('id')->get();
        $land_plots=UserLandPlot::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $residential_houses=UserResidentialHouse::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $flats=UserFlat::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $garages=UserGarage::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();
        $another_estates=UserAnotherEstate::query()->where('application_id','=',$application->id)->where('name','!=','NULL')->orderBy('id')->get();

        $cars=UserCar::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $cargo_vehicles=UserCargoVehicle::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $motorized_transports=UserMotorizedTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $agricultural_techiques=UserAgriculturalTechnique::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $water_transports=UserWaterTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $air_transports=UserAirTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();
        $other_transports=UserOtherTransport::query()->where('application_id','=',$application->id)->where('id_number','!=','NULL')->orderBy('id')->get();

        return view('employee.documents.creditors', compact(['document',
            'application',
            'bank_accounts',
            'users',
            'creditors_amount',
            'current_passport',
            'old_passport',
            'stage',
            'land_plots',
            'residential_houses',
            'flats',
            'garages',
            'another_estates',
            'cars',
            'cargo_vehicles',
            'motorized_transports',
            'agricultural_techiques',
            'water_transports',
            'air_transports',
            'other_transports',
            'creditors',
            'obligatory_payments',
        ]));
    }


    //================================/STAGE 2 DOCUMENTS================================\\


}
