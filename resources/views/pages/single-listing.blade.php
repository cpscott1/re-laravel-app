@extends('.layouts.main');
@section('title', '1034 Howard Ave')

@section('content') 
<div class="single-listing-page">
    <div class="listing-top">
        <img class="listing-top-bg" src="https://cdn.discordapp.com/attachments/1107745993606303814/1148861404087070740/Cam_Real_estate_building_hero_image_9f7db155-79da-4270-a320-535fae32d82e.png" alt="">
        <div class="form-wrapper">
            <div class="listing-top-form-container">
                <form class="listing-top-form" action="">
                    <label class="listing-top-formlabel">
                        Schedule a tour
                    </label>
                    <div class="listing-top-form-group listing-top-form-group--horz">
                        <div class="listing-top-form-option">
                            In person
                        </div>
                        <div class="listing-top-form-option">
                            Video
                        </div>
                    </div>
                    <label class="listing-top-formlabel">
                        Date
                    </label>
                    <div class="listing-top-form-group listing-top-form-group--horz">
                        <div class="listing-top-form-option">
                            February, 12, 2023
                        </div>
                    </div>
                    <label class="listing-top-formlabel">
                        Choose a time
                    </label>
                    <div class="listing-top-form-group listing-top-form-group--horz">
                        <div class="listing-top-form-option">
                            11 AM
                        </div>
                    </div>
                    <label class="listing-top-formlabel">
                        Personal info
                    </label>
                    <div class="listing-top-form-group listing-top-form-group--horz">
                        <div class="listing-top-form-option">
                            Enter Phone
                        </div>
                    </div>
                    <div class="listing-top-form-group listing-top-form-group--horz">
                        <div class="listing-top-form-option">
                            Enter Email
                        </div>
                    </div>
                    <div class="listing-top-form-group listing-top-form-group--horz">
                        <button type="submit" class="listing-top-form-button">
                            Schedule tour
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="listing-info">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>2153 grand ave <br>OKC, OK 73112</h1>
                    <div class="listing-info-details">
                        <span class="listing-info-details-text"> <i class="fa-solid fa-bed"></i></span>
                        <span class="listing-info-details-text"> <i class="fa-solid fa-bath"></i></span>
                        <span class="listing-info-details-text"> 3 SQ 2440</span>
                    </div>
                </div>
                <div class="col-md-5">
                <span class="listing-info-agent-title">
                        Agent
                    </span>
                    <span class="listing-info-agent-name">
                        John Smith
                    </span>
                    <p class="listing-info-agent-profile">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium error eum sunt mollitia consequuntur, enim nisi dolorum fugit corporis, neque iure beatae omnis impedit, numquam quisquam quod similique dignissimos molestias.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="listing-extras">
        <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="listing-extras-details">
                         <h2>More info</h2>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit provident vitae voluptates amet quidem molestias, mollitia eos sit dolorum consequuntur libero esse incidunt, tempora rem facere repellat? Corporis, harum perferendis.</p>
                         <h3>Details</h3>
                            <ul>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="listing-extras-gallery">
                            <h2>Images</h2>
                            <img src="https://cdn.discordapp.com/attachments/1107745993606303814/1148861404087070740/Cam_Real_estate_building_hero_image_9f7db155-79da-4270-a320-535fae32d82e.png" alt="">
                            <img src="https://cdn.discordapp.com/attachments/1107745993606303814/1148861404087070740/Cam_Real_estate_building_hero_image_9f7db155-79da-4270-a320-535fae32d82e.png" alt="">
                            <img src="https://cdn.discordapp.com/attachments/1107745993606303814/1148861404087070740/Cam_Real_estate_building_hero_image_9f7db155-79da-4270-a320-535fae32d82e.png" alt="">
                            <img src="https://cdn.discordapp.com/attachments/1107745993606303814/1148861404087070740/Cam_Real_estate_building_hero_image_9f7db155-79da-4270-a320-535fae32d82e.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

@endsection