<?php

namespace App\Http\Controllers;

use App\Models\diamond;
use Illuminate\Http\Request;

class DiamondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function index()
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.stuller.com/v2/gem/diamonds',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',
            'UN: design_nortex',
            'PW: Welcome1!',
            'Authorization: Basic ZGVzaWduX25vcnRleDpXZWxjb21lMSE=',
            'Cookie: cart_session_id=5deada53-a80d-4b8c-8acb-fb0aae0c16b1; AWSALB=PbrPIRDFwn6ad04hw9xUlTCQ/J4AE5uoxJqsPEh8qQ7vQZvqMCngeAw/tHi3qmtbb9dzwi0giGk+8R2ho2vL2QP74wItfv3KUxdckq/ZuSqhYXN0nMEe1TE/K9NA; AWSALBCORS=PbrPIRDFwn6ad04hw9xUlTCQ/J4AE5uoxJqsPEh8qQ7vQZvqMCngeAw/tHi3qmtbb9dzwi0giGk+8R2ho2vL2QP74wItfv3KUxdckq/ZuSqhYXN0nMEe1TE/K9NA'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $diamonds = json_decode($response , 'true');

        // echo "<pre>";
        // print_r($diamonds);
        // echo "</pre>";

        // exit();

        return view('diamond',compact('diamonds'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diamond  $diamond
     * @return \Illuminate\Http\Response
     */
    public function show(diamond $diamond)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diamond  $diamond
     * @return \Illuminate\Http\Response
     */
    public function edit(diamond $diamond)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diamond  $diamond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diamond $diamond)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diamond  $diamond
     * @return \Illuminate\Http\Response
     */
    public function destroy(diamond $diamond)
    {
        //
    }
}
