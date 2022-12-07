<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sales;
use App\Models\stocks;


use Illuminate\Support\Facades\DB;

class DavecrudController extends Controller
{
    //
    public function saveinfo(Request $req){
        $req->validate([
            'name'=>'required',
            'age'=>'required',
            'DOB'=>'required',
            'address'=>'required'
        ]);
        DB::table('davecruds')->insert([
            'name'=>$req->name,
            'age'=>$req->age,
            'DOB'=>$req->DOB,
            'address'=>$req->address



        ]); 
        return "data entered successfully";

    }
    public function searchsales(Request $req){
        $search= DB::select("select COST from stocks where phone='$req->phone' ");
        return view('sales', compact('search'));
    }
    public function savesale(Request $req){
       

        DB::table('sales')->insert([
            'name'=>$req->name,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'date'=>$req->date,
            'item'=>$req->item,
            'quantity'=>$req->qty,
            'cost'=>$req->cost,
            'total'=>$req->tot,
        ]);
        $sold=DB::table('stocks')
        ->where('product', '=', $req->item)
        ->decrement('quantity', $req->qty);

        $mkt= sales::all();
        return view('print', 'mkt');
    }
    public function savestock(Request $req){
//         $stocks = new stocks;
//         $stocks-> name = $req->input('name');
//         $stocks-> address = $req->input('address');
//         $stocks-> phone = $req->input('phone');
//         $stocks-> date = $req->input('date');
//         $stocks-> item = $req->input('item');
//         $stocks-> quantity = $req->input('qty');
//         $stocks-> cost = $req->input('cost');
//         $stocks-> total = $req->input('tot');
// $stocks->save();
        DB::table('stocks')->insert([
            'supplier'=>$req->supplier,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'product'=>$req->product,
            'quantity'=>$req->quantity,
            'cost'=>$req->cost,
            'total'=>$req->total,
            'date'=>$req->date,
        ]);
        return view('newstock');
    }
    public function allsales(){
        $allsale= sales::all();
        $sum= DB::table('sales')->sum('total');

        return view('allsales', compact('allsale', 'sum'));
    }
    public function allstocks(){
        $allstock= stocks::all();
        return view('allstocks', compact('allstock'));
        
    } 
    public function saleslight(){
        $allstoc= stocks::all();
        return view('sales', compact('allstoc'));
    }
    public function sell(){
        $allstocs= stocks::all();
        // return 'welcome to cema';
        return view('sell', compact('allstocs'));
    }
    public function searchsale(Request $requ){
        $searchsales = DB::table('sales')
        ->whereBetween('date', [$requ->datefrom, $requ->dateto])
        ->get();
        $sum1=DB::table('sales')->sum('total');
        // $searchsales=DB::select("select * from sales where date between '$requ->datefrom' AND '$requ->dateto' ");
        // $searchsales1 =sales::whereBetween('date', [$requ->datefrom. '00:00:00', $requ->dateto. '23:59:59']);

        // $allstocs= stocks::all();
        return view('searchsale', compact('searchsales','sum1'));
    }
    public function search(Request $requ){
        $allstocss= stocks::all();
       
        // $searchsales=DB::select("select * from sales where date='$requ->beginDate' ");

        // $allstocs= stocks::all();
        return view('searchsales', compact('allstocss'));
    }
public function searchsupply(Request $req){
    
    $stocks= DB::select ("select * from stocks where supplier='$req->supplier'");

    return view ('searchsupply', compact ('stocks'));
}
public function searchcust(Request $req){
    $customer = DB::table('sales')
                ->where('name', '=', $req->cname)
                ->where('phone', '=', $req->cphone)
                ->get();
    // $customer= DB::select ("select * from sales where name='$req->cname' and phone='$req->phone' ");

    return view ('searchcust', compact ('customer'));
}
public function searchproduct(Request $req){
    $products= DB::select ("select * from stocks where product='$req->item'");

    return view ('searchproduct', compact ('products'));
}


    public function findpro(Request $req){
      //  $searchsales=DB::select("select COST from sales where phone='$req->phone' ");
    //   $cost= Stocks::select('cost')->where('phone', $req->id)->take(100)->get();  
      $costs=DB::select("select * from stocks where product='$req->id' ");
        return response()->json([
            'cost'=>$costs ]);
    }
   

    public function sales(){
        $allstock1= stocks::all();
        return view('sales', compact('allstock1'));
    }

    public function fetchcust($set){
         $delcust= sales::all() ->where('id', '=', $set)->delete();
        return 'yeah u can delete';
    }



    public function todaysaless(Request $req){
        $date = date("Y/m/d");
        // date('m/d/Y h:i:s a');
        // date("Y/m/d")
        $todaysales1=DB::select("select * from sales where date='CURDATE()' ");
        

        return view('todaysales', compact('date', 'todaysales1'));
    }
    public function sales_Search(Request $requ){
        
        $searchsales=DB::select("select * from sales where item='$requ->item' && date= '$requ->date'");
        
        return view('searchsales', compact ('searchsales'));
    }


    public function staff(Request $req){
        DB::table('staff')->insert([
            'name'=>$req->name,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'state'=>$req->state,
            'lga'=>$req->lga,
            'village'=>$req->villa,
            'parents'=>$req->parents,
            'parentsphone'=>$req->parentsphone,





        ]);

    }
}
