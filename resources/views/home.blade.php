@extends('master')

@section('title')
    Home
@endsection

@section('content')
    <div class="container_12">
        <div class="grid_12">
            <div class="slider-relative">
                <div class="slider-block">
                    <div class="slider">
                        <a href="#" class="prev"></a><a href="#" class="next"></a>
                        <ul class="items">
                            <li><img src="images/slide.jpg" alt="">
                                <div class="banner">
                                    <div>We Travel Not To Escape From Life</div><br>
                                    <span>but life not to escape from us</span>
                                </div>
                            </li>
                            <li><img src="images/slide1.jpg" alt=""></li>
                            <li><img src="images/slide2.jpg" alt=""></li>
                            <li><img src="images/slide3.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content"><div class="ic"></div>
        <div class="container_12">
            <div class="grid_12">
                <h3>Top Itineraries</h3>
            </div>
            <div class="boxes">

                <div class="grid_4">
                    <figure>
                        <div><img src="images/page1_img3.jpg" alt=""></div>
                        <figcaption>
                            <h3>Paris</h3>
                            The fascination of the French capital, &#39;the city of cities&#39; as Victor Hugo put it, is eternal. It has been growing for over 2,000 years, each of its many layers is rich in history and intrigue. Paris is a city ideal for strolling, there&#39;s always something different in every corner.
                            <a href="{{url('/view_result/3/8/7')}}" class="btn btn-default">View Details</a>
                        </figcaption>
                    </figure>
                </div>

                <div class="grid_4">
                    <figure>
                        <div><img src="images/page1_img2.jpg" alt=""></div>
                        <figcaption>
                            <h3>New York</h3>
                            New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers. The city is home to numerous museums, parks and shopping streets.
                            <a href="{{url('/view_result/3/8/7')}}" class="btn btn-default">View Details</a>
                        </figcaption>
                    </figure>
                </div>

                <div class="grid_4">
                    <figure>
                        <div><img src="images/page1_img1.jpg" alt=""></div>
                        <figcaption>
                            <h3>Venice</h3>
                            In a relatively tiny area, Venice harbours a wealth of artistic and architectural wonders that even many large nations couldn&#39;t lay claim to. Some of Venice&#39;s unique and overwhelming sights are displayed in showcase churches and major galleries.
                            <a href="{{url('/view_result/3/8/7')}}" class="btn btn-default">View Details</a>
                        </figcaption>
                    </figure>
                </div>

                <div class="clear"></div>
            </div>


            <div class="grid_12">
                <div class="tabs" id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Last Minute</a></li>
                        <li><a href="#tabs-2">Hot Deals</a></li>
                        <li><a href="#tabs-3">All-Inclusive</a></li>
                    </ul>
                    <div class="clear"></div>
                    <div class="tab_cont" id="tabs-1">
                        <img src="images/page3_img4.jpg" alt="">
                        <div class="text1">Albany, Australia</div>
                        Albany  is a port city in the Great Southern region of Western Australia, 418 km SE of Perth, the state capital. Albany is the oldest permanently settled town in Western Australia, predating Perth and Fremantle by over two years.
                        The city centre is at the northern edge of Princess Royal Harbour, which is a part of King George Sound. The central business district is bounded by Mount Clarence to the east and Mount Melville to the west. The city is in the local government area of the City of Albany.

                        <div class="clear"></div>
                        <a href="{{url('/view_result/3/8/7')}}" class="btn btn-default">View Details</a>
                        <div class="clear"></div>
                        <hr>
                        <div class="clear cl1"></div>
                        <img src="images/page3_img5.jpg" alt="">
                        <div class="text1 tx1">Auckland, New Zealand </div>
                        Auckland, based around 2 large harbours, is a major city in the north of New Zealand North Island. In central Queen Street, the iconic Sky Tower has views of Viaduct Harbour, which is full of superyachts and lined with bars and cafes. Auckland Domain, the city oldest park, is based around an extinct volcano and home to the formal Wintergardens. Mission Bay Beach is minutes from Downtown.
                        <div class="clear"></div>
                        <a href="{{url('/view_result/3/8/7')}}" class="btn btn-default">View Details</a>
                        <div class="clear"></div>

                    </div>

                    <div class="tab_cont" id="tabs-2">
                        <img src="images/page3_img2.jpg" alt="">
                        <div class="text1">Galway, Ireland</div>
                        Galway, a harbour city on Ireland west coast, sits where the River Corrib meets the Atlantic. The city hub is 18th-century Eyre Square, a popular meeting spot surrounded by shops, and traditional pubs that often offer live Irish folk music. Nearby, stone-clad cafes, boutiques and art galleries line the winding lanes of the Latin Quarter, which retains portions of the medieval city walls.
                        <div class="clear"></div>
                        <a href="{{url('/view_result/3/8/7')}}" class="btn btn-default">ViewDetails</a>
                        <div class="clear"></div>
                        <hr>
                        <div class="clear cl1"></div>
                        <img src="images/page3_img3.jpg" alt="">
                        <div class="text1 tx1">Incheon, Korea</div>
                        Incheon, a South Korean city bordering the capital of Seoul, has long been a transportation hub. The ultramodern, massive Incheon International Airport, with railway connections to Seoul, features a casino, spa and golf course. Yeonan Pier, close to the popular Incheon Fish Market, is the starting point for many boat tours. Incheon is also known for its beach-lined islands, including Yeongjong and Muui-dong.
                        <div class="clear"></div>
                        <a href="{{url('/view_result/3/8/7')}}" class="btn btn-default">View Details</a>
                        <div class="clear"></div>
                    </div>

                    <div class="tab_cont" id="tabs-3">

                        <img src="images/page3_img8.jpg" alt="">
                        <div class="text1">Liverpool, England</div>
                        Liverpool is a historic maritime city in northwest England, where the River Mersey meets the Irish Sea. A key trade and migration port from the 18th to the early 20th centuries, it's also, famously, the hometown of The Beatles. Ferries cruise the waterfront, where the iconic shipping and mercantile buildings known as the "Three Graces" stand on the Pier Head.
                        <div class="clear"></div>
                        <a href="{{url('/view_result/3/8/7')}}" class="btn btn-default">View Details</a>
                        <div class="clear"></div>
                        <hr>
                        <div class="clear cl1"></div>
                        <img src="images/page3_img9.jpg" alt="">
                        <div class="text1 tx1">Princess Cays, Bahama</div>
                        The Bahamas is a coral-based archipelago in the Atlantic Ocean, comprising 700 islands and cays that range from uninhabited to resort-packed. The northernmost, Grand Bahama, and Paradise Island, home to the sprawling Atlantis resort, are among the best known. Scuba diving and snorkeling sites include the massive Andros Barrier Reef.
                        <div class="clear"></div>
                        <a href="{{url('/view_result/3/8/7')}}" class="btn btn-default">View Details</a>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

        </div>
    </div>
@endsection

@section('script')
    <script>
        $(window).load(function(){
            $('.slider')._TMS({
                show:0,
                pauseOnHover:false,
                prevBu:'.prev',
                nextBu:'.next',
                playBu:false,
                duration:800,
                preset:'random',
                pagination:false,//'.pagination',true,'<ul></ul>'
                pagNums:false,
                slideshow:10000,
                numStatus:false,
                banners:true,
                waitBannerAnimation:false,
                progressBar:false
            })	;
            $( "#tabs" ).tabs();

            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
@endsection