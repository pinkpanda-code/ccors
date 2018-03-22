@extends('master')

@section('title')
    View Cruises
@endsection

@section('content')
    <div class="content">
        <div class="container_12">
            <h3>Purchase Ticket</h3>
            <hr>
            <br>
            <form method="post" id="purchase_form" class="purchase_form form1">
                <input type="hidden" name="_token" value="{{ csrf_token()}}"/>

                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 15px; height: 80px;" >
                        <div class="row result_header">
                            <div class="form-group col-lg-1 text-center">
                                <div class="row">
                                    <span>{{$c->duration}}</span>
                                </div>
                                <div class="row">
                                    <span>Days</span>
                                </div>
                            </div>
                            <div class="form-group col-lg-11">
                                <div class="row">
                                    <span style="line-height:2em" > Rounding Trip from {{$c->d_port->port_name}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row result_body">
                            <div class="form-group col-lg-3" style="padding-top: 10px; padding-left: 20px;">
                                <img src="{{ URL::asset('images/page3_img'.$c->cruise_id.'.jpg') }}" alt="">
                            </div>
                            <div class="form-group col-lg-5" style="padding-top: 10px; padding-left: 20px;">
                                <label>Ship:</label>
                                <br>
                                <span>{{$c->ship->ship_name}}</span>
                                <br>
                                <br>
                                <label>Ports:</label>
                                <br>
                                    <span>
                                        {{--*/ $bam=0 /*--}}
                                        @foreach($c->port as $p)
                                            @if($bam==0)
                                                {{$p->port_name}}
                                                {{--*/ $bam=1 /*--}}
                                            @else
                                                {{'| '.$p->port_name}}
                                            @endif
                                        @endforeach
                                    </span>
                                <br>
                                <br>
                                <label>Date:</label>
                                <br>
                                <span>{{' '.date('Y M d', strtotime($c->start_date))}}</span>
                                <br>
                                <br>
                                <label>Cabin:</label>
                                <br>
                                <span>{{$cabin->cabin_name.' ('.$cabin->cabin_qty.' @ RM'.$cabin->cabin_price.')'}}</span>
                                <br>
                                <br>
                                <label>Number of Ticket(s):</label>
                                <br>
                                <span>{{$qty.' Ticket(s)'}}</span>
                                <br>
                                <br>
                                <label>Total Price:</label>
                                <br>
                                <span>{{'RM '.$cabin->cabin_price*$cabin->cabin_qty.' (Tax, Fees & Port Fares Expenses included)'}}</span>
                            </div>

                            <div class="form-group col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">

                                        <span style="font-size: 25px; font-family: 'Pathway Gothic One', sans-serif;">Personal Details</span>

                                        <br><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm" placeholder="First Name" name="f_name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm" placeholder="Last Name" name="l_name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm" placeholder="Email Address" name="cust_email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm" placeholder="Contact Number" name="cust_contact" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm" placeholder="Passport Number" name="cust_passport_num" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control input-sm" name="payment_method">
                                                <option value="master">Master</option>
                                                <option value="visa">Visa</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <input type="hidden" id="check" name="check" value="0">
                        <input type="hidden" name="cabin_id" value="{{$cabin->cabin_id}}">
                        <input type="hidden" name="cabin_qty" value="{{$cabin->cabin_qty}}">
                        <input type="hidden" name="ticket_qty" value="{{$qty}}">
                        <input type="hidden" name="total_payment" value="{{$cabin->cabin_price*$cabin->cabin_qty}}">
                        <input type="hidden" name="cruise_id" value="{{$c->cruise_id}}">
                        <button type="submit" class="btn btn-default pull-right">Confirm Purchase</button>
                        <br>
                        <br>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span>Confirmation</span>
                            </div>
                            <div class="modal-body">

                                <span>Confirm Purchasing?</span>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>

@endsection


@section('script')
    <script>

        $(document).ready(function() {


            $(window).load(function () {
                $().UItoTop({easingType: 'easeOutQuart'});
            });

            $("#myModal").on('hide.bs.modal', function () {
                $("#check").val("0");
            });

            $("#purchase_form").submit(function (event) {

                if ($("#check").val() === "0") {

                    $("#check").val("1");
                    $("#myModal").modal();
                    event.preventDefault();
                    return false;

                } else if ($("#check").val() === "1") {
                    return true;
                }
            });

        });
    </script>
@endsection