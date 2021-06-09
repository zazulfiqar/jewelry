<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
          CURLOPT_URL => 'https://api.stuller.com/v2/products/virtual',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "Include": ["All"],
            "Filter": ["Orderable"]
        }',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Basic ZGVzaWduX25vcnRleDpXZWxjb21lMSE=',
            'Cookie: cart_session_id=5deada53-a80d-4b8c-8acb-fb0aae0c16b1; AWSALB=iF70dMnxWUkE/CZomWT2YsXkc0bJhRBk+eEjV+mdLj6/a1pN9+5sOg6g63SyWykhhsW8SEK/L9Hvd8xuEbBF/ZR4EpKzkSBV+xFkifY/x+0//IXuoGfPY75VvSy5JsnbfLeF2CNsAPGgUGXarIEfDkSlK0T3wIhCpKW+TbT/sWgVA0YH+lx4HUojNRzlCw==; AWSALBCORS=iF70dMnxWUkE/CZomWT2YsXkc0bJhRBk+eEjV+mdLj6/a1pN9+5sOg6g63SyWykhhsW8SEK/L9Hvd8xuEbBF/ZR4EpKzkSBV+xFkifY/x+0//IXuoGfPY75VvSy5JsnbfLeF2CNsAPGgUGXarIEfDkSlK0T3wIhCpKW+TbT/sWgVA0YH+lx4HUojNRzlCw=='
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        // echo $response;



        $Products = json_decode($response , 'true');

        //   echo "<pre>";
        // print_r($Products);
        // echo "</pre>";

        // exit();

        return view('product' ,compact('Products'));
        //
    }



    public function simpleproducts()
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.stuller.com/v2/products/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "Include": ["All"],
            "Filter": ["Orderable" ,"InStock"],




        }',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Basic ZGVzaWduX25vcnRleDpXZWxjb21lMSE=',
            'Cookie: cart_session_id=5deada53-a80d-4b8c-8acb-fb0aae0c16b1; AWSALB=xbGNSpjQ2/RJmVHYgDPFdNdusImIPt34++Pd95m6BB+i8xhmKK++A7iwuSiBeDd0bvyScE1ZonGFBGkhBIq6YenvVuOrYQH2Xoox0EJAxiLEvYvISArGotvdJaah2wZ/pzOEMjTXrFYPdsBXdAa2zhD1K6qO2oBmWOyjLEpF9bkJkHjSdITywb2ZM7YpbQ==; AWSALBCORS=xbGNSpjQ2/RJmVHYgDPFdNdusImIPt34++Pd95m6BB+i8xhmKK++A7iwuSiBeDd0bvyScE1ZonGFBGkhBIq6YenvVuOrYQH2Xoox0EJAxiLEvYvISArGotvdJaah2wZ/pzOEMjTXrFYPdsBXdAa2zhD1K6qO2oBmWOyjLEpF9bkJkHjSdITywb2ZM7YpbQ=='
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        // echo $response;

        $Products = json_decode($response , 'true');

        //   echo "<pre>";
        // print_r($Products);
        // echo "</pre>";

        // exit();


        return view('simpleproduct' , compact('Products'));

        //
    }




    public function nextpage_virtual(Request $request)
    {

     $nextpage =  $request->nextpage;


     $curl = curl_init();

     curl_setopt_array($curl, array(
       CURLOPT_URL => 'https://api.stuller.com/v2/products/virtual',
       CURLOPT_RETURNTRANSFER => true,
       CURLOPT_ENCODING => '',
       CURLOPT_MAXREDIRS => 10,
       CURLOPT_TIMEOUT => 0,
       CURLOPT_FOLLOWLOCATION => true,
       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => 'POST',
       CURLOPT_POSTFIELDS =>'{
         "Include": ["All"],
         "Filter": ["Orderable"],
         "NextPage" : "'.$nextpage.'"



     }',
       CURLOPT_HTTPHEADER => array(
         'Accept: application/json',
         'Content-Type: application/json',
         'Authorization: Basic ZGVzaWduX25vcnRleDpXZWxjb21lMSE=',
         'Cookie: cart_session_id=5deada53-a80d-4b8c-8acb-fb0aae0c16b1; AWSALB=iF70dMnxWUkE/CZomWT2YsXkc0bJhRBk+eEjV+mdLj6/a1pN9+5sOg6g63SyWykhhsW8SEK/L9Hvd8xuEbBF/ZR4EpKzkSBV+xFkifY/x+0//IXuoGfPY75VvSy5JsnbfLeF2CNsAPGgUGXarIEfDkSlK0T3wIhCpKW+TbT/sWgVA0YH+lx4HUojNRzlCw==; AWSALBCORS=iF70dMnxWUkE/CZomWT2YsXkc0bJhRBk+eEjV+mdLj6/a1pN9+5sOg6g63SyWykhhsW8SEK/L9Hvd8xuEbBF/ZR4EpKzkSBV+xFkifY/x+0//IXuoGfPY75VvSy5JsnbfLeF2CNsAPGgUGXarIEfDkSlK0T3wIhCpKW+TbT/sWgVA0YH+lx4HUojNRzlCw=='
       ),
     ));

     $response = curl_exec($curl);

     curl_close($curl);
     // echo $response;



     $Products = json_decode($response , 'true');

     //   echo "<pre>";
     // print_r($Products);
     // echo "</pre>";

     // exit();

     return view('product' ,compact('Products'));

    }




    public function nextpage(Request $request)
    {

     $nextpage =  $request->nextpage;

        // echo $nextpage;

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.stuller.com/v2/products/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "Include": ["All"],
            "Filter": ["Orderable" ,"InStock"],
            "NextPage" : "'.$nextpage.'",




        }',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Basic ZGVzaWduX25vcnRleDpXZWxjb21lMSE=',
            'Cookie: cart_session_id=5deada53-a80d-4b8c-8acb-fb0aae0c16b1; AWSALB=xbGNSpjQ2/RJmVHYgDPFdNdusImIPt34++Pd95m6BB+i8xhmKK++A7iwuSiBeDd0bvyScE1ZonGFBGkhBIq6YenvVuOrYQH2Xoox0EJAxiLEvYvISArGotvdJaah2wZ/pzOEMjTXrFYPdsBXdAa2zhD1K6qO2oBmWOyjLEpF9bkJkHjSdITywb2ZM7YpbQ==; AWSALBCORS=xbGNSpjQ2/RJmVHYgDPFdNdusImIPt34++Pd95m6BB+i8xhmKK++A7iwuSiBeDd0bvyScE1ZonGFBGkhBIq6YenvVuOrYQH2Xoox0EJAxiLEvYvISArGotvdJaah2wZ/pzOEMjTXrFYPdsBXdAa2zhD1K6qO2oBmWOyjLEpF9bkJkHjSdITywb2ZM7YpbQ=='
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        // echo $response;

        $Products = json_decode($response , 'true');

        //   echo "<pre>";
        // print_r($Products);
        // echo "</pre>";

        // exit();


        return view('simpleproduct' , compact('Products'));
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


    public function productdetail($id)
    {
        $curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.stuller.com/v2/products/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
   "ProductId": [
     '.$id.'
  ]
}',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Basic ZGVzaWduX25vcnRleDpXZWxjb21lMSE=',
    'Cookie: cart_session_id=5deada53-a80d-4b8c-8acb-fb0aae0c16b1; AWSALB=0SF6m/CQf8oqO7qZvYtw9AxY1Jsl6Ljae0efNBHv0NNSwMcN4kLljgvcnqsCefmn/oTtFnQw5cCCHMMV3248kdeUiZYgtthli6bn9ICZoyZm9Dq3PpmgGvWWa2xADSiwY1PZukheyD5qwGxOCEspgk1ts4vcjJQfYa0n7LOh72SBScVbtfNGpX5bXPhVeQ==; AWSALBCORS=0SF6m/CQf8oqO7qZvYtw9AxY1Jsl6Ljae0efNBHv0NNSwMcN4kLljgvcnqsCefmn/oTtFnQw5cCCHMMV3248kdeUiZYgtthli6bn9ICZoyZm9Dq3PpmgGvWWa2xADSiwY1PZukheyD5qwGxOCEspgk1ts4vcjJQfYa0n7LOh72SBScVbtfNGpX5bXPhVeQ=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$productdetails= json_decode($response,true);
