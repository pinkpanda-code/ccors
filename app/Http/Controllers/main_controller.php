<?php

namespace App\Http\Controllers;


use App\customer;
use App\port;
use App\destination;
use App\cabin;
use App\ship;
use App\ship_cabin;
use App\cruise;
use App\cruise_itinerary_port;
use App\reservation;
use App\payment;
use Illuminate\Support\Facades\Response;
use App\Http\Requests;
use Request;

session_start();
if(!isset($_SESSION['compare'][0])){
    $_SESSION['compare'][0] = '';
    $_SESSION['compare'][1] = '';
    $_SESSION['compare'][2] = '';
    $_SESSION['compare'][3] = '';
}

class main_controller extends Controller
{

    public function home(){

        /*unset($_SESSION['compare']) ;*/

        /*for($i=0;$i<sizeof($_SESSION['compare']);$i++){
            echo $_SESSION['compare'][$i].'<br>';
        }*/

        return view('home');

    }

    public function book_now(){

        $cruise = cruise::all();

        $cruise_dest = cruise::distinct()->select('dest_id')->get();

        $cruise_depart = cruise::distinct()->select('departure_port')->get();
        $cruise_ship = cruise::distinct()->select('ship_id')->get();


        /*foreach($cruise_ship as $cs){
            echo $cs->ship->ship_id;
        }*/

    /*    foreach($cruise_depart as $cd){
            echo $cd->d_port->port_name;
        }*/

        /*foreach($cruise as $c){
            foreach ($c->port as $cp){
               echo $cp->port_name.'<br>';
            }
        }*/

        /*foreach($cruise_ship as $cs) {
            foreach ($cs->ship->cabin as $sc){
                echo $sc . '<br>';
            }
        }*/

        return view('book_now',compact('cruise','cruise_dest','cruise_depart','cruise_ship'));

    }

