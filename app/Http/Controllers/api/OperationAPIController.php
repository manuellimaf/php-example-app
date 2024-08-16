<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Operation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class OperationAPIController extends Controller
{

    // POST
    public function store(Request $request) {
        $result = $request->validate([
            'ticker' => 'required|string|max:5',
            'operation_type' => ['required', Rule::in(['buy', 'sell'])],
            'buy_price' => 'required|numeric|min:0',
            'buy_date' => 'required|date',
            'sell_price' => 'numeric|min:0|required_if:operation_type,sell',
            'sell_date' => 'date|required_if:operation_type,sell',
            'quantity' => 'required|numeric|min:0',
            'tax' => 'numeric|min:0',
        ]);

        $operation = new Operation();
        $operation->ticker = $result['ticker'];
        $operation->operation_type = $result['operation_type'];
        $operation->buy_price = $result['buy_price'];
        $operation->buy_date = $result['buy_date'];
        $operation->sell_price = $result['sell_price'];
        $operation->sell_date = $result['sell_date'];
        $operation->quantity = $result['quantity'];
        $operation->tax = $result['tax'];
        $operation->save();

        $buyOp = Operation::where('ticker', $operation->ticker)
            ->where('operation_type', 'buy')
            ->where('buy_price', $operation->buy_price)
            ->where('buy_date', $operation->buy_date)
            ->first();

        $buyOp->quantity -= $operation->quantity;
        $buyOp->save();

        return response()->json(['message' => 'Operation saved', 'operation' => $operation], Response::OK);
    }

    // GET - all
    public function index() {
        $ops = Operation::all();
        return response()->json($ops);
    }

    // GET - sinlge
    public function show($id) {
        if(!$id) {
            return response()->json("message" => "Operation not found", Response::HTTP_NOT_FOUND);
        }

        return response()->json();
    }

    public function update(Request $request, $id) {
        if(!$id) {
            return response()->json("message" => "Operation not found", Response::HTTP_NOT_FOUND);
        }

        // TODO - find
        $operation = new Operation();
        $operation->fill($request->all());
        $operation->save();

        return response()->json("message" => "Updated", "operation" => $operation, Response::OK);
    }

    public function destroy(Request $request, $id) {
        if(!$id) {
            return response()->json("message" => "Operation not found", Response::HTTP_NOT_FOUND);
        }

        // TODO - find
        $operation = new Operation();
        $operation->delete();
        
        return response()->json(Response::OK);
    }

    
}
