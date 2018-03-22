@extends('master')

@section('title')
    View Cruises
@endsection

@section('content')
    <div class="content">
        <div class="container_12">
            <h3>View Cruises</h3>
            <hr>
            <br>
            <div class="row">
                <div class="form-group col-lg-4">
                    <label>Destination</label>
                    <input class="form-control input-sm" type="text" id="dest_name" name="dest_name" value="{{$dest_name}}" readonly>
                </div>

                <div class="form-group col-lg-4">
                    <label>Departure / End Port</label>
                    <input class="form-control input-sm" type="text" id="port_name" name="port_name" value="{{$port_name}}" readonly>
                </div>

                <div class="form-group col-lg-4">
                    <label>Ship</label>
                    <input class="form-control input-sm" type="text" id="ship_name" name="ship_name" value="{{$ship_name}}" readonly>
                </div>
            </div>
            <br>
            <br>
            <div class="row">

                <div class="col-lg-12">
                    <a href="{{ url('/book_now') }}" class="btn btn-default pull-right">Search Again</a>
                </div>

            </div>


            @foreach($cruise as $c)
                <form method="post" id="view_form" class="view_form form1">
                <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                    <hr>
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
                                <div class="form-group col-lg-8">
                                    <div class="row">
                                        <span style="line-height:2em" > Rounding Trip from {{$c->d_port->port_name}}</span>
                                    </div>
                                </div>
                                <div class="form-group col-lg-3">
                                    <div class="row">
                                        <div class="col-lg-6" style="padding-top: 12px;">
                                            <button class="btn btn-default pull-right add_compare" type="button" value="{{$c->cruise_id}}">Add to Compare</button>
                                        </div>
                                        <div class="col-lg-6" style="padding-top: 14px;">
                                            <span class="text-center"><a href="{{ url('/compare_list') }}" style="text-decoration: none;">Compare List</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
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
                                    <span>{{$c->ship->ship_name.' ('.$c->ship->cruise_line->line_name.')'}}</span>
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
                                </div>

                                <div class="form-group col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Cabin(s) Available</label>
                                                <select class="form-control input-sm" id="cabin_id" name="cabin_id">
                                                    @foreach($c->ship->cabin as $s)
                                                        <option value="{{$s->pivot->cabin_id}}"> {{$s->cabin_name.' (RM '.$s->pivot->cabin_price.')'}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Number of Ticket(s)</label>
                                                <select class="form-control input-sm" id="quantity" name="quantity">
                                                    @for($i=1;$i<5;$i++)
                                                        <option value="{{$i}}"> {{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>

                                            <div class="form-group" style="padding-left: 15px" >
                                                <div class="row">
                                                    <span style="font-size: 16px">**Fixed 1 cabin type per booking</span>
                                                </div>
                                                <div class="row">
                                                    <span style="font-size: 16px">**Maximum 2 person per cabin</span>
                                                </div>
                                            </div>

                                            <input type="hidden" name="cruise_id" value="{{$c->cruise_id}}">
                                            <button type="submit" class="btn btn-default pull-right">Purchase Ticket</button>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <span>Alert</span>
                                </div>
                                <div class="modal-body">

                                    <span id="msg"></span>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Got It</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            @endforeach
        </div>
    </div>

@endsection


@section('script')
    <script>
        $(window).load(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
        });

        $('.add_compare').click(function() {

            $.post('{{ url('/add_compare') }}', { cruise_id: $(this).val()}, onSuccess);

            function onSuccess(data){
                if(data.status == 'ok'){
                    $('#msg').text('Successfully added to Compare List!');
                    $("#myModal").modal();
                }else if(data.status == 'full'){
                    $('#msg').text('Compare List is full.. Please remove before adding.');
                    $("#myModal").modal();
                }else if(data.status == 'exist'){
                    $('#msg').text('It is already in the Compare List!');
                    $("#myModal").modal();
                }
            }

        });

    </script>
@endsection