    public function search_cruise(){

        $dest_id = $_POST['dest_id'];
        $d_port = $_POST['departure_port'];
        $ship_id = $_POST['ship_id'];

        $data=array();
        $cruise = new cruise();
        $bam = 0;

        if($dest_id == 0 && $d_port == 0 && $ship_id == 0){

            $cruise_dest = cruise::distinct()->select('dest_id')->get();
            $cruise_depart = cruise::distinct()->select('departure_port')->get();
            $cruise_ship = cruise::distinct()->select('ship_id')->get();

            for($i=0;$i<sizeof($cruise_dest);$i++){
                $data['cruise_dest']['id'][$i] = $cruise_dest[$i]->destination->dest_id;
                $data['cruise_dest']['name'][$i] = $cruise_dest[$i]->destination->dest_name;
            }
            for($i=0;$i<sizeof($cruise_depart);$i++){
                $data['cruise_depart']['id'][$i] = $cruise_depart[$i]->d_port->port_id;
                $data['cruise_depart']['name'][$i] = $cruise_depart[$i]->d_port->port_name;
            }
            for($i=0;$i<sizeof($cruise_ship);$i++){
                $data['cruise_ship']['id'][$i] = $cruise_ship[$i]->ship->ship_id;
                $data['cruise_ship']['name'][$i] = $cruise_ship[$i]->ship->ship_name;
            }

            $cruise = cruise::all();
            $bam = 1;

        } elseif($dest_id != 0 && $d_port == 0 && $ship_id == 0){

            $cruise = cruise::distinct()->where('dest_id',$dest_id)->get();
            for($i=0;$i<sizeof($cruise);$i++){
                $data['cruise_dest']['id'][$i] = $cruise[$i]->destination->dest_id;
                $data['cruise_dest']['name'][$i] = $cruise[$i]->destination->dest_name;
                $data['cruise_depart']['id'][$i] = $cruise[$i]->d_port->port_id;
                $data['cruise_depart']['name'][$i] = $cruise[$i]->d_port->port_name;
                $data['cruise_ship']['id'][$i] = $cruise[$i]->ship->ship_id;
                $data['cruise_ship']['name'][$i] = $cruise[$i]->ship->ship_name;
            }

        }elseif($dest_id == 0 && $d_port != 0 && $ship_id == 0){

            $cruise = cruise::distinct()->where('departure_port',$d_port)->get();
            for($i=0;$i<sizeof($cruise);$i++){
                $data['cruise_dest']['id'][$i] = $cruise[$i]->destination->dest_id;
                $data['cruise_dest']['name'][$i] = $cruise[$i]->destination->dest_name;
                $data['cruise_depart']['id'][$i] = $cruise[$i]->d_port->port_id;
                $data['cruise_depart']['name'][$i] = $cruise[$i]->d_port->port_name;
                $data['cruise_ship']['id'][$i] = $cruise[$i]->ship->ship_id;
                $data['cruise_ship']['name'][$i] = $cruise[$i]->ship->ship_name;
            }

        }elseif($dest_id == 0 && $d_port == 0 && $ship_id != 0){

            $cruise = cruise::distinct()->where('ship_id',$ship_id)->get();
            for($i=0;$i<sizeof($cruise);$i++){
                $data['cruise_dest']['id'][$i] = $cruise[$i]->destination->dest_id;
                $data['cruise_dest']['name'][$i] = $cruise[$i]->destination->dest_name;
                $data['cruise_depart']['id'][$i] = $cruise[$i]->d_port->port_id;
                $data['cruise_depart']['name'][$i] = $cruise[$i]->d_port->port_name;
                $data['cruise_ship']['id'][$i] = $cruise[$i]->ship->ship_id;
                $data['cruise_ship']['name'][$i] = $cruise[$i]->ship->ship_name;
            }

        }elseif($dest_id != 0 && $d_port != 0 && $ship_id == 0){

            $cruise = cruise::distinct()->where('dest_id',$dest_id)->where('departure_port',$d_port)->get();
            for($i=0;$i<sizeof($cruise);$i++){
                $data['cruise_dest']['id'][$i] = $cruise[$i]->destination->dest_id;
                $data['cruise_dest']['name'][$i] = $cruise[$i]->destination->dest_name;
                $data['cruise_depart']['id'][$i] = $cruise[$i]->d_port->port_id;
                $data['cruise_depart']['name'][$i] = $cruise[$i]->d_port->port_name;
                $data['cruise_ship']['id'][$i] = $cruise[$i]->ship->ship_id;
                $data['cruise_ship']['name'][$i] = $cruise[$i]->ship->ship_name;
            }

        }elseif($dest_id == 0 && $d_port != 0 && $ship_id != 0){

            $cruise = cruise::distinct()->where('departure_port',$d_port)->where('ship_id',$ship_id)->get();
            for($i=0;$i<sizeof($cruise);$i++){
                $data['cruise_dest']['id'][$i] = $cruise[$i]->destination->dest_id;
                $data['cruise_dest']['name'][$i] = $cruise[$i]->destination->dest_name;
                $data['cruise_depart']['id'][$i] = $cruise[$i]->d_port->port_id;
                $data['cruise_depart']['name'][$i] = $cruise[$i]->d_port->port_name;
                $data['cruise_ship']['id'][$i] = $cruise[$i]->ship->ship_id;
                $data['cruise_ship']['name'][$i] = $cruise[$i]->ship->ship_name;
            }

        }elseif($dest_id != 0 && $d_port == 0 && $ship_id != 0){

            $cruise = cruise::distinct()->where('dest_id',$dest_id)->where('ship_id',$ship_id)->get();
            for($i=0;$i<sizeof($cruise);$i++){
                $data['cruise_dest']['id'][$i] = $cruise[$i]->destination->dest_id;
                $data['cruise_dest']['name'][$i] = $cruise[$i]->destination->dest_name;
                $data['cruise_depart']['id'][$i] = $cruise[$i]->d_port->port_id;
                $data['cruise_depart']['name'][$i] = $cruise[$i]->d_port->port_name;
                $data['cruise_ship']['id'][$i] = $cruise[$i]->ship->ship_id;
                $data['cruise_ship']['name'][$i] = $cruise[$i]->ship->ship_name;
            }

        }elseif($dest_id != 0 && $d_port != 0 && $ship_id != 0){

            $cruise = cruise::distinct()->where('dest_id',$dest_id)->where('departure_port',$d_port)->where('ship_id',$ship_id)->get();
            for($i=0;$i<sizeof($cruise);$i++){
                $data['cruise_dest']['id'][$i] = $cruise[$i]->destination->dest_id;
                $data['cruise_dest']['name'][$i] = $cruise[$i]->destination->dest_name;
                $data['cruise_depart']['id'][$i] = $cruise[$i]->d_port->port_id;
                $data['cruise_depart']['name'][$i] = $cruise[$i]->d_port->port_name;
                $data['cruise_ship']['id'][$i] = $cruise[$i]->ship->ship_id;
                $data['cruise_ship']['name'][$i] = $cruise[$i]->ship->ship_name;

            }
        }

        if($bam==0){
            $data['cruise_dest']['id'] = array_unique($data['cruise_dest']['id'], SORT_REGULAR);
            $data['cruise_dest']['name'] = array_unique($data['cruise_dest']['name'], SORT_REGULAR);
            $data['cruise_depart']['id'] = array_unique($data['cruise_depart']['id'], SORT_REGULAR);
            $data['cruise_depart']['name'] = array_unique($data['cruise_depart']['name'], SORT_REGULAR);
            $data['cruise_ship']['id'] = array_unique($data['cruise_ship']['id'], SORT_REGULAR);
            $data['cruise_ship']['name'] = array_unique($data['cruise_ship']['name'], SORT_REGULAR);

        }

        $data['size'] = sizeof($cruise);

        return Response::json($data);

    }

