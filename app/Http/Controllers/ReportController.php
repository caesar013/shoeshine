<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $transactions = DB::select('select count(id) as countTransactions from transactions where status_id = 6');
        $income = DB::select('select sum(price) as sumPrice from services inner join orders on services.id = orders.service_id
        inner join transactions on orders.transaction_id = transactions.id where status_id = 6');

        // return dd($years);
        return view('admin.report', [
            'title' => 'Report',
            'transactions' => $transactions[0]->countTransactions,
            'income' => $income[0]->sumPrice
        ]);
    }
}
