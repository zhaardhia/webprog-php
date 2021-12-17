<?php

namespace App\Http\Controllers;

use App\Models\Transaction as TranModel;
use App\Models\City as CityModel;
use App\Models\User as UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function admin_transaction()
    {
        $cities = CityModel::all();
        $result = Str::endsWith(Auth::user()->email, '@relocate.com');
        $transactions = TranModel::all();
        if ($result) {
            return view('admin.admin-transaction', ['transactions' => $transactions])->with('cities', $cities);
        } else
            return redirect('/');
    }

    public function transaction_detail($transaction_id)
    {
        $cities = CityModel::all();
        $result = Str::endsWith(Auth::user()->email, '@relocate.com');
        $transaction = TranModel::where('id', '=', $transaction_id)->get();
        if ($result) {
            return view('admin.transaction-detail', ['transaction' => $transaction[0]])->with('cities', $cities);
        } else
            return redirect('/');
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $request->request->add(['user_id' => $user_id]);
        $transaction_data = $request->except('_token');
        TranModel::insert($transaction_data);

        UserModel::where('id', '=', $user_id)->update(['ispremium' => 1]);
        // $user = UserModel::findOrFail($user_id);

        return redirect('/');
    }
}
