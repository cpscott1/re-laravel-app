@extends('.layouts.main');

@section('content') 
<div class="listings-page">
    <div class="listings-city">
        <img class="listing-city-image" src="https://cdn.discordapp.com/attachments/1107745993606303814/1148861404087070740/Cam_Real_estate_building_hero_image_9f7db155-79da-4270-a320-535fae32d82e.png" alt="">
        <h1 class="listing-city-title">Oklahoma City</h1>
    </div>
    <div class="listings-filter">
        <div class="listings-filter-container">
            <div class="filter-option">
                Any Price <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="filter-option">
                All Beds <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="filter-option">
                Home Type <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="filter-option">
                More <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="filter-button">
                Search
            </div>
        </div>
    </div>
    <div class="listings-properties">
        <div class="listings-properties-container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="listings-properties-item">
                    <img src="https://cdn.discordapp.com/attachments/1107745993606303814/1148861404087070740/Cam_Real_estate_building_hero_image_9f7db155-79da-4270-a320-535fae32d82e.png" alt="">
                    <div class="listings-properties-saved">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <span class="listing-properties-itemprice">
                        $250,000
                    </span>
                    <span class="listing-properties-itemdetails">
                    <i class="fa-solid fa-bed"></i> 4 <i class="fa-solid fa-bath"></i> 3 SQ 2440
                    </span>
                    <span class="listing-properties-itemaddress">
                        2135 Howard St, <br>
                        Oklahoma City, OK 73112
                    </span>
                    <div class="listing-properties-itemline">

                    </div>
                    <span class="listing-properties-itemowner">
                        Debby Reality
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection