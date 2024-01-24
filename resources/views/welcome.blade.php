@extends('admin.layout.master')
@section('master')

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow f-w-600">$30200</h4>
                                        <h6 class="text-muted m-b-0">All Earnings</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-bar-chart f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-yellow">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green f-w-600">290+</h4>
                                        <h6 class="text-muted m-b-0">Page Views</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-file-text f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-pink f-w-600">145</h4>
                                        <h6 class="text-muted m-b-0">Task Completed</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-calendar f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-pink">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue f-w-600">500</h4>
                                        <h6 class="text-muted m-b-0">Downloads</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-download f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">% change</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Visitors</h5>
                                <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <div id="visitor" style="height: 300px; overflow: hidden; text-align: left;">
                                    <div class="amcharts-main-div" style="position: relative; width: 100%; height: 100%;">
                                        <div class="amChartsLegend amcharts-legend-div" style="overflow: hidden; position: relative; text-align: left; width: 638px; height: 76px; cursor: default;">
                                            <svg version="1.1" style="position: absolute; width: 638px; height: 76px; top: -0.109375px; left: -0.203125px;">
                                                <desc>JavaScript chart by amCharts 3.21.5</desc>
                                                <g transform="translate(81,10)">
                                                    <path cs="100,100" d="M0.5,0.5 L488.5,0.5 L488.5,65.5 L0.5,65.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path>
                                                    <g transform="translate(0,11)">
                                                        <g cursor="pointer" aria-label="old Visitor" transform="translate(0,0)">
                                                            <path
                                                                cs="100,100"
                                                                d="M-15.5,8.5 L16.5,8.5 L16.5,-7.5 L-15.5,-7.5 Z"
                                                                fill="#feb798"
                                                                stroke="#feb798"
                                                                fill-opacity="1"
                                                                stroke-width="1"
                                                                stroke-opacity="0.9"
                                                                transform="translate(16,8)"
                                                            ></path>
                                                            <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(37,7)">
                                                                <tspan y="6" x="0">old Visitor</tspan>
                                                            </text>
                                                            <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(193,7)"></text>
                                                            <rect x="32" y="0" width="161.03076171875" height="18" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect>
                                                        </g>
                                                        <g cursor="pointer" aria-label="New visitor" transform="translate(208,0)">
                                                            <path
                                                                cs="100,100"
                                                                d="M-15.5,8.5 L16.5,8.5 L16.5,-7.5 L-15.5,-7.5 Z"
                                                                fill="#fe9365"
                                                                stroke="#fe9365"
                                                                fill-opacity="1"
                                                                stroke-width="1"
                                                                stroke-opacity="0.9"
                                                                transform="translate(16,8)"
                                                            ></path>
                                                            <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(37,7)">
                                                                <tspan y="6" x="0">New visitor</tspan>
                                                            </text>
                                                            <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(193,7)"></text>
                                                            <rect x="32" y="0" width="161.03076171875" height="18" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect>
                                                        </g>
                                                        <g cursor="pointer" aria-label="Last Month Visitor" transform="translate(0,28)">
                                                            <g>
                                                                <path cs="100,100" d="M0.5,8.5 L32.5,8.5" fill="none" stroke-width="2" stroke-opacity="0.9" stroke="#0df3a3"></path>
                                                                <circle
                                                                    r="2.5"
                                                                    cx="0"
                                                                    cy="0"
                                                                    fill="#FFFFFF"
                                                                    stroke="#0df3a3"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="1"
                                                                    transform="translate(17,8)"
                                                                ></circle>
                                                            </g>
                                                            <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(37,7)">
                                                                <tspan y="6" x="0">Last Month Visitor</tspan>
                                                            </text>
                                                            <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(193,7)"></text>
                                                            <rect x="32" y="0" width="161.03076171875" height="18" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect>
                                                        </g>
                                                        <g cursor="pointer" aria-label="Average Visitor" transform="translate(208,28)">
                                                            <g>
                                                                <path cs="100,100" d="M0.5,8.5 L32.5,8.5" fill="none" stroke-width="2" stroke-dasharray="5" stroke-opacity="0.9" stroke="#fe5d70"></path>
                                                                <circle
                                                                    r="2.5"
                                                                    cx="0"
                                                                    cy="0"
                                                                    fill="#FFFFFF"
                                                                    stroke="#fe5d70"
                                                                    fill-opacity="1"
                                                                    stroke-width="2"
                                                                    stroke-opacity="1"
                                                                    transform="translate(17,8)"
                                                                ></circle>
                                                            </g>
                                                            <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(37,7)">
                                                                <tspan y="6" x="0">Average Visitor</tspan>
                                                            </text>
                                                            <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(193,7)"></text>
                                                            <rect x="32" y="0" width="161.03076171875" height="18" rx="0" ry="0" stroke-width="0" stroke="none" fill="#fff" fill-opacity="0.005"></rect>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 638px; height: 224px; padding: 0px; cursor: default;">
                                            <svg version="1.1" style="position: absolute; width: 638px; height: 224px; top: -0.109375px; left: -0.203125px;">
                                                <desc>JavaScript chart by amCharts 3.21.5</desc>
                                                <g>
                                                    <path
                                                        cs="100,100"
                                                        d="M0.5,0.5 L637.5,0.5 L637.5,223.5 L0.5,223.5 Z"
                                                        fill="#FFFFFF"
                                                        stroke="#000000"
                                                        fill-opacity="0"
                                                        stroke-width="1"
                                                        stroke-opacity="0"
                                                    ></path>
                                                    <path
                                                        cs="100,100"
                                                        d="M0.5,0.5 L488.5,0.5 L488.5,173.5 L0.5,173.5 L0.5,0.5 Z"
                                                        fill="#FFFFFF"
                                                        stroke="#000000"
                                                        fill-opacity="0"
                                                        stroke-width="1"
                                                        stroke-opacity="0"
                                                        transform="translate(81,20)"
                                                    ></path>
                                                </g>
                                                <g>
                                                    <g transform="translate(81,20)">
                                                        <g>
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,173)"></path>
                                                            <path cs="100,100" d="M0.5,173.5 L0.5,173.5 L0.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path
                                                                cs="100,100"
                                                                d="M33.5,173.5 L33.5,173.5 L33.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.07"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path
                                                                cs="100,100"
                                                                d="M65.5,173.5 L65.5,173.5 L65.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.07"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M98.5,0.5 L98.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,173)"></path>
                                                            <path cs="100,100" d="M98.5,173.5 L98.5,173.5 L98.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path
                                                                cs="100,100"
                                                                d="M130.5,173.5 L130.5,173.5 L130.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.07"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path
                                                                cs="100,100"
                                                                d="M163.5,173.5 L163.5,173.5 L163.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.07"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M195.5,0.5 L195.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,173)"></path>
                                                            <path
                                                                cs="100,100"
                                                                d="M195.5,173.5 L195.5,173.5 L195.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.1"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path
                                                                cs="100,100"
                                                                d="M228.5,173.5 L228.5,173.5 L228.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.07"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path
                                                                cs="100,100"
                                                                d="M260.5,173.5 L260.5,173.5 L260.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.07"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M293.5,0.5 L293.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,173)"></path>
                                                            <path
                                                                cs="100,100"
                                                                d="M293.5,173.5 L293.5,173.5 L293.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.1"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path
                                                                cs="100,100"
                                                                d="M325.5,173.5 L325.5,173.5 L325.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.07"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path
                                                                cs="100,100"
                                                                d="M358.5,173.5 L358.5,173.5 L358.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.07"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M390.5,0.5 L390.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,173)"></path>
                                                            <path
                                                                cs="100,100"
                                                                d="M390.5,173.5 L390.5,173.5 L390.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.1"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path
                                                                cs="100,100"
                                                                d="M423.5,173.5 L423.5,173.5 L423.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.07"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path
                                                                cs="100,100"
                                                                d="M455.5,173.5 L455.5,173.5 L455.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.07"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M488.5,0.5 L488.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,173)"></path>
                                                            <path
                                                                cs="100,100"
                                                                d="M488.5,173.5 L488.5,173.5 L488.5,0.5"
                                                                fill="none"
                                                                stroke-width="1"
                                                                stroke-dasharray="1"
                                                                stroke-opacity="0.1"
                                                                stroke="#000000"
                                                            ></path>
                                                        </g>
                                                    </g>
                                                    <g transform="translate(81,20)" visibility="visible">
                                                        <g>
                                                            <path cs="100,100" d="M0.5,173.5 L6.5,173.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,173.5 L0.5,173.5 L488.5,173.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,138.5 L6.5,138.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,138.5 L0.5,138.5 L488.5,138.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,104.5 L6.5,104.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,104.5 L0.5,104.5 L488.5,104.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,69.5 L6.5,69.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,69.5 L0.5,69.5 L488.5,69.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,35.5 L6.5,35.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,35.5 L0.5,35.5 L488.5,35.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,0.5 L6.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,0.5 L488.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path>
                                                        </g>
                                                    </g>
                                                    <g transform="translate(81,20)" visibility="visible">
                                                        <g><path cs="100,100" d="M0.5,173.5 L6.5,173.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(488,0)"></path></g>
                                                        <g><path cs="100,100" d="M0.5,138.5 L6.5,138.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(488,0)"></path></g>
                                                        <g><path cs="100,100" d="M0.5,104.5 L6.5,104.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(488,0)"></path></g>
                                                        <g><path cs="100,100" d="M0.5,69.5 L6.5,69.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(488,0)"></path></g>
                                                        <g><path cs="100,100" d="M0.5,35.5 L6.5,35.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(488,0)"></path></g>
                                                        <g><path cs="100,100" d="M0.5,0.5 L6.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(488,0)"></path></g>
                                                    </g>
                                                </g>
                                                <g transform="translate(81,20)" clip-path="url(#AmChartsEl-17)"><g visibility="hidden"></g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g>
                                                    <g transform="translate(81,20)">
                                                        <g>
                                                            <g transform="translate(8,173)" aria-label="old Visitor Jan 16, 2013 8.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-137.5 L16.5,-137.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(41,173)" aria-label="old Visitor Jan 17, 2013 6.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-103.5 L16.5,-103.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(73,173)" aria-label="old Visitor Jan 18, 2013 2.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-34.5 L16.5,-34.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(106,173)" aria-label="old Visitor Jan 19, 2013 9.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-155.5 L16.5,-155.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(138,173)" aria-label="old Visitor Jan 20, 2013 6.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-103.5 L16.5,-103.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(171,173)" aria-label="old Visitor Jan 21, 2013 5.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-85.5 L16.5,-85.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(203,173)" aria-label="old Visitor Jan 22, 2013 7.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-120.5 L16.5,-120.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(236,173)" aria-label="old Visitor Jan 23, 2013 6.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-103.5 L16.5,-103.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(269,173)" aria-label="old Visitor Jan 24, 2013 5.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-85.5 L16.5,-85.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(301,173)" aria-label="old Visitor Jan 25, 2013 8.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-137.5 L16.5,-137.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(334,173)" aria-label="old Visitor Jan 26, 2013 8.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-137.5 L16.5,-137.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(366,173)" aria-label="old Visitor Jan 27, 2013 4.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-68.5 L16.5,-68.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(399,173)" aria-label="old Visitor Jan 28, 2013 7.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-120.5 L16.5,-120.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(431,173)" aria-label="old Visitor Jan 29, 2013 8.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-137.5 L16.5,-137.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(464,173)" aria-label="old Visitor Jan 30, 2013 7.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-120.5 L16.5,-120.5 L16.5,0.5 L0.5,0.5 Z"
                                                                    fill="#feb798"
                                                                    stroke="#feb798"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g transform="translate(81,20)">
                                                        <g>
                                                            <g transform="translate(11,173)" aria-label="New visitor Jan 16, 2013 5.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-85.5 L10.5,-85.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(44,173)" aria-label="New visitor Jan 17, 2013 4.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-68.5 L10.5,-68.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(76,173)" aria-label="New visitor Jan 18, 2013 5.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-85.5 L10.5,-85.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(109,173)" aria-label="New visitor Jan 19, 2013 8.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-137.5 L10.5,-137.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(141,173)" aria-label="New visitor Jan 20, 2013 9.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-155.5 L10.5,-155.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(174,173)" aria-label="New visitor Jan 21, 2013 3.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-51.5 L10.5,-51.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(206,173)" aria-label="New visitor Jan 22, 2013 5.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-85.5 L10.5,-85.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(239,173)" aria-label="New visitor Jan 23, 2013 7.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-120.5 L10.5,-120.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(272,173)" aria-label="New visitor Jan 24, 2013 9.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-155.5 L10.5,-155.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(304,173)" aria-label="New visitor Jan 25, 2013 5.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-85.5 L10.5,-85.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(337,173)" aria-label="New visitor Jan 26, 2013 4.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-68.5 L10.5,-68.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(369,173)" aria-label="New visitor Jan 27, 2013 3.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-51.5 L10.5,-51.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(402,173)" aria-label="New visitor Jan 28, 2013 5.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-85.5 L10.5,-85.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(434,173)" aria-label="New visitor Jan 29, 2013 5.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-85.5 L10.5,-85.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(467,173)" aria-label="New visitor Jan 30, 2013 4.00">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-68.5 L10.5,-68.5 L10.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fe9365"
                                                                    stroke="#fe9365"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="0.9"
                                                                ></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g transform="translate(81,20)">
                                                        <g></g>
                                                        <g clip-path="url(#AmChartsEl-19)">
                                                            <path
                                                                cs="100,100"
                                                                d="M16,166 C24,165,33,148,49,145 C65,143,65,121,81,118 C97,114,98,71,114,69 C130,68,130,89,146,90 C162,91,163,85,179,83 C195,81,195,49,211,48 C227,48,228,68,244,69 C261,70,261,67,277,69 C293,71,293,104,309,104 C325,103,326,57,342,55 C358,54,358,75,374,76 C390,78,391,83,407,83 C423,83,423,75,439,76 C455,77,464,96,472,97 M0,0 L0,0"
                                                                fill="none"
                                                                fill-opacity="0"
                                                                stroke-width="2"
                                                                stroke-opacity="0.9"
                                                                stroke="#0df3a3"
                                                            ></path>
                                                        </g>
                                                        <clippath id="AmChartsEl-19"><rect x="0" y="0" width="488" height="173" rx="0" ry="0" stroke-width="0"></rect></clippath>
                                                        <g></g>
                                                    </g>
                                                    <g transform="translate(81,20)">
                                                        <g></g>
                                                        <g clip-path="url(#AmChartsEl-20)">
                                                            <path
                                                                cs="100,100"
                                                                d="M16.5,138.9 L49.5,118.14 L81.5,48.94 L114.5,42.02 L146.5,42.02 L179.5,69.7 L211.5,21.26 L244.5,35.1 L277.5,28.18 L309.5,76.62 L342.5,21.26 L374.5,55.86 L407.5,48.94 L439.5,55.86 L472.5,69.7 M0,0 L0,0"
                                                                fill="none"
                                                                stroke-width="2"
                                                                stroke-dasharray="5"
                                                                stroke-opacity="0.9"
                                                                stroke="#fe5d70"
                                                                stroke-linejoin="round"
                                                            ></path>
                                                        </g>
                                                        <clippath id="AmChartsEl-20"><rect x="0" y="0" width="488" height="173" rx="0" ry="0" stroke-width="0"></rect></clippath>
                                                        <g></g>
                                                    </g>
                                                </g>
                                                <g></g>
                                                <g>
                                                    <path
                                                        cs="100,100"
                                                        d="M0.5,173.5 L488.5,173.5 L488.5,173.5"
                                                        fill="none"
                                                        stroke-width="1"
                                                        stroke-opacity="0.2"
                                                        stroke="#000000"
                                                        transform="translate(81,20)"
                                                    ></path>
                                                    <g><path cs="100,100" d="M0.5,0.5 L488.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(81,193)"></path></g>
                                                    <g>
                                                        <path
                                                            cs="100,100"
                                                            d="M0.5,0.5 L0.5,173.5"
                                                            fill="none"
                                                            stroke-width="1"
                                                            stroke-opacity="0.3"
                                                            stroke="#000000"
                                                            transform="translate(81,20)"
                                                            visibility="visible"
                                                        ></path>
                                                    </g>
                                                    <g>
                                                        <path
                                                            cs="100,100"
                                                            d="M0.5,0.5 L0.5,173.5 L0.5,173.5"
                                                            fill="none"
                                                            stroke-width="1"
                                                            stroke-opacity="0.3"
                                                            stroke="#000000"
                                                            transform="translate(569,20)"
                                                            visibility="visible"
                                                        ></path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g transform="translate(81,20)" clip-path="url(#AmChartsEl-18)" style="pointer-events: none;">
                                                        <path cs="100,100" d="M0.5,0.5 L0.5,0.5 L0.5,173.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" visibility="hidden"></path>
                                                        <path cs="100,100" d="M0.5,0.5 L488.5,0.5 L488.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.2" stroke="#000000" visibility="hidden"></path>
                                                    </g>
                                                    <clippath id="AmChartsEl-18"><rect x="0" y="0" width="488" height="173" rx="0" ry="0" stroke-width="0"></rect></clippath>
                                                </g>
                                                <g></g>
                                                <g>
                                                    <g transform="translate(81,20)"></g>
                                                    <g transform="translate(81,20)"></g>
                                                    <g transform="translate(81,20)">
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(16,166)"
                                                            aria-label="Last Month Visitor Jan 16, 2013 71.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(49,145)"
                                                            aria-label="Last Month Visitor Jan 17, 2013 74.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(81,118)"
                                                            aria-label="Last Month Visitor Jan 18, 2013 78.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(114,69)"
                                                            aria-label="Last Month Visitor Jan 19, 2013 85.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(146,90)"
                                                            aria-label="Last Month Visitor Jan 20, 2013 82.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(179,83)"
                                                            aria-label="Last Month Visitor Jan 21, 2013 83.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(211,48)"
                                                            aria-label="Last Month Visitor Jan 22, 2013 88.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(244,69)"
                                                            aria-label="Last Month Visitor Jan 23, 2013 85.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(277,69)"
                                                            aria-label="Last Month Visitor Jan 24, 2013 85.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(309,104)"
                                                            aria-label="Last Month Visitor Jan 25, 2013 80.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(342,55)"
                                                            aria-label="Last Month Visitor Jan 26, 2013 87.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(374,76)"
                                                            aria-label="Last Month Visitor Jan 27, 2013 84.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(407,83)"
                                                            aria-label="Last Month Visitor Jan 28, 2013 83.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(439,76)"
                                                            aria-label="Last Month Visitor Jan 29, 2013 84.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#0df3a3"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(472,97)"
                                                            aria-label="Last Month Visitor Jan 30, 2013 81.00"
                                                        ></circle>
                                                    </g>
                                                    <g transform="translate(81,20)">
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(16,138)"
                                                            aria-label="Average Visitor Jan 16, 2013 75.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(49,118)"
                                                            aria-label="Average Visitor Jan 17, 2013 78.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(81,48)"
                                                            aria-label="Average Visitor Jan 18, 2013 88.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(114,42)"
                                                            aria-label="Average Visitor Jan 19, 2013 89.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(146,42)"
                                                            aria-label="Average Visitor Jan 20, 2013 89.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(179,69)"
                                                            aria-label="Average Visitor Jan 21, 2013 85.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(211,21)"
                                                            aria-label="Average Visitor Jan 22, 2013 92.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(244,35)"
                                                            aria-label="Average Visitor Jan 23, 2013 90.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(277,28)"
                                                            aria-label="Average Visitor Jan 24, 2013 91.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(309,76)"
                                                            aria-label="Average Visitor Jan 25, 2013 84.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(342,21)"
                                                            aria-label="Average Visitor Jan 26, 2013 92.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(374,55)"
                                                            aria-label="Average Visitor Jan 27, 2013 87.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(407,48)"
                                                            aria-label="Average Visitor Jan 28, 2013 88.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(439,55)"
                                                            aria-label="Average Visitor Jan 29, 2013 87.00"
                                                        ></circle>
                                                        <circle
                                                            r="2.5"
                                                            cx="0"
                                                            cy="0"
                                                            fill="#FFFFFF"
                                                            stroke="#fe5d70"
                                                            fill-opacity="1"
                                                            stroke-width="2"
                                                            stroke-opacity="1"
                                                            transform="translate(472,69)"
                                                            aria-label="Average Visitor Jan 30, 2013 85.00"
                                                        ></circle>
                                                    </g>
                                                </g>
                                                <g><g></g></g>
                                                <g>
                                                    <g transform="translate(81,20)" visibility="visible">
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(3,185.5)">
                                                            <tspan y="6" x="0">Jan 16</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(101,185.5)">
                                                            <tspan y="6" x="0">Jan 19</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(198,185.5)">
                                                            <tspan y="6" x="0">Jan 22</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(296,185.5)">
                                                            <tspan y="6" x="0">Jan 25</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(393,185.5)">
                                                            <tspan y="6" x="0">Jan 28</tspan>
                                                        </text>
                                                    </g>
                                                    <g transform="translate(81,20)" visibility="visible">
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,172)">
                                                            <tspan y="6" x="0">$0M</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,137)">
                                                            <tspan y="6" x="0">$2M</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,103)">
                                                            <tspan y="6" x="0">$4M</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,68)">
                                                            <tspan y="6" x="0">$6M</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,34)">
                                                            <tspan y="6" x="0">$8M</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-1)">
                                                            <tspan y="6" x="0">$10M</tspan>
                                                        </text>
                                                        <text
                                                            y="6"
                                                            fill="#000000"
                                                            font-family="Verdana"
                                                            font-size="12px"
                                                            opacity="1"
                                                            font-weight="bold"
                                                            text-anchor="middle"
                                                            transform="translate(-60,87) rotate(-90)"
                                                        >
                                                            <tspan y="6" x="0">Visitors</tspan>
                                                        </text>
                                                    </g>
                                                    <g transform="translate(81,20)" visibility="visible">
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(498,172)">
                                                            <tspan y="6" x="0">70</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(498,137)">
                                                            <tspan y="6" x="0">75</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(498,103)">
                                                            <tspan y="6" x="0">80</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(498,68)">
                                                            <tspan y="6" x="0">85</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(498,34)">
                                                            <tspan y="6" x="0">90</tspan>
                                                        </text>
                                                        <text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(498,-1)">
                                                            <tspan y="6" x="0">95</tspan>
                                                        </text>
                                                        <text
                                                            y="6"
                                                            fill="#000000"
                                                            font-family="Verdana"
                                                            font-size="12px"
                                                            opacity="1"
                                                            font-weight="bold"
                                                            text-anchor="middle"
                                                            transform="translate(530,87) rotate(-90)"
                                                        >
                                                            <tspan y="6" x="0">New Visitors</tspan>
                                                        </text>
                                                    </g>
                                                </g>
                                                <g></g>
                                                <g transform="translate(81,20)"></g>
                                                <g></g>
                                                <g></g>
                                                <clippath id="AmChartsEl-17"><rect x="-1" y="-1" width="490" height="175" rx="0" ry="0" stroke-width="0"></rect></clippath>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card">
                            <div class="card-block bg-c-green">
                                <div id="proj-earning" style="height: 230px; overflow: hidden; text-align: left;">
                                    <div class="amcharts-main-div" style="position: relative;">
                                        <div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 284px; height: 230px; padding: 0px;">
                                            <svg version="1.1" style="position: absolute; width: 284px; height: 230px; top: 0.390625px; left: 0.0625px;">
                                                <desc>JavaScript chart by amCharts 3.21.5</desc>
                                                <g>
                                                    <path
                                                        cs="100,100"
                                                        d="M0.5,0.5 L283.5,0.5 L283.5,229.5 L0.5,229.5 Z"
                                                        fill="#FFFFFF"
                                                        stroke="#000000"
                                                        fill-opacity="0"
                                                        stroke-width="1"
                                                        stroke-opacity="0"
                                                    ></path>
                                                    <path
                                                        cs="100,100"
                                                        d="M0.5,0.5 L222.5,0.5 L222.5,178.5 L0.5,178.5 L0.5,0.5 Z"
                                                        fill="#FFFFFF"
                                                        stroke="#000000"
                                                        fill-opacity="0"
                                                        stroke-width="1"
                                                        stroke-opacity="0"
                                                        transform="translate(41,20)"
                                                    ></path>
                                                </g>
                                                <g transform="translate(41,20)" clip-path="url(#AmChartsEl-13)"><g visibility="hidden"></g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g>
                                                    <g transform="translate(41,20)">
                                                        <g>
                                                            <g transform="translate(11,178)" aria-label=" UI 10">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-58.5 L22.5,-58.5 L22.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fff"
                                                                    stroke="#fff"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="1"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(56,178)" aria-label=" UX 15">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-132.5 L22.5,-132.5 L22.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fff"
                                                                    stroke="#fff"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="1"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(100,178)" aria-label=" Web 12">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-88.5 L22.5,-88.5 L22.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fff"
                                                                    stroke="#fff"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="1"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(144,178)" aria-label=" App 16">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-147.5 L22.5,-147.5 L22.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fff"
                                                                    stroke="#fff"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="1"
                                                                ></path>
                                                            </g>
                                                            <g transform="translate(189,178)" aria-label=" SEO 8">
                                                                <path
                                                                    cs="100,100"
                                                                    d="M0.5,0.5 L0.5,-29.5 L22.5,-29.5 L22.5,0.5 L0.5,0.5 Z"
                                                                    fill="#fff"
                                                                    stroke="#fff"
                                                                    fill-opacity="1"
                                                                    stroke-width="1"
                                                                    stroke-opacity="1"
                                                                ></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g></g>
                                                <g>
                                                    <g><path cs="100,100" d="M0.5,0.5 L222.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(41,198)"></path></g>
                                                    <g>
                                                        <path
                                                            cs="100,100"
                                                            d="M0.5,0.5 L0.5,178.5"
                                                            fill="none"
                                                            stroke-width="1"
                                                            stroke-opacity="0.3"
                                                            stroke="transparent"
                                                            transform="translate(41,20)"
                                                            visibility="visible"
                                                        ></path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g transform="translate(41,20)" clip-path="url(#AmChartsEl-14)" style="pointer-events: none;">
                                                        <path cs="100,100" d="M0.5,0.5 L0.5,0.5 L0.5,178.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" visibility="hidden"></path>
                                                        <path cs="100,100" d="M0.5,0.5 L222.5,0.5 L222.5,0.5" fill="none" stroke-width="1" stroke="#000000" visibility="hidden"></path>
                                                    </g>
                                                    <clippath id="AmChartsEl-14"><rect x="0" y="0" width="222" height="178" rx="0" ry="0" stroke-width="0"></rect></clippath>
                                                </g>
                                                <g></g>
                                                <g><g></g></g>
                                                <g>
                                                    <g transform="translate(41,20)" visibility="visible">
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="12px" opacity="1" text-anchor="middle" transform="translate(22.2,191)">
                                                            <tspan y="6" x="0">UI</tspan>
                                                        </text>
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="12px" opacity="1" text-anchor="middle" transform="translate(67.2,191)">
                                                            <tspan y="6" x="0">UX</tspan>
                                                        </text>
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="12px" opacity="1" text-anchor="middle" transform="translate(111.2,191)">
                                                            <tspan y="6" x="0">Web</tspan>
                                                        </text>
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="12px" opacity="1" text-anchor="middle" transform="translate(155.2,191)">
                                                            <tspan y="6" x="0">App</tspan>
                                                        </text>
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="12px" opacity="1" text-anchor="middle" transform="translate(200.2,191)">
                                                            <tspan y="6" x="0">SEO</tspan>
                                                        </text>
                                                    </g>
                                                    <g transform="translate(41,20)" visibility="visible">
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,177)">
                                                            <tspan y="6" x="0">6</tspan>
                                                        </text>
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,147)">
                                                            <tspan y="6" x="0">8</tspan>
                                                        </text>
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,118)">
                                                            <tspan y="6" x="0">10</tspan>
                                                        </text>
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,88)">
                                                            <tspan y="6" x="0">12</tspan>
                                                        </text>
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,58)">
                                                            <tspan y="6" x="0">14</tspan>
                                                        </text>
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,29)">
                                                            <tspan y="6" x="0">16</tspan>
                                                        </text>
                                                        <text y="6" fill="#fff" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-1)">
                                                            <tspan y="6" x="0">18</tspan>
                                                        </text>
                                                    </g>
                                                </g>
                                                <g transform="translate(41,20)"></g>
                                                <g></g>
                                                <g></g>
                                                <g>
                                                    <g transform="translate(41,20)"></g>
                                                    <g transform="translate(41,20)" visibility="visible">
                                                        <g>
                                                            <path cs="100,100" d="M0.5,178.5 L6.5,178.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="transparent" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,178.5 L0.5,178.5 L222.5,178.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#fff"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,148.5 L6.5,148.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="transparent" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,148.5 L0.5,148.5 L222.5,148.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#fff"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,119.5 L6.5,119.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="transparent" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,119.5 L0.5,119.5 L222.5,119.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#fff"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,89.5 L6.5,89.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="transparent" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,89.5 L0.5,89.5 L222.5,89.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#fff"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,59.5 L6.5,59.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="transparent" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,59.5 L0.5,59.5 L222.5,59.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#fff"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,30.5 L6.5,30.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="transparent" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,30.5 L0.5,30.5 L222.5,30.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#fff"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,0.5 L6.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="transparent" transform="translate(-6,0)"></path>
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,0.5 L222.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#fff"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g><g transform="translate(41,20)"></g></g>
                                                <g></g>
                                                <clippath id="AmChartsEl-13"><rect x="-1" y="-1" width="224" height="180" rx="0" ry="0" stroke-width="0"></rect></clippath>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <h6 class="text-muted m-b-30 m-t-15">Total completed project and earning</h6>
                                <div class="row text-center">
                                    <div class="col-6 b-r-default">
                                        <h6 class="text-muted m-b-10">Completed Projects</h6>
                                        <h4 class="m-b-0 f-w-600">175</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="text-muted m-b-10">Total Earnings</h6>
                                        <h4 class="m-b-0 f-w-600">76.6M</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Global Sales by Top Locations</h5>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Country</th>
                                                <th>Sales</th>
                                                <th class="text-right">Average</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="./images/admin/logo/GERMANY.jpg" alt="" class="img-fluid img-30" /></td>
                                                <td>Germany</td>
                                                <td>3,562</td>
                                                <td class="text-right">56.23%</td>
                                            </tr>
                                            <tr>
                                                <td><img src="./images/admin/logo/USA.jpg" alt="" class="img-fluid img-30" /></td>
                                                <td>USA</td>
                                                <td>2,650</td>
                                                <td class="text-right">25.23%</td>
                                            </tr>
                                            <tr>
                                                <td><img src="./images/admin/logo/AUSTRALIA.jpg" alt="" class="img-fluid img-30" /></td>
                                                <td>Australia</td>
                                                <td>956</td>
                                                <td class="text-right">12.45%</td>
                                            </tr>
                                            <tr>
                                                <td><img src="./images/admin/logo/UK.jpg" alt="" class="img-fluid img-30" /></td>
                                                <td>United Kingdom</td>
                                                <td>689</td>
                                                <td class="text-right">8.65%</td>
                                            </tr>
                                            <tr>
                                                <td><img src="./images/admin/logo/BRAZIL.jpg" alt="" class="img-fluid img-30" /></td>
                                                <td>Brazil</td>
                                                <td>560</td>
                                                <td class="text-right">3.56%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right m-r-20">
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#!" class="b-b-primary text-primary">View all Sales Locations </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>New Users</h5>
                            </div>
                            <div class="card-block">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand"><div class=""></div></div>
                                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div>
                                </div>
                                <canvas id="newuserchart" height="250" style="display: block; width: 284px; height: 250px;" width="284" class="chartjs-render-monitor"></canvas>
                            </div>
                            <div class="card-footer">
                                <div class="row text-center b-t-default">
                                    <div class="col-4 b-r-default m-t-15">
                                        <h5>85%</h5>
                                        <p class="text-muted m-b-0">Satisfied</p>
                                    </div>
                                    <div class="col-4 b-r-default m-t-15">
                                        <h5>6%</h5>
                                        <p class="text-muted m-b-0">Unsatisfied</p>
                                    </div>
                                    <div class="col-4 m-t-15">
                                        <h5>9%</h5>
                                        <p class="text-muted m-b-0">NA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-block text-center">
                                <i class="feather icon-mail text-c-lite-green d-block f-40"></i>
                                <h4 class="m-t-15"><span class="text-c-lite-green">8.62k</span> Subscribers</h4>
                                <p class="m-b-10">Your main list is growing</p>
                                <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block text-center">
                                <i class="feather icon-twitter text-c-green d-block f-40"></i>
                                <h4 class="m-t-15"><span class="text-c-blgreenue">+40</span> Followers</h4>
                                <p class="m-b-10">Your main list is growing</p>
                                <button class="btn btn-success btn-sm btn-round">Check them out</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="card o-hidden">
                            <div class="card-block bg-c-pink text-white">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand"><div class=""></div></div>
                                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div>
                                </div>
                                <h6>
                                    Sales Per Day <span class="f-right"><i class="feather icon-activity m-r-15"></i>3%</span>
                                </h6>
                                <canvas id="sale-chart1" height="142" width="284" style="display: block; width: 284px; height: 142px;" class="chartjs-render-monitor"></canvas>
                            </div>
                            <div class="card-footer text-center">
                                <div class="row">
                                    <div class="col-6 b-r-default">
                                        <h4>$4230</h4>
                                        <p class="text-muted m-b-0">Total Revenue</p>
                                    </div>
                                    <div class="col-6">
                                        <h4>321</h4>
                                        <p class="text-muted m-b-0">Today Sales</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card o-hidden">
                            <div class="card-block bg-c-green text-white">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand"><div class=""></div></div>
                                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div>
                                </div>
                                <h6>
                                    Visits<span class="f-right"><i class="feather icon-activity m-r-15"></i>9%</span>
                                </h6>
                                <canvas id="sale-chart2" height="142" width="284" style="display: block; width: 284px; height: 142px;" class="chartjs-render-monitor"></canvas>
                            </div>
                            <div class="card-footer text-center">
                                <div class="row">
                                    <div class="col-6 b-r-default">
                                        <h4>3562</h4>
                                        <p class="text-muted m-b-0">Monthly Visits</p>
                                    </div>
                                    <div class="col-6">
                                        <h4>96</h4>
                                        <p class="text-muted m-b-0">Today Visits</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card o-hidden">
                            <div class="card-block bg-c-blue text-white">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand"><div class=""></div></div>
                                    <div class="chartjs-size-monitor-shrink"><div class=""></div></div>
                                </div>
                                <h6>
                                    Orders<span class="f-right"><i class="feather icon-activity m-r-15"></i>12%</span>
                                </h6>
                                <canvas id="sale-chart3" height="142" width="284" style="display: block; width: 284px; height: 142px;" class="chartjs-render-monitor"></canvas>
                            </div>
                            <div class="card-footer text-center">
                                <div class="row">
                                    <div class="col-6 b-r-default">
                                        <h4>1695</h4>
                                        <p class="text-muted m-b-0">Monthly Orders</p>
                                    </div>
                                    <div class="col-6">
                                        <h4>52</h4>
                                        <p class="text-muted m-b-0">Today Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-12">
                        <div class="card quater-card">
                            <div class="card-block">
                                <h6 class="text-muted m-b-20">This Quarter</h6>
                                <h4>$3,9452.50</h4>
                                <p class="text-muted">$3,9452.50</p>
                                <h5 class="m-t-30">87</h5>
                                <p class="text-muted">Online Revenue<span class="f-right">80%</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-simple-c-pink" style="width: 80%;"></div>
                                </div>
                                <h5 class="m-t-30">68</h5>
                                <p class="text-muted">Offline Revenue<span class="f-right">50%</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-simple-c-yellow" style="width: 50%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-12">
                        <div class="card social-network">
                            <div class="card-header">
                                <h5>Social Network</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="./images/admin/logo/icon-1.png" alt=" " class="img-responsive p-b-20" />
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="text-muted m-b-5">Views :</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="m-b-5 f-w-400">545,721</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="text-muted m-b-5">Comments :</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="m-b-5 f-w-400">2,256</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="text-muted m-b-5">Likes :</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="m-b-5 f-w-400">4,129</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="text-muted m-b-5">Subscribe :</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="m-b-5 f-w-400">3,451,945</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="./images/admin/logo/icon-2.png" alt=" " class="img-responsive p-b-20" />
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="text-muted m-b-5">Engagement :</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="m-b-5 f-w-400">1,543</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="text-muted m-b-5">Shares :</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="m-b-5 f-w-400">846</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="text-muted m-b-5">Likes :</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="m-b-5 f-w-400">569</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="text-muted m-b-5">Comments :</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="m-b-5 f-w-400">156</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 m-t-0">
                                        <img src="./images/admin/logo/icon-3.png" alt=" " class="img-responsive p-b-10 p-t-10" />
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="text-muted m-b-5">Tweets :</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="m-b-5 f-w-400">103,576</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 m-t-0">
                                        <img src="./images/admin/logo/icon-4.png" alt=" " class="img-responsive p-b-10 p-t-10" />
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="text-muted m-b-5">Tweets :</p>
                                            </div>
                                            <div class="col-7">
                                                <p class="m-b-5 f-w-400">103,576</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="styleSelector">
            <div class="selector-toggle"><a href="javascript:void(0)"></a></div>
            <ul>
                <li>
                    <p class="selector-title main-title st-main-title"><b>Adminty </b>Customizer</p>
                    <span class="text-muted">Live customizer with tons of options</span>
                </li>
                <li><p class="selector-title">Main layouts</p></li>
                <li>
                    <div class="theme-color">
                        <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="navbar-theme" navbar-theme="themelight1">
                            <span class="head"></span><span class="cont"></span>
                        </a>
                        <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="navbar-theme" navbar-theme="theme1"><span class="head"></span><span class="cont"></span></a>
                    </div>
                </li>
            </ul>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(100vh - 440px);">
                <div class="style-cont m-t-10" style="overflow: hidden; width: auto; height: calc(100vh - 440px);">
                    <ul class="nav nav-tabs tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#sel-layout" role="tab">Layouts</a></li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#sel-sidebar-setting" role="tab">Sidebar Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content tabs">
                        <div class="tab-pane active" id="sel-layout" role="tabpanel">
                            <ul>
                                <li class="theme-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="false" id="sidebar-position" name="sidebar-position" checked="" />
                                            <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Sidebar Position</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="theme-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="false" id="header-position" name="header-position" checked="" />
                                            <span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Header Position</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="sel-sidebar-setting" role="tabpanel">
                            <ul>
                                <li class="theme-option">
                                    <p class="sub-title drp-title">Menu Type</p>
                                    <div class="form-radio" id="menu-effect">
                                        <div class="radio radio-inverse radio-inline" data-toggle="tooltip" title="" data-original-title="simple icon">
                                            <label>
                                                <input type="radio" name="radio" value="st6" onclick="handlemenutype(this.value)" checked="true" /><i class="helper"></i>
                                                <span class="micon st6"><i class="feather icon-command"></i></span>
                                            </label>
                                        </div>
                                        <div class="radio radio-primary radio-inline" data-toggle="tooltip" title="" data-original-title="color icon">
                                            <label>
                                                <input type="radio" name="radio" value="st5" onclick="handlemenutype(this.value)" /><i class="helper"></i>
                                                <span class="micon st5"><i class="feather icon-command"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="theme-option">
                                    <p class="sub-title drp-title">SideBar Effect</p>
                                    <select id="vertical-menu-effect" class="form-control minimal">
                                        <option name="vertical-menu-effect" value="shrink">shrink</option>
                                        <option name="vertical-menu-effect" value="overlay">overlay</option>
                                        <option name="vertical-menu-effect" value="push">Push</option>
                                    </select>
                                </li>
                                <li class="theme-option">
                                    <p class="sub-title drp-title">Hide/Show Border</p>
                                    <select id="vertical-border-style" class="form-control minimal">
                                        <option name="vertical-border-style" value="solid">Style 1</option>
                                        <option name="vertical-border-style" value="dotted">Style 2</option>
                                        <option name="vertical-border-style" value="dashed">Style 3</option>
                                        <option name="vertical-border-style" value="none">No Border</option>
                                    </select>
                                </li>
                                <li class="theme-option">
                                    <p class="sub-title drp-title">Drop-Down Icon</p>
                                    <select id="vertical-dropdown-icon" class="form-control minimal">
                                        <option name="vertical-dropdown-icon" value="style1">Style 1</option>
                                        <option name="vertical-dropdown-icon" value="style2">style 2</option>
                                        <option name="vertical-dropdown-icon" value="style3">style 3</option>
                                    </select>
                                </li>
                                <li class="theme-option">
                                    <p class="sub-title drp-title">Sub Menu Drop-down Icon</p>
                                    <select id="vertical-subitem-icon" class="form-control minimal">
                                        <option name="vertical-subitem-icon" value="style1">Style 1</option>
                                        <option name="vertical-subitem-icon" value="style2">style 2</option>
                                        <option name="vertical-subitem-icon" value="style3">style 3</option>
                                        <option name="vertical-subitem-icon" value="style4">style 4</option>
                                        <option name="vertical-subitem-icon" value="style5">style 5</option>
                                        <option name="vertical-subitem-icon" value="style6">style 6</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <ul>
                            <li><p class="selector-title">Header Brand color</p></li>
                            <li class="theme-option">
                                <div class="theme-color">
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="logo-theme" logo-theme="theme1">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="logo-theme" logo-theme="theme2">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="logo-theme" logo-theme="theme3">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="logo-theme" logo-theme="theme4">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="logo-theme" logo-theme="theme5">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                </div>
                            </li>
                            <li><p class="selector-title">Header color</p></li>
                            <li class="theme-option">
                                <div class="theme-color">
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="header-theme" header-theme="theme1">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="header-theme" header-theme="theme2">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="header-theme" header-theme="theme3">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="header-theme" header-theme="theme4">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="header-theme" header-theme="theme5">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="header-theme" header-theme="theme6">
                                        <span class="head"></span><span class="cont"></span>
                                    </a>
                                </div>
                            </li>
                            <li><p class="selector-title">Active link color</p></li>
                            <li class="theme-option">
                                <div class="theme-color">
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme1">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme2">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme3">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme4">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme5">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme6">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme7">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme8">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme9">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme10">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme11">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="active-item-theme small" active-item-theme="theme12">&nbsp;</a>
                                </div>
                            </li>
                            <li><p class="selector-title">Menu Caption Color</p></li>
                            <li class="theme-option">
                                <div class="theme-color">
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="leftheader-theme small" lheader-theme="theme1">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="leftheader-theme small" lheader-theme="theme2">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="leftheader-theme small" lheader-theme="theme3">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="leftheader-theme small" lheader-theme="theme4">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="leftheader-theme small" lheader-theme="theme5">&nbsp;</a>
                                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#" class="leftheader-theme small" lheader-theme="theme6">&nbsp;</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="slimScrollBar"
                    style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 394.034px;"
                ></div>
                <div
                    class="slimScrollRail"
                    style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"
                ></div>
            </div>
            <ul>
                <li><a href="http://html.codedthemes.com/Adminty/doc" target="_blank" class="btn btn-primary btn-block m-r-15 m-t-5 m-b-10">Online Documentation</a></li>
                <li class="text-center">
                    <span class="text-center f-18 m-t-15 m-b-15 d-block">Thank you for sharing !</span>
                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#!" target="_blank" class="btn btn-facebook soc-icon m-b-20"><i class="feather icon-facebook"></i></a>
                    <a href="https://demo.dashboardpack.com/adminty-html/default/dashboard-analytics.html#!" target="_blank" class="btn btn-twitter soc-icon m-l-20 m-b-20"><i class="feather icon-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
