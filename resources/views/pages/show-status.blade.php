@extends('.layouts.account');

@section('title', 'Show Status')
@section('page-bg', 'https://cdn.discordapp.com/attachments/1107745993606303814/1151302111544488006/Cam_heart_image_flat_ui_0128fd77-3e2d-447c-b927-7a67304955e8.png')
@section('content') 


<div class="request-list">
    <h2>All Requests</h2>
    <div class="request-list-container">
        <h2>2135 Howard Ave</h2>
        <div class="request-list-info">
            <span class="request-list-infotitle">
                status 
            </span>
            <div class="request-list-infostatus request-list-infostatus--success request-list-infostatus--cancelled request-list-infostatus--sold">
                Success
            </div>
        </div>
    </div>
</div>
@endsection