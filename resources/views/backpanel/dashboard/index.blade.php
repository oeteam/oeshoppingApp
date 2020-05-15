@extends('backpanel/layouts.layout')

@section('content')
<div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Stats -->
<div class="row">
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-primary bg-darken-2">
                        <i class="icon-camera font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-primary white media-body">
                        <h5>Products</h5>
                        <h5 class="text-bold-400 mb-0"><i class="feather icon-plus"></i> 28</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-danger bg-darken-2">
                        <i class="icon-user font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-danger white media-body">
                        <h5>New Users</h5>
                        <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> 1,238</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-warning bg-darken-2">
                        <i class="icon-basket-loaded font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-warning white media-body">
                        <h5>New Orders</h5>
                        <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-down"></i> 4,658</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-success bg-darken-2">
                        <i class="icon-wallet font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-success white media-body">
                        <h5>Total Profit</h5>
                        <h5 class="text-bold-400 mb-0"><i class="feather icon-arrow-up"></i> 5.6 M</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Stats -->
<!--Product sale & buyers -->
<div class="row match-height">
    <div class="col-xl-8 col-lg-12">
        <div class="card" style="height: 402.4px;">
            <div class="card-header">
                <h4 class="card-title">Products Sales</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="products-sales" class="height-300" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="927" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.2px; top: -0.65px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.53125" y="261.375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#e4e7ed" d="M45.03125,261.5H902.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="214.1" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.396874999999994" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">60</tspan></text><path fill="none" stroke="#e4e7ed" d="M45.03125,214.5H902.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="166.825" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.395312499999989" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">120</tspan></text><path fill="none" stroke="#e4e7ed" d="M45.03125,166.5H902.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="119.54999999999998" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.401562499999983" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">180</tspan></text><path fill="none" stroke="#e4e7ed" d="M45.03125,119.5H902.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="72.27499999999998" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.399999999999977" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">240</tspan></text><path fill="none" stroke="#e4e7ed" d="M45.03125,72.5H902.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan></text><path fill="none" stroke="#e4e7ed" d="M45.03125,25.5H902.2" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="902.2" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Dec</tspan></text><text x="825.2087949101797" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Nov</tspan></text><text x="745.6512163173653" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Oct</tspan></text><text x="668.6600112275449" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sep</tspan></text><text x="589.1024326347306" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Aug</tspan></text><text x="509.5448540419162" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jul</tspan></text><text x="432.55364895209584" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jun</tspan></text><text x="352.9960703592815" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">May</tspan></text><text x="276.0048652694611" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Apr</tspan></text><text x="196.4472866766467" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar</tspan></text><text x="124.58882859281438" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Feb</tspan></text><text x="45.03125" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jan</tspan></text><path fill="#0bcfd2" stroke="none" d="M45.03125,261.375C64.92064464820359,214.1,104.69943394461079,72.27499999999998,124.58882859281438,72.27499999999998C142.55344311377246,72.27499999999998,178.48267215568862,238.93940677966103,196.4472866766467,261.375C216.3366813248503,261.375,256.1154706212575,261.375,276.0048652694611,261.375C295.2526665419162,261.375,333.7482690868264,261.375,352.9960703592815,261.375C372.8854650074851,261.375,412.6642543038922,261.375,432.55364895209584,261.375C451.80145022455093,261.375,490.2970527694611,261.375,509.5448540419162,261.375C529.4342486901198,253.36666666666667,569.213037986527,198.34166666666667,589.1024326347306,198.34166666666667C608.9918272829342,198.34166666666667,648.7706165793413,253.36666666666667,668.6600112275449,261.375C687.9078125000001,261.375,726.4034150449102,261.375,745.6512163173653,261.375C765.5406109655689,231.34375,805.319400261976,25,825.2087949101797,25C844.4565961826347,25,882.952198727545,202.28125,902.2,261.375L902.2,261.375L45.03125,261.375Z" fill-opacity="0.9" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.9;"></path><path fill="none" stroke="#00b5b8" d="M45.03125,261.375C64.92064464820359,214.1,104.69943394461079,72.27499999999998,124.58882859281438,72.27499999999998C142.55344311377246,72.27499999999998,178.48267215568862,238.93940677966103,196.4472866766467,261.375C216.3366813248503,261.375,256.1154706212575,261.375,276.0048652694611,261.375C295.2526665419162,261.375,333.7482690868264,261.375,352.9960703592815,261.375C372.8854650074851,261.375,412.6642543038922,261.375,432.55364895209584,261.375C451.80145022455093,261.375,490.2970527694611,261.375,509.5448540419162,261.375C529.4342486901198,253.36666666666667,569.213037986527,198.34166666666667,589.1024326347306,198.34166666666667C608.9918272829342,198.34166666666667,648.7706165793413,253.36666666666667,668.6600112275449,261.375C687.9078125000001,261.375,726.4034150449102,261.375,745.6512163173653,261.375C765.5406109655689,231.34375,805.319400261976,25,825.2087949101797,25C844.4565961826347,25,882.952198727545,202.28125,902.2,261.375" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.03125" cy="261.375" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="124.58882859281438" cy="72.27499999999998" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="196.4472866766467" cy="261.375" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="276.0048652694611" cy="261.375" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="352.9960703592815" cy="261.375" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="432.55364895209584" cy="261.375" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="509.5448540419162" cy="261.375" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="589.1024326347306" cy="198.34166666666667" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="668.6600112275449" cy="261.375" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="745.6512163173653" cy="261.375" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="825.2087949101797" cy="25" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="902.2" cy="261.375" r="0" fill="#00b5b8" stroke="#00b5b8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#f7bc9d" stroke="none" d="M45.03125,261.375C64.92064464820359,261.375,104.69943394461079,261.375,124.58882859281438,261.375C142.55344311377246,261.375,178.48267215568862,261.375,196.4472866766467,261.375C216.3366813248503,241.71046963276837,256.1154706212575,114.17343749999999,276.0048652694611,111.67083333333332C295.2526665419162,109.24895833333332,333.7482690868264,237.80208333333334,352.9960703592815,241.67708333333334C372.8854650074851,245.68125,412.6642543038922,140.68489583333334,432.55364895209584,143.1875C451.80145022455093,145.609375,490.2970527694611,246.84375,509.5448540419162,261.375C529.4342486901198,261.375,569.213037986527,261.375,589.1024326347306,261.375C608.9918272829342,261.375,648.7706165793413,261.375,668.6600112275449,261.375C687.9078125000001,261.375,726.4034150449102,261.375,745.6512163173653,261.375C765.5406109655689,261.375,805.319400261976,261.375,825.2087949101797,261.375C844.4565961826347,261.375,882.952198727545,261.375,902.2,261.375L902.2,261.375L45.03125,261.375Z" fill-opacity="0.9" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.9;"></path><path fill="none" stroke="#fa8e57" d="M45.03125,261.375C64.92064464820359,261.375,104.69943394461079,261.375,124.58882859281438,261.375C142.55344311377246,261.375,178.48267215568862,261.375,196.4472866766467,261.375C216.3366813248503,241.71046963276837,256.1154706212575,114.17343749999999,276.0048652694611,111.67083333333332C295.2526665419162,109.24895833333332,333.7482690868264,237.80208333333334,352.9960703592815,241.67708333333334C372.8854650074851,245.68125,412.6642543038922,140.68489583333334,432.55364895209584,143.1875C451.80145022455093,145.609375,490.2970527694611,246.84375,509.5448540419162,261.375C529.4342486901198,261.375,569.213037986527,261.375,589.1024326347306,261.375C608.9918272829342,261.375,648.7706165793413,261.375,668.6600112275449,261.375C687.9078125000001,261.375,726.4034150449102,261.375,745.6512163173653,261.375C765.5406109655689,261.375,805.319400261976,261.375,825.2087949101797,261.375C844.4565961826347,261.375,882.952198727545,261.375,902.2,261.375" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.03125" cy="261.375" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="124.58882859281438" cy="261.375" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="196.4472866766467" cy="261.375" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="276.0048652694611" cy="111.67083333333332" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="352.9960703592815" cy="241.67708333333334" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="432.55364895209584" cy="143.1875" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="509.5448540419162" cy="261.375" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="589.1024326347306" cy="261.375" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="668.6600112275449" cy="261.375" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="745.6512163173653" cy="261.375" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="825.2087949101797" cy="261.375" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="902.2" cy="261.375" r="0" fill="#fa8e57" stroke="#fa8e57" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#f2a1ad" stroke="none" d="M45.03125,261.375C64.92064464820359,261.375,104.69943394461079,261.375,124.58882859281438,261.375C142.55344311377246,261.375,178.48267215568862,261.375,196.4472866766467,261.375C216.3366813248503,261.375,256.1154706212575,261.375,276.0048652694611,261.375C295.2526665419162,253.625,333.7482690868264,198.34166666666667,352.9960703592815,198.34166666666667C372.8854650074851,198.34166666666667,412.6642543038922,253.36666666666667,432.55364895209584,261.375C451.80145022455093,261.375,490.2970527694611,261.375,509.5448540419162,261.375C529.4342486901198,261.375,569.213037986527,261.375,589.1024326347306,261.375C608.9918272829342,261.375,648.7706165793413,261.375,668.6600112275449,261.375C687.9078125000001,246.84375,726.4034150449102,143.1875,745.6512163173653,143.1875C765.5406109655689,143.1875,805.319400261976,246.359375,825.2087949101797,261.375C844.4565961826347,261.375,882.952198727545,261.375,902.2,261.375L902.2,261.375L45.03125,261.375Z" fill-opacity="0.9" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.9;"></path><path fill="none" stroke="#f25e75" d="M45.03125,261.375C64.92064464820359,261.375,104.69943394461079,261.375,124.58882859281438,261.375C142.55344311377246,261.375,178.48267215568862,261.375,196.4472866766467,261.375C216.3366813248503,261.375,256.1154706212575,261.375,276.0048652694611,261.375C295.2526665419162,253.625,333.7482690868264,198.34166666666667,352.9960703592815,198.34166666666667C372.8854650074851,198.34166666666667,412.6642543038922,253.36666666666667,432.55364895209584,261.375C451.80145022455093,261.375,490.2970527694611,261.375,509.5448540419162,261.375C529.4342486901198,261.375,569.213037986527,261.375,589.1024326347306,261.375C608.9918272829342,261.375,648.7706165793413,261.375,668.6600112275449,261.375C687.9078125000001,246.84375,726.4034150449102,143.1875,745.6512163173653,143.1875C765.5406109655689,143.1875,805.319400261976,246.359375,825.2087949101797,261.375C844.4565961826347,261.375,882.952198727545,261.375,902.2,261.375" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.03125" cy="261.375" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="124.58882859281438" cy="261.375" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="196.4472866766467" cy="261.375" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="276.0048652694611" cy="261.375" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="352.9960703592815" cy="198.34166666666667" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="432.55364895209584" cy="261.375" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="509.5448540419162" cy="261.375" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="589.1024326347306" cy="261.375" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="668.6600112275449" cy="261.375" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="745.6512163173653" cy="143.1875" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="825.2087949101797" cy="261.375" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="902.2" cy="261.375" r="0" fill="#f25e75" stroke="#f25e75" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 541.746px; top: 158px; display: none;"><div class="morris-hover-row-label">Aug</div><div class="morris-hover-point" style="color: #689bc3">
  Electronics:
  80