    public function to_view_result(){

        $input = Request::all();

        $dest_id = $input['dest_id'];
        $d_port = $input['departure_port'];
        $ship_id = $input['ship_id'];

        return redirect('/view_result/'.$dest_id.'/'.$d_port.'/'.$ship_id);
    }

    public function view_result($dest_id, $d_port, $ship_id){


        if($dest_id == 0 && $d_port == 0 && $ship_id == 0){

            $cruise = cruise::all();

        }elseif($dest_id != 0 && $d_port == 0 && $ship_id == 0){

            $cruise = cruise::where('dest_id',$dest_id)->get();

        }elseif($dest_id == 0 && $d_port != 0 && $ship_id == 0){

            $cruise = cruise::where('departure_port',$d_port)->get();

        }elseif($dest_id == 0 && $d_port == 0 && $ship_id != 0){

            $cruise = cruise::where('ship_id',$ship_id)->get();

        }elseif($dest_id != 0 && $d_port != 0 && $ship_id == 0){

            $cruise = cruise::where('dest_id',$dest_id)->where('departure_port',$d_port)->get();

        }elseif($dest_id == 0 && $d_port != 0 && $ship_id != 0){

            $cruise = cruise::where('departure_port',$d_port)->where('ship_id',$ship_id)->get();

        }elseif($dest_id != 0 && $d_port == 0 && $ship_id != 0){

            $cruise = cruise::where('dest_id',$dest_id)->where('ship_id',$ship_id)->get();

        }elseif($dest_id != 0 && $d_port != 0 && $ship_id != 0){

            $cruise = cruise::where('dest_id',$dest_id)->where('departure_port',$d_port)->where('ship_id',$ship_id)->get();

        }

        if($dest_id != 0){
            $dest = destination::where('dest_id',$dest_id)->first();
            $dest_name = $dest->dest_name;
        }else{
            $dest_name = 'All Destinations';
        }

        if($d_port != 0){
            $port = port::where('port_id',$d_port)->first();
            $port_name = $port->port_name;
        }else{
            $port_name = 'All Ports';
        }

        if($ship_id !=0 ){
            $ship = ship::where('ship_id',$ship_id)->first();
            $ship_name = $ship->ship_name;
        }else{
            $ship_name = 'All Ships';
        }

        return view('view_result',compact('cruise','dest_name','port_name','ship_name'));
    }

