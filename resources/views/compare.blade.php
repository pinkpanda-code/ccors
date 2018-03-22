@extends('master')

@section('title')
    View Cruises
@endsection

@section('content')

    <div class="content">
        <div class="container_12 compare">
            <h3>Compare List</h3>
            @if($sr==0)
                <span>No cruises to compare yet..</span>
            @else
                <table class="table table-hover table-bordered" id="compare_table">
                    <tr>
                        <th style="width:16%">Cruise</th>
                        @if(isset($cruise[0])&&!isset($cruise[1])&&!isset($cruise[2]))
                            <th style="width:84%">Cruise #1</th>

                        @elseif(isset($cruise[0])&&isset($cruise[1])&&!isset($cruise[2]))
                            <th style="width:42%">Cruise #1</th>
                            <th style="width:42%">Cruise #2</th>
                        @else
                            <th style="width:28%">Cruise #1</th>
                            <th style="width:28%">Cruise #2</th>
                            <th style="width:28%">Cruise #3</th>
                        @endif
                    </tr>

                    <tr>
                        <td><label></label></td>
                        @foreach($cruise as $c)
                            <td> <img src="{{ URL::asset('images/page3_img'.$c->cruise_id.'.jpg') }}" alt=""></td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><label>Ship</label></td>
                        @foreach($cruise as $c)
                            <td>{{$c->ship->ship_name.' ('.$c->ship->cruise_line->line_name.')'}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><label>Departure / End Port</label></td>
                        @foreach($cruise as $c)
                            <td>{{$c->d_port->port_name}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><label>Departure Date</label></td>
                        @foreach($cruise as $c)
                            <td>{{date('Y M d', strtotime($c->start_date))}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><label>Interior</label></td>
                        @foreach($cruise as $c)
                            <td>
                                @if(isset($c->ship->cabin[0]))
                                {{'RM '.$c->ship->cabin[0]->pivot->cabin_price}}
                                @endif
                            </td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><label>Oceanview</label></td>
                        @foreach($cruise as $c)
                            <td>
                                @if(isset($c->ship->cabin[1]))
                                    {{'RM '.$c->ship->cabin[1]->pivot->cabin_price}}
                                @endif
                            </td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><label>Balcony</label></td>
                        @foreach($cruise as $c)
                            <td>
                                @if(isset($c->ship->cabin[2]))
                                    {{'RM '.$c->ship->cabin[2]->pivot->cabin_price}}
                                @endif
                            </td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><label>Mini-Suite</label></td>
                        @foreach($cruise as $c)
                            <td>
                                @if(isset($c->ship->cabin[3]))
                                    {{'RM '.$c->ship->cabin[3]->pivot->cabin_price}}
                                @endif
                            </td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><label>Suite</label></td>
                        @foreach($cruise as $c)
                            <td>
                                @if(isset($c->ship->cabin[4]))
                                    {{'RM '.$c->ship->cabin[4]->pivot->cabin_price}}
                                @endif
                            </td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><label>Itinerary</label></td>
                        @foreach($cruise as $c)
                            <td>
                                {{--*/ $bam=0 /*--}}
                                @foreach($c->port as $p)
                                    @if($bam==0)
                                        {{$p->port_name}}
                                        {{--*/ $bam=1 /*--}}
                                    @else
                                        <br>{{$p->port_name}}
                                    @endif
                                @endforeach
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><label></label></td>
                        @foreach($cruise as $c)
                            <td>
                                <div class="row text-center">
                                    <a href="{{ url('/remove_compare',$c->cruise_id) }}" class="btn btn-default">Remove from Compare</a>
                                </div>
                                <br>
                                <div class="row text-center">
                                    <a href="{{ url('/view_result/'.$c->dest_id.'/'.$c->departure_port.'/'.$c->ship_id) }}" class="btn btn-default">Purchase Ticket</a>
                                </div>
                            </td>
                        @endforeach
                    </tr>

                </table>
            @endif
        </div>
    </div>
@endsection



@section('script')
    <script>

        $(document).ready(function() {


            $(window).load(function () {
                $().UItoTop({easingType: 'easeOutQuart'});
            });

        });
    </script>
@endsection