</div><div class="morris-hover-point" style="color: #a2b3bf">
  Apparel:
  0
</div><div class="morris-hover-point" style="color: #64b764">
  Decor:
  0
</div></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card" style="height: 402.4px;">
            <div class="card-header">
                <h4 class="card-title">Recent Buyers</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content px-1">
                <div id="recent-buyers" class="media-list height-300 position-relative ps ps--active-y">
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <div class="avatar avatar-online avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                            <i></i>
                            </div>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-right pt-1">$1,021</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-primary">Electronics</span><span class="badge badge-warning ml-1">Decor</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <div class="avatar avatar-away avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                            <i></i>
                            </div>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Lawrence Fowler <span class="font-medium-4 float-right pt-1">$2,021</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-danger">Appliances</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <div class="avatar avatar-busy avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                            <i></i>
                            </div>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Linda Olson <span class="font-medium-4 float-right pt-1">$1,112</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-primary">Electronics</span> <span class="badge badge-success ml-1">Office</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <div class="avatar avatar-online avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                            <i></i>
                            </div>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Roy Clark <span class="font-medium-4 float-right pt-1">$2,815</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-warning">Decor</span> <span class="badge badge-danger ml-1">Appliances</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <div class="avatar avatar-online avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png" alt="Generic placeholder image">
                            <i></i>
                            </div>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-right pt-1">$2,021</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-primary">Electronics</span><span class="badge badge-warning ml-1">Decor</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <div class="avatar avatar-away avatar-md"><img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png" alt="Generic placeholder image">
                            <i></i>
                            </div>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Lawrence Fowler <span class="font-medium-4 float-right pt-1">$1,321</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-danger">Appliances</span></p>
                        </div>
                    </a>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 300px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 189px;"></div></div></div>
            </div>
        </div>
    </div>
