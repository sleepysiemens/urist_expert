<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Application;
use App\Models\User;
use App\Models\UserDoc;
use App\Models\BankAccount;
use App\Models\Credotor;

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
        UserDoc::create($data);

        $data=['stage'=>1];
        $application->update($data);

        $document=UserDoc::query()->where('application_id', '=',$application->id)->get();

        return redirect()->route('admin.documents.edit', $document[0]->id);
    }


    //================================EDIT DOCUMENT PAGE================================\\
    public function edit(Application $application)
    {
        $document=UserDoc::query()->where('application_id','=',$application->id)->get();
        $bank_accounts=BankAccount::query()->where('application_id','=',$application->id)->get();
        $creditors=Credotor::query()->where('application_id','=',$application->id)->get();
        return view('admin.documents.index', compact(['document', 'application', 'bank_accounts']));
    }


    //================================UPDATE DOCUMENT PAGE================================\\
    public function update(UserDoc $document)
    {
        $data=request()->all();
        unset($data['_token']);
        unset($data['_method']);

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

}
