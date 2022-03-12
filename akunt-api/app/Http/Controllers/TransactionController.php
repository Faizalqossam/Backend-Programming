<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::orderBy('time','DESC')->get();
        $response = [
            'message' => 'List transaction order by time',
            'data' => $transaction
        ];

        return response()->json($response, Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => ['required'],
            'amount' => ['required','numeric'],
            'type' => ['required','in:expense,revenue']
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }else{
            $transaction = Transaction::create($request->all());
            $response =[
                'message' => 'Transaction created',
                'data' => $transaction
            ];

            return response()->json($response, Response::HTTP_CREATED);

        }

        // try{
        //     $transaction = Transaction::create($request->all());
        //     $response =[
        //         'message' => 'Transaction created',
        //         'data' => $transaction
        //     ];

        //     return response()->json($response, Response::HTTP_CREATED);
            
        // }catch(QueryException $e) {
        //     return response()->json([
        //         'message' => "Failed". $e->errorInfo
        //     ]);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function searchtype($type){

        $transaction = Transaction::where('type','like','%'.$type.'%')->get();

        $response = [
            'message' => 'Get'.' '.$type.' '.'resource',
            'data' => $transaction
        ];

        return response()->json($response,200);
    }
}
