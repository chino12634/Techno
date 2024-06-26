@extends('admin.layouts.default')

@section('title', 'dashboard')

@section('content')

<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-1">
                    <div class="card-body">
                        <h2 class="mb-1">{{$totalUser}}</h2>
                        <p>Total User</p>
                        <span class="mdi mdi-account-arrow-left"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-2">
                    <div class="card-body">
                        <h2 class="mb-1">{{$totalProduct}}</h2>
                        <p>Total Product</p>
                        <span class="mdi mdi-package-variant"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-3">
                    <div class="card-body">
                        <h2 class="mb-1">{{$totalOrderDetail}}</h2>
                        <p>Total Order</p>
                        <span class="mdi mdi-package-variant"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{$totalMoney}}</h2>
                        <p>Total Revenue</p>
                        <span class="mdi mdi-currency-usd"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8 col-md-12 p-b-15">
                <!-- Sales Graph -->
                <div id="user-acquisition" class="card card-default">
                    <div class="card-header">
                        <h2>Sales Report</h2>
                    </div>
                    <div class="card-body">
                        <div class="tab-content pt-4" id="salesReport">
                            <div class="tab-pane fade show active" id="source-medium" role="tabpanel">
                                <div class="mb-6" style="max-height:247px">
                                    <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                            </div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                            <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="linechart" style="display: block; height: 247px; width: 704px;" width="563" height="197" class="chartjs-render-monitor"></canvas>
                                    <div id="acqLegend" class="customLegend mb-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-12 p-b-15">
                <!-- Doughnut Chart -->
                <div class="card card-default">
                    <div class="card-header justify-content-center">
                        <h2>Orders Overview</h2>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                </div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="polar" style="display: block; height: 270px; width: 315px;" width="252" height="216" class="chartjs-render-monitor"></canvas>
                    </div>
                    <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i>
                        Download overall report</a>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8 col-md-12 p-b-15">
                <!-- User activity statistics -->
                <div class="card card-default" id="user-activity">
                    <div class="no-gutters">
                        <div>
                            <div class="card-header justify-content-between">
                                <h2>User Activity</h2>
                                <div class="date-range-report ">
                                    <span>Mar 4, 2023 - Mar 4, 2023</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="userActivityContent">
                                    <div class="tab-pane fade show active" id="user" role="tabpanel">
                                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                                </div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                                                </div>
                                            </div>
                                        </div>
                                        <canvas id="activity" class="chartjs chartjs-render-monitor" style="display: block; height: 280px; width: 704px;" width="563" height="224"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex flex-wrap bg-white border-top">
                                <a href="#" class="text-uppercase py-3">In-Detail Overview</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 p-b-15">
                <div class="card card-default">
                    <div class="card-header flex-column align-items-start">
                        <h2>Current Users</h2>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                </div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="currentUser" class="chartjs chartjs-render-monitor" style="display: block; height: 283px; width: 315px;" width="252" height="226"></canvas>
                    </div>
                    <div class="card-footer d-flex flex-wrap bg-white border-top">
                        <a href="#" class="text-uppercase py-3">In-Detail Overview</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 p-b-15">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none card-default recent-orders" id="recent-orders">
                    <div class="card-header justify-content-between">
                        <h2>Recent Orders</h2>
                        <div class="date-range-report">
                            <span>Feb 4, 2023 - Mar 5, 2023</span>
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Photo</th>
                                    <th>Product Name</th>
                                    <th class="d-none d-lg-table-cell">Units</th>
                                    <th class="d-none d-lg-table-cell">Order Date</th>
                                    <th class="d-none d-lg-table-cell">Order Cost</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($listTop5OrderItems as $orderItem)
                                <tr>
                                    <td>{{ $orderItem->order_detail_id }}</td>
                                    <td>
                                        <a class="text-dark" href="#"><img class="vendor-thumb"
                                        src="data:image/png;base64,{{ $orderItem->ProductInventory->Product->image }}" 
                                        alt="user profile" style="    width: 45px;
                                            height: 45px;"></a>
                                    </td>
                                    <td>
                                        <a class="text-dark" href="#">{{ $orderItem->ProductInventory->Product->name.'(Size:'.$orderItem->ProductInventory->size.'_'.$orderItem->ProductInventory->color.')' }}</a>
                                    </td>
                                    <td class="d-none d-lg-table-cell">{{ $orderItem->quantity }}</td>
                                    <td class="d-none d-lg-table-cell">{{ $orderItem->created_at }}</td>
                                    <td class="d-none d-lg-table-cell">₱{{ $orderItem->quantity * $orderItem->price * (1 - $orderItem->discount_percent / 100.0) }}</td>
                                    </td>
                                    <td>
                                        @if($orderItem->OrderDetail->status == 0)
                                            <span class="badge badge-danger">Canceled</span>
                                        @elseif($orderItem->OrderDetail->status == 1)
                                            <span class="badge badge-warning" >Shipping</span>
                                        @else
                                        <span class="badge badge-success">Completed</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li class="dropdown-item">
                                                    <a href="#">View</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->