    public function to_purchase(){

        $input = Request::all();

        $cr_id = $input['cruise_id'];
        $ca_id = $input['cabin_id'];
        $qty = $input['quantity'];

        return redirect('/purchase/'.$cr_id.'/'.$ca_id.'/'.$qty);
    }

    public function purchase($cr_id, $ca_id, $qty){

        $c = cruise::where('cruise_id', $cr_id)->first();
        $cabin = ship_cabin::where('ship_id', $c->ship->ship_id)->where('cabin_id', $ca_id)->first();

        $c_tbl = cabin::where('cabin_id',$ca_id)->first();
        $cabin->cabin_name = $c_tbl->cabin_name;

        if($qty>2){
            $cabin->cabin_qty = 2;
        }else{
            $cabin->cabin_qty = 1;
        }

        return view('purchase',compact('c','cabin','qty'));

    }

    public function purchase_save(){

        $input = Request::all();

        $cust = customer::where('cust_passport_num',$input['cust_passport_num'])->first();

        if(sizeof($cust)<1){
            $cust = customer::create([
                'cust_name' => $input['f_name'].' '.$input['l_name'],
                'cust_email' => $input['cust_email'],
                'cust_contact' => $input['cust_contact'],
                'cust_passport_num' => $input['cust_passport_num'],
                'cust_status' => 'active'
            ]);
        }

        $rsv = reservation::create([
            'cust_id' => $cust->cust_id,
            'cruise_id' => $input['cruise_id'],
            'cabin_id' => $input['cabin_id'],
            'cabin_qty' => $input['cabin_qty'],
            'ticket_qty' => $input['ticket_qty'],
        ]);

        payment::create([
            'resv_id' => $rsv->resv_id,
            'payment_method' => $input['payment_method'],
            'total_payment' => $input['total_payment'],
            'payment_status' => 'successful'
        ]);

        return redirect('/home');

    }

    public function add_compare(){

        $cruise_id = $_POST['cruise_id'];

        if( in_array( $cruise_id ,$_SESSION['compare'])) {

            $data['status']='exist';

        }else{

            if($_SESSION['compare'][1]==''){

                $_SESSION['compare'][1] = $cruise_id;
                $data['status']='ok';

            }elseif($_SESSION['compare'][2]==''){

                $_SESSION['compare'][2] = $cruise_id;
                $data['status']='ok';

            }elseif($_SESSION['compare'][3]== ''){

                $_SESSION['compare'][3] = $cruise_id;
                $data['status']='ok';

            }else{
                $data['status']='full';

            }
        }

        return Response::json($data);

    }

    public function compare_list(){

        $j=0;
        $sr = 0;

        for($i=1;$i<sizeof($_SESSION['compare']);$i++){
            if($_SESSION['compare'][$i]!=''){
                $cruise[$j]= cruise::where('cruise_id',$_SESSION['compare'][$i])->first();
                $j++;
                $sr = 1;
            }
        }

        /*for($i=0;$i<sizeof($cruise);$i++){
            echo $cruise[$i];
        }
        foreach($cruise as $c){
            echo $c->cruise_id.'<br>';
        }*/


        return view('compare',compact('cruise','sr'));
    }

    public function remove_compare($id){

        if($_SESSION['compare'][1] == $id){

            $_SESSION['compare'][1] = '';

        }else if($_SESSION['compare'][2] == $id){

            $_SESSION['compare'][2] = '';

        }else if($_SESSION['compare'][3] == $id){

            $_SESSION['compare'][3] = '';

        }

        return redirect('/compare_list');
    }

    public function about(){



        return view('about');
    }

    public function contact(){

        return view('contact_us');
    }

    public function faq(){

        return view('faq');
    }

    public function cruises(){

        $princess = ship::where('line_id',1)->get();
        $cunard = ship::where('line_id',2)->get();

        return view('cruises', compact('princess', 'cunard'));
    }



}