</div>
<!--/ Product sale & buyers -->
<!--Recent Orders & Monthly Salse -->
<div class="row match-height">
    <div class="col-xl-8 col-lg-12">
        <div class="card" style="height: 387.75px;">
            <div class="card-header">
                <h4 class="card-title">Recent Orders</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>Total paid invoices 240, unpaid 150. <span class="float-right"><a href="project-summary.html" target="_blank">Invoice Summary <i class="feather icon-arrow-right"></i></a></span></p>
                </div>
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                        <thead>
                            <tr>
                                <th>SKU</th>
                                <th>Invoice#</th>
                                <th>Customer Name</th>
                                <th>Status</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-truncate">PO-10521</td>
                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                <td class="text-truncate">Elizabeth W.</td>
                                <td class="text-truncate"><span class="badge badge-success">Paid</span></td>
                                <td class="text-truncate">$ 1200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-532521</td>
                                <td class="text-truncate"><a href="#">INV-01112</a></td>
                                <td class="text-truncate">Doris R.</td>
                                <td class="text-truncate"><span class="badge badge-warning">Overdue</span></td>
                                <td class="text-truncate">$ 5685.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-05521</td>
                                <td class="text-truncate"><a href="#">INV-001012</a></td>
                                <td class="text-truncate">Andrew D.</td>
                                <td class="text-truncate"><span class="badge badge-success">Paid</span></td>
                                <td class="text-truncate">$ 152.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-15521</td>
                                <td class="text-truncate"><a href="#">INV-001401</a></td>
                                <td class="text-truncate">Megan S.</td>
                                <td class="text-truncate"><span class="badge badge-success">Paid</span></td>
                                <td class="text-truncate">$ 1450.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-32521</td>
                                <td class="text-truncate"><a href="#">INV-008101</a></td>
                                <td class="text-truncate">Walter R.</td>
                                <td class="text-truncate"><span class="badge badge-warning">Overdue</span></td>
                                <td class="text-truncate">$ 685.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card" style="height: 387.75px;">
            <div class="card-content">
                <div class="card-body sales-growth-chart">
                    <div id="monthly-sales" class="height-250" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="250" version="1.1" width="428" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.4px; top: -0.9px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="42.53125" y="211.375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#e4e7ed" d="M55.03125,211.5H402.587" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="164.78125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">750</tspan></text><path fill="none" stroke="#e4e7ed" d="M55.03125,164.5H402.587" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="118.1875" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">1,500</tspan></text><path fill="none" stroke="#e4e7ed" d="M55.03125,118.5H402.587" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="71.59375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2,250</tspan></text><path fill="none" stroke="#e4e7ed" d="M55.03125,71.5H402.587" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">3,000</tspan></text><path fill="none" stroke="#e4e7ed" d="M55.03125,25.5H402.587" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="388.1055104166667" y="223.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Dec</tspan></text><text x="301.2165729166667" y="223.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sep</tspan></text><text x="214.32763541666665" y="223.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jun</tspan></text><text x="127.43869791666667" y="223.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar</tspan></text><rect x="65.16829270833333" y="97.375625" width="8.68889375" height="113.999375" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="94.13127187500001" y="65.0085" width="8.68889375" height="146.3665" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="123.09425104166667" y="120.734625" width="8.68889375" height="90.640375" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="152.05723020833332" y="131.295875" width="8.68889375" height="80.079125" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="181.020209375" y="109.055125" width="8.68889375" height="102.319875" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="209.98318854166666" y="77.43350000000001" width="8.68889375" height="133.9415" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="238.94616770833332" y="97.375625" width="8.68889375" height="113.999375" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="267.90914687500003" y="65.0085" width="8.68889375" height="146.3665" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="296.8721260416667" y="120.734625" width="8.68889375" height="90.640375" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="325.83510520833335" y="131.295875" width="8.68889375" height="80.079125" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="354.79808437500003" y="109.055125" width="8.68889375" height="102.319875" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="383.7610635416667" y="77.43350000000001" width="8.68889375" height="133.9415" rx="0" ry="0" fill="#00b5b8" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                </div>
            </div>
            <div class="card-footer">
                <div class="chart-title mb-1 text-center">
                    <h6>Total monthly Sales.</h6>
                </div>
                <div class="chart-stats text-center">
                    <a href="#" class="btn btn-sm btn-primary mr-1">Statistics <i class="feather icon-bar-chart"></i></a> <span class="text-muted">for the last year.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Recent Orders & Monthly Salse -->
