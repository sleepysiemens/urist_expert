<?php

namespace App\Http\Controllers\Admin;

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
            UserCargoVehicle::create($application_id);
            UserMotorizedTransport::create($application_id);
            UserAgriculturalTechnique::create($application_id);
            UserWaterTransport::create($application_id);
            UserAirTransport::create($application_id);
            UserOtherTransport::create($application_id);
            BankAccount::create($application_id);
            Credotor::create($application_id);
            CreditorNotification::create($application_id);
        }

        $data=['stage'=>1];
        $application->update($data);

        $document=UserDoc::query()->where('application_id', '=',$application->id)->get();

        return redirect()->route('admin.documents.edit', $document[0]->id);
    }


    //================================EDIT DOCUMENT PAGE================================\\
    public function edit(Application $application)
    {
        $page=1;
        $document=UserDoc::query()->where('application_id','=',$application->id)->get();
        $bank_accounts=BankAccount::query()->where('application_id','=',$application->id)->get();
        $creditors=Credotor::query()->where('application_id','=',$application->id)->get();
        $users=User::query()->where('role','=','user')->get();
        $creditors_amount=Credotor::query()->where('application_id','=',$application->id)->count();

        $current_passport=UserCurrentPassport::query()->where('application_id','=',$application->id)->get();
        $old_passport=OldPassport::query()->where('application_id','=',$application->id)->get();

        return view('admin.documents.index', compact(['document',
            'application',
            'bank_accounts',
            'users',
            'creditors_amount',
            'current_passport',
            'old_passport',
            'page'
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

                $sql_data=['marriage_certificate'=>$name];
                $document->update($sql_data);
            }
            if(request()->hasFile('spouse_passport'))
            {
                $name=request()->file('spouse_passport')->getClientOriginalName();
                $file = request()->file('spouse_passport');
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/marriage_certificates/', $name);

                $sql_data=['spouse_passport'=>$name];
                $document->update($sql_data);
            }
            if(request()->hasFile('spouse_snils'))
            {
                $name=request()->file('spouse_snils')->getClientOriginalName();
                $file = request()->file('spouse_snils');
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/marriage_certificates/', $name);

                $sql_data=['spouse_snils'=>$name];
                $document->update($sql_data);
            }
            if(request()->hasFile('spouse_inn'))
            {
                $name=request()->file('spouse_inn')->getClientOriginalName();
                $file = request()->file('spouse_inn');
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/marriage_certificates/', $name);

                $sql_data=['spouse_inn'=>$name];
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
        if(isset($data['land_plots_certificate']))
        {
            $i=0;
            foreach ($data['land_plots_certificate'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/land_plots_certificate/', $name);

                $sql_data=['certificate'=>$name];
                $user_land_plots=UserLandPlot::query()->where('application_id','=',$data['application_id'])->get();

                $user_land_plots[$i]->update($sql_data);
                $i++;
            }
        }
        //residential_houses
        if(isset($data['residential_houses_certificate']))
        {
            $i=0;
            foreach ($data['residential_houses_certificate'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/residential_houses_certificate/', $name);

                //$sql_data=['application_id'=>$data['application_id'], 'certificate'=>$name];
                //UserResidentialHouse::create($sql_data);

                $sql_data=['certificate'=>$name];
                $user_residential_houses=UserResidentialHouse::query()->where('application_id','=',$data['application_id'])->get();

                $user_residential_houses[$i]->update($sql_data);
                $i++;
            }
        }
        //flats
        if(isset($data['flats_certificate']))
        {
            $i=0;
            foreach ($data['flats_certificate'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/flats_certificate/', $name);

                //$sql_data=['application_id'=>$data['application_id'], 'certificate'=>$name];
                //UserFlat::create($sql_data);

                $sql_data=['certificate'=>$name];
                $user_flats=UserFlat::query()->where('application_id','=',$data['application_id'])->get();

                $user_flats[$i]->update($sql_data);
                $i++;
            }
        }
        //garages
        if(isset($data['garages_certificate']))
        {
            $i=0;
            foreach ($data['garages_certificate'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/garages_certificate/', $name);

                //$sql_data=['application_id'=>$data['application_id'], 'certificate'=>$name];
                //UserGarage::create($sql_data);

                $sql_data=['certificate'=>$name];
                $user_garages=UserGarage::query()->where('application_id','=',$data['application_id'])->get();

                $user_garages[$i]->update($sql_data);
                $i++;
            }
        }

        //another_estate
        if(isset($data['another_estate_certificate']))
        {
            $i=0;
            foreach ($data['another_estate_certificate'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/another_estate_certificate/', $name);

                //$sql_data=['application_id'=>$data['application_id'], 'certificate'=>$name];
                //UserAnotherEstate::create($sql_data);

                $sql_data=['certificate'=>$name];
                $user_another_esate=UserAnotherEstate::query()->where('application_id','=',$data['application_id'])->get();

                $user_another_esate[$i]->update($sql_data);
                $i++;
            }
        }

        //movable property
        if(isset($data['movable_property_egrn']))
        {
            foreach ($data['movable_property_egrn'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/movable_property_egrn/', $name);
            }
        }
        //cargo_vehicles
        if(isset($data['cargo_vehicles_pts']))
        {
            $i=0;
            foreach ($data['cargo_vehicles_pts'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/cargo_vehicles_pts/', $name);

                //$sql_data=['application_id'=>$data['application_id'], 'pts'=>$name];
                //UserCargoVehicle::create($sql_data);

                $sql_data=['certificate'=>$name];
                $user_cargo_vehicles=UserCargoVehicle::query()->where('application_id','=',$data['application_id'])->get();

                $user_cargo_vehicles[$i]->update($sql_data);
                $i++;
            }
        }
        //motorized_transport
        if(isset($data['motorized_transport_pts']))
        {
            $i=0;
            foreach ($data['motorized_transport_pts'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/motorized_transport_pts/', $name);

                //$sql_data=['application_id'=>$data['application_id'], 'pts'=>$name];
                //UserMotorizedTransport::create($sql_data);

                $sql_data=['certificate'=>$name];
                $user_motorized_transport=UserMotorizedTransport::query()->where('application_id','=',$data['application_id'])->get();

                $user_motorized_transport[$i]->update($sql_data);
                $i++;
            }
        }
        //agricultural_technique
        if(isset($data['agricultural_technique_pts']))
        {
            $i=0;
            foreach ($data['agricultural_technique_pts'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/agricultural_technique_pts/', $name);

                //$sql_data=['application_id'=>$data['application_id'], 'pts'=>$name];
                //UserAgriculturalTechnique::create($sql_data);

                $sql_data=['certificate'=>$name];
                $user_agricultural_technique=UserAgriculturalTechnique::query()->where('application_id','=',$data['application_id'])->get();

                $user_agricultural_technique[$i]->update($sql_data);
                $i++;
            }
        }
        //water_transport
        if(isset($data['water_transport_pts']))
        {
            $i=0;
            foreach ($data['water_transport_pts'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/water_transport_pts/', $name);

                //$sql_data=['application_id'=>$data['application_id'], 'pts'=>$name];
                //UserWaterTransport::create($sql_data);

                $sql_data=['certificate'=>$name];
                $user_water_transport=UserWaterTransport::query()->where('application_id','=',$data['application_id'])->get();

                $user_water_transport[$i]->update($sql_data);
                $i++;
            }
        }
        //air_transport
        if(isset($data['air_transport_pts']))
        {
            $i=0;
            foreach ($data['air_transport_pts'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/air_transport_pts/', $name);

                //$sql_data=['application_id'=>$data['application_id'], 'pts'=>$name];
                //UserAirTransport::create($sql_data);

                $sql_data=['certificate'=>$name];
                $user_air_transport=UserAirTransport::query()->where('application_id','=',$data['application_id'])->get();

                $user_air_transport[$i]->update($sql_data);
                $i++;
            }
        }
        //other_transport
        if(isset($data['other_transport_pts']))
        {
            $i=0;
            foreach ($data['other_transport_pts'] as $children)
            {
                $name=$children->getClientOriginalName();
                $file = $children;
                $file->move(public_path() . '/user_docs/'.$data['fio'].'/other_transport_pts/', $name);

                //$sql_data=['application_id'=>$data['application_id'], 'pts'=>$name];
                //UserOtherTransport::create($sql_data);

                $sql_data=['certificate'=>$name];
                $user_other_transport=UserOtherTransport::query()->where('application_id','=',$data['application_id'])->get();

                $user_other_transport[$i]->update($sql_data);
                $i++;
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

        //credotors
        if(isset($data['credotors_amount']) and $data['credotors_amount']>0)
        {
            for($i=1;$i<=$data['credotors_amount'];$i++)
            {
                $creditor=Credotor::query()->where('application_id','=',$data['application_id'])->where('number','=',$i)->get();
                if(isset($data['credotors_statement_'.$i]))
                {
                    foreach ($data['credotors_statement_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/credotors_statement/', $name);

                        $sql_data=[
                            'name'=>$data['creditors_name_'.$i],
                            'kind_of_account'=>$data['creditors_kind_of_credit_'.$i],
                            'region'=>$data['creditors_region_'.$i],
                            'statement'=>$name,
                        ];
                    }
                }
                else
                {
                    $sql_data=[
                        'name'=>$data['creditors_name_'.$i],
                        'kind_of_account'=>$data['creditors_kind_of_credit_'.$i],
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

                        $sql_data=['tax_requirements'=>$name];
                    }
                }

                if(isset($data['obligatory_certificate_of_absence_'.$i]))
                {
                    foreach ($data['obligatory_certificate_of_absence_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/obligatory_certificate_of_absence_/', $name);

                        $sql_data=['certificate_of_absence'=>$name];
                    }
                }

                if(isset($data['obligatory_state_duty_'.$i]))
                {
                    foreach ($data['obligatory_state_duty_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/obligatory_state_duty_/', $name);

                        $sql_data=['state_duty'=>$name];
                    }
                }

                if(isset($data['obligatory_court_deposit_'.$i]))
                {
                    foreach ($data['obligatory_court_deposit_'.$i] as $children)
                    {
                        $name=$children->getClientOriginalName();
                        $file = $children;
                        $file->move(public_path() . '/user_docs/'.$data['fio'].'/obligatory_court_deposit_/', $name);

                        $sql_data=['court_deposit'=>$name];
                    }
                }

                //ObligatoryPayment::create($sql_data);
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
        $old_pasport[0]->update($current_pasport_data);

        //unset for UserDocs
        unset($data['_token']);
        unset($data['_method']);
        unset($data['birth_certificate']);
        unset($data['land_plots_certificate']);
        unset($data['residential_houses_certificate']);
        unset($data['flats_certificate']);
        unset($data['garages_certificate']);
        unset($data['another_estate_certificate']);
        unset($data['cargo_vehicles_pts']);
        unset($data['motorized_transport_pts']);
        unset($data['agricultural_technique_pts']);
        unset($data['water_transport_pts']);
        unset($data['air_transport_pts']);
        unset($data['other_transport_pts']);

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

        foreach ($data as $key => $value)
        {
            if ($value === null) {
                unset($data[$key]);
            }
        }

        $document->update($data);

        return redirect()->route('admin.documents.edit', request()->application_id);
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

        return redirect()->route('admin.documents.edit', request()->application_id);
    }
    //================================/UPLOAD DOCUMENTS================================\\


    //================================SECOND STAGE DOCUMENTS================================\\
    public function second_stage(Application $application)
    {
        $sql_data=['stage'=>2];
        $application->update($sql_data);
        return redirect()->route('admin.documents.stage_2', $application->id);
    }
    //================================/SECOND STAGE DOCUMENTS================================\\

    //================================STAGE 2 DOCUMENTS================================\\
    public function stage_2(Application $application)
    {
        $page=2;
        $document=UserDoc::query()->where('application_id','=',$application->id)->get();
        $bank_accounts=BankAccount::query()->where('application_id','=',$application->id)->where('bank_name','!=','NULL')->get();
        $creditors=Credotor::query()->where('application_id','=',$application->id)->get();
        $users=User::query()->where('role','=','user')->get();
        $creditors_amount=Credotor::query()->where('application_id','=',$application->id)->count();

        $current_passport=UserCurrentPassport::query()->where('application_id','=',$application->id)->get();
        $old_passport=OldPassport::query()->where('application_id','=',$application->id)->get();
        $land_plots=UserLandPlot::query()->where('application_id','=',$application->id)->where('certificate','!=','NULL')->get();

        return view('admin.documents.stage_2', compact(['document',
            'application',
            'bank_accounts',
            'users',
            'creditors_amount',
            'current_passport',
            'old_passport',
            'page',
            'land_plots'
        ]));
    }
    //================================/STAGE 2 DOCUMENTS================================\\


}
