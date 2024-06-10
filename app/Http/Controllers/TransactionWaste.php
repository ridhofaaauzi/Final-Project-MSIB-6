<?php

namespace App\Http\Controllers;

use App\Models\TransactionWaste as ModelsTransactionWaste;
use App\Models\User;
use App\Models\Waste;
use Illuminate\Http\Request;

class TransactionWaste extends Controller
{
    public function exchangeWaste(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'waste_id' => 'required|exists:wastes,id',
            'berat_sampah' => 'required|integer|min:1',
        ]);

        $waste = Waste::findOrFail($request->waste_id);
        $user = User::findOrFail($request->user_id);

        $totalPoin = $request->berat_sampah * $waste->poin;

        $transactionWaste = ModelsTransactionWaste::create([
            'berat_sampah' => $request->berat_sampah,
            'total_poin' => $totalPoin,
            'user_id' => $user->id,
            'waste_id' => $waste->id,
        ]);

        $user->update([
            'poin' => $user->poin + $totalPoin,
        ]);

        return response()->json([
            'message' => 'Penukaran sampah berhasil',
            'transaction' => $transactionWaste,
        ]);
    }
}