<div class="daterangepicker ltr show-ranges opensleft">
    <div class="ranges">
        <ul>
            <li data-range-key="Today">Today</li>
            <li data-range-key="Yesterday">Yesterday</li>
            <li data-range-key="Last 7 Days">Last 7 Days</li>
            <li data-range-key="Last 30 Days">Last 30 Days</li>
            <li data-range-key="This Month">This Month</li>
            <li data-range-key="Last Month">Last Month</li>
            <li data-range-key="Custom Range">Custom Range</li>
        </ul>
    </div>
    <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
    </div>
    <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
    </div>
    <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
</div>
<div class="daterangepicker ltr show-ranges opensleft">
    <div class="ranges">
        <ul>
            <li data-range-key="Today">Today</li>
            <li data-range-key="Yesterday">Yesterday</li>
            <li data-range-key="Last 7 Days">Last 7 Days</li>
            <li data-range-key="Last 30 Days">Last 30 Days</li>
            <li data-range-key="This Month">This Month</li>
            <li data-range-key="Last Month">Last Month</li>
            <li data-range-key="Custom Range">Custom Range</li>
        </ul>
    </div>
    <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
    </div>
    <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
    </div>
    <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
</div>

@endsection

@section('footer_optional')
<script>
    var listSumByMonth = <?php echo $listSumByMonth ?>;
    console.log(listSumByMonth);
    var ctx = document.getElementById("linechart");
    if (ctx !== null) {
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: "line",

            // The data for our dataset
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec"
                ],
                datasets: [{
                    label: "",
                    backgroundColor: "transparent",
                    borderColor: "rgb(82, 136, 255)",
                    data: listSumByMonth,
                    lineTension: 0.3,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255,255,255,1)",
                    pointHoverBackgroundColor: "rgba(255,255,255,1)",
                    pointBorderWidth: 2,
                    pointHoverRadius: 8,
                    pointHoverBorderWidth: 1
                }]
            },

            // Configuration options go here
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        right: 10
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: true,
                            color: "#eee",
                            zeroLineColor: "#eee",
                        },
                        ticks: {
                            callback: function(value) {
                                var ranges = [{
                                        divider: 1e6,
                                        suffix: "M"
                                    },
                                    {
                                        divider: 1e4,
                                        suffix: "k"
                                    }
                                ];

                                function formatNumber(n) {
                                    for (var i = 0; i < ranges.length; i++) {
                                        if (n >= ranges[i].divider) {
                                            return (
                                                (n / ranges[i].divider).toString() + ranges[i].suffix
                                            );
                                        }
                                    }
                                    return n;
                                }
                                return formatNumber(value);
                            }
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        title: function(tooltipItem, data) {
                            return data["labels"][tooltipItem[0]["index"]];
                        },
                        label: function(tooltipItem, data) {
                            return "$" + data["datasets"][0]["data"][tooltipItem["index"]];
                        }
                    },
                    responsive: true,
                    intersect: false,
                    enabled: true,
                    titleFontColor: "#888",
                    bodyFontColor: "#555",
                    titleFontSize: 12,
                    bodyFontSize: 18,
                    backgroundColor: "rgba(256,256,256,0.95)",
                    xPadding: 20,
                    yPadding: 10,
                    displayColors: false,
                    borderColor: "rgba(220, 220, 220, 0.9)",
                    borderWidth: 2,
                    caretSize: 10,
                    caretPadding: 15
                }
            }
        });
    }
    var listCountOrderByStatus = <?php echo $listCountOrderByStatus ?>;
    var totalOrderDetail = <?php echo $totalOrderDetail ?>;
    console.log(totalOrderDetail)
    var polar = document.getElementById("polar");
            if (polar !== null) {
                var configPolar = {
                    data: {
                        datasets: [
                            {
                                data: listCountOrderByStatus,
                                backgroundColor: [
                                    "rgba(41,204,151,0.5)",
                                    "rgba(254,88,101,0.5)",
                                    "rgba(128,97,239,0.5)"
                                ],
                                label: "" // for legend
                            }
                        ],
                        labels: ["Rejected", "Shipping", "Completed"]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            position: "right",
                            display: false
                        },
                        layout: {
                            padding: {
                                top: 10,
                                bottom: 10,
                                right: 10,
                                left: 10
                            }
                        },
                        title: {
                            display: false,
                            text: "Chart.js Polar Area Chart"
                        },
                        scale: {
                            ticks: {
                                beginAtZero: true,
                                fontColor: "#1b223c",
                                fontSize: 10,
                                stepSize: 1,
                                max: totalOrderDetail + 1
                            },
                            reverse: false
                        },
                        animation: {
                            animateRotate: false,
                            animateScale: true
                        },
                        tooltips: {
                            titleFontColor: "#888",
                            bodyFontColor: "#555",
                            titleFontSize: 12,
                            bodyFontSize: 14,
                            backgroundColor: "rgba(256,256,256,0.95)",
                            displayColors: true,
                            borderColor: "rgba(220, 220, 220, 0.9)",
                            borderWidth: 2
                        }
                    }
                };
                window.myPolarArea = Chart.PolarArea(polar, configPolar);
            }
</script>
@endsection