<!-- Social & Weather -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
        <div class="card bg-gradient-x-danger" style="height: 220.8px;">
            <div class="card-content">
                <div class="card-body">
                    <div class="animated-weather-icons text-center float-left">
                        <svg version="1.1" id="cloudHailAlt2" class="climacon climacon_cloudHailAlt climacon-blue-grey climacon-darken-2 height-100" viewBox="15 15 70 70">
                            <g class="climacon_iconWrap climacon_iconWrap-cloudHailAlt">
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                        <circle cx="42" cy="65.498" r="2"></circle>
                                    </g>
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                        <circle cx="49.999" cy="65.498" r="2"></circle>
                                    </g>
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                        <circle cx="57.998" cy="65.498" r="2"></circle>
                                    </g>
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                        <circle cx="42" cy="65.498" r="2"></circle>
                                    </g>
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                        <circle cx="49.999" cy="65.498" r="2"></circle>
                                    </g>
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                        <circle cx="57.998" cy="65.498" r="2"></circle>
                                    </g>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="weather-details text-center">
                        <span class="block white darken-1">Snow</span>
                        <span class="font-large-2 block white darken-4">-5°</span>
                        <span class="font-medium-4 text-bold-500 white darken-1">London, UK</span>
                    </div>
                </div>
                <div class="card-footer bg-gradient-x-danger border-0">
                    <div class="row">
                        <div class="col-4 text-center display-table-cell white">
                            <i class="me-wind font-large-1 lighten-3 align-middle"></i> <span class="align-middle">2MPH</span>
                        </div>
                        <div class="col-4 text-center display-table-cell white">
                            <i class="me-sun2 font-large-1 lighten-3 align-middle"></i> <span class="align-middle">2%</span>
                        </div>
                        <div class="col-4 text-center display-table-cell white">
                            <i class="me-thermometer font-large-1 lighten-3 align-middle"></i> <span class="align-middle">13.0°</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card bg-gradient-x-info white" style="height: 220.8px;">
            <div class="card-content">
                <div class="card-body text-center">
                    <div class="mb-2">
                        <i class="fa fa-twitter font-large-2"></i>
                    </div>
                    <div class="unslider"><div class="tweet-slider unslider-horizontal" style="position: relative; overflow: hidden;">
                        <ul class="unslider-wrap unslider-carousel" style="width: 600%; margin-left: -100%; left: -200%;">
                            <li class="unslider-clone" style="width: 16.6667%;">Are there <span class="yellow">#common-sense</span> facts related to your business? Combine them with a great photo.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li><li class="" style="width: 16.6667%;">Congratulations to Rob Jones in accounting for winning our <span class="yellow">#NFL</span> football pool!
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li style="width: 16.6667%;" class="">Contests are a great thing to partner on. Partnerships immediately <span class="yellow">#DOUBLE</span> the reach.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li style="width: 16.6667%;" class="unslider-active">Puns, humor, and quotes are great content on <span class="yellow">#Twitter</span>. Find some related to your business.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li style="width: 16.6667%;" class="">Are there <span class="yellow">#common-sense</span> facts related to your business? Combine them with a great photo.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li><li class="unslider-clone" style="width: 16.6667%;">Congratulations to Rob Jones in accounting for winning our <span class="yellow">#NFL</span> football pool!
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                        </ul>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card bg-gradient-x-primary white" style="height: 220.8px;">
            <div class="card-content">
                <div class="card-body text-center">
                    <div class="mb-2">
                        <i class="fa fa-facebook font-large-2"></i>
                    </div>
                    <div class="unslider"><div class="fb-post-slider unslider-horizontal" style="position: relative; overflow: hidden;">
                        <ul class="unslider-wrap unslider-carousel" style="width: 600%; margin-left: -100%; left: -100%;">
                            <li class="unslider-clone" style="width: 16.6667%;">Are there #common-sense facts related to your business? Combine them with a great photo.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li><li class="" style="width: 16.6667%;">Congratulations to Rob Jones in accounting for winning our #NFL football pool!
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li style="width: 16.6667%;" class="unslider-active">Contests are a great thing to partner on. Partnerships immediately #DOUBLE the reach.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li style="width: 16.6667%;" class="">Puns, humor, and quotes are great content on #Twitter. Find some related to your business.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li style="width: 16.6667%;" class="">Are there #common-sense facts related to your business? Combine them with a great photo.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li><li class="unslider-clone" style="width: 16.6667%;">Congratulations to Rob Jones in accounting for winning our #NFL football pool!
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                        </ul>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Social & Weather -->
<!-- Basic Horizontal Timeline -->
<div class="row match-height">
    <div class="col-xl-8 col-lg-12">
        <div class="card" style="height: 591.588px;">
            <div class="card-header">
                <h4 class="card-title">Horizontal Timeline</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">
                        <section class="cd-horizontal-timeline loaded">
                            <div class="timeline">
                                <div class="events-wrapper">
                                    <div class="events" style="width: 1140px;">
                                        <ol>
                                            <li><a href="#0" data-date="16/01/2015" class="selected" style="left: 120px;">16 Jan</a></li>
                                            <li><a href="#0" data-date="28/02/2015" style="left: 300px;">28 Feb</a></li>
                                            <li><a href="#0" data-date="20/04/2015" style="left: 480px;">20 Mar</a></li>
                                            <li><a href="#0" data-date="20/05/2015" style="left: 600px;">20 May</a></li>
                                            <li><a href="#0" data-date="09/07/2015" style="left: 780px;">09 Jul</a></li>
                                            <li><a href="#0" data-date="30/08/2015" style="left: 960px;">30 Aug</a></li>
                                            <li><a href="#0" data-date="15/09/2015" style="left: 1020px;">15 Sep</a></li>
                                        </ol>
                                        <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.127939);"></span>
                                    </div>
                                    <!-- .events -->
                                </div>
                                <!-- .events-wrapper -->
                                <ul class="cd-timeline-navigation">
                                    <li><a href="#0" class="prev inactive">Prev</a></li>
                                    <li><a href="#0" class="next">Next</a></li>
                                </ul>
                                <!-- .cd-timeline-navigation -->
                            </div>
                            <!-- .timeline -->
                            <div class="events-content">
                                <ol>
                                    <li class="selected" data-date="16/01/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="28/02/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="20/04/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="20/05/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="09/07/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="30/08/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="15/09/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                </ol>
                            </div>
                            <!-- .events-content -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card" style="height: 591.588px;">
            <div class="card-header">
                <h4 class="card-title">Basic Card</h4>
            </div>
            <div class="card-content">
                <img class="img-fluid" src="../../../app-assets/images/carousel/06.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">3 hours ago</span>
                <span class="float-right">
                    <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                  </span>
            </div>
        </div>
    </div>
</div>
<!--/ Basic Horizontal Timeline -->

        </div>
      </div>
@endsection
