@extends('master')

@section('title')
    Cruise Lines
@endsection

@section('content')
    <div class="content">
        <div class="container_12 static">
            <h3>Carnival Corporation's Cruise Lines</h3>
            <hr>
            <span>PRINCESS CRUISES</span><i class="fa fa-ship fa-lg"></i>
            <br><br>
            <p>
                Your cruise fare includes accommodations, meals throughout the day including our 4-course dining rooms,
                24-hour room service, entertainment, and an endless array of activities, including newly launched Discovery
                at Sea programs like Stargazing, kids crafts and more! Plus, you won&#39;t have to pay for costly airfare, trains,
                or cabs to get you from one city to the next. When you take everything into consideration you'll discover that
                you can actually save money by going on a cruise, as opposed to a land-based vacation.
                Additional fees may apply for services such as specialty restaurants, shore excursions, laundry, etc.
            </p>
            <h4 style="font-weight: bold; color: #263555;">Cruise Ships</h4>
            @for($i=0;$i<sizeof($princess);$i++)
                <p>{{($i+1).'. '.$princess[$i]->ship_name}}<br></p>
            @endfor
            <br><br>

            <span>CUNARD CRUISES</span><i class="fa fa-ship fa-lg"></i>
            <br><br>
            <p>
                Our larger ships are more stable with heavier weight and therefore are less prone to rolling motion.
                Most ships are so large and well-stabilized that it doesnt even feel like youre moving, especially
                in calmer waters such as Alaskas Inside Passage and the Caribbean. The middle of the ship tends have
                less motion, as it is the natural balance point.
                If you are prone to sea sickness, consider itineraries with fewer sea days. Port intensive cruises will
                give you the opportunity to spend more time on land. Consult your physician for a drug or alternative
                remedy if youre susceptible to motion sickness.
            </p>
            <h4 style="font-weight: bold; color: #263555;">Cruise Ships</h4>
            @for($i=0;$i<sizeof($cunard);$i++)
                <p>{{($i+1).'. '.$cunard[$i]->ship_name}}<br></p>
            @endfor
            <br><br>
            <br><br>


        </div>
    </div>
@endsection