return view('productdetail' , compact('productdetails'));
        // return view('productdetail',$data);
        //
    }

    public function addToCart($id){
        $curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.stuller.com/v2/products/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
   "ProductId": [
     '.$id.'
  ]
}',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Basic ZGVzaWduX25vcnRleDpXZWxjb21lMSE=',
    'Cookie: cart_session_id=5deada53-a80d-4b8c-8acb-fb0aae0c16b1; AWSALB=0SF6m/CQf8oqO7qZvYtw9AxY1Jsl6Ljae0efNBHv0NNSwMcN4kLljgvcnqsCefmn/oTtFnQw5cCCHMMV3248kdeUiZYgtthli6bn9ICZoyZm9Dq3PpmgGvWWa2xADSiwY1PZukheyD5qwGxOCEspgk1ts4vcjJQfYa0n7LOh72SBScVbtfNGpX5bXPhVeQ==; AWSALBCORS=0SF6m/CQf8oqO7qZvYtw9AxY1Jsl6Ljae0efNBHv0NNSwMcN4kLljgvcnqsCefmn/oTtFnQw5cCCHMMV3248kdeUiZYgtthli6bn9ICZoyZm9Dq3PpmgGvWWa2xADSiwY1PZukheyD5qwGxOCEspgk1ts4vcjJQfYa0n7LOh72SBScVbtfNGpX5bXPhVeQ=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$product= json_decode($response,true);
// echo "<pre>";
// print_r($productdetails);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product['Products'][0]['Description'],
                        "quantity" => 2,
                        "price" => $product['Products'][0]['Price']['Value'] ,
                        "photo" => $product['Products'][0]['GroupImages'][0]['FullUrl']
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    //     // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product['Products'][0]['Description'],
            "quantity" => 2,
            "price" => $product['Products'][0]['Price']['Value'],
            "photo" => $product['Products'][0]['GroupImages'][0]['FullUrl']
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function updateCart(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function removeCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
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
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
