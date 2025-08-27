<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <title>@if(isset($title)){{$title}}@else Panel de Administración @endif | {{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Sige" name="description" />
        <meta content="Sige" name="author" />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nucleo-svg.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        
        <!-- Font Awesome Icons -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>

        <!-- CSS Files -->
        <link id="pagestyle" rel="stylesheet" href="{{ asset('assets/css/soft-ui-dashboard.css') }}" >
        @yield('extracss')

    </head>


    <body class="g-sidenav-show  bg-gray-100">

        @include('layouts.sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            @include('layouts.header')
            @include('layouts.notifications')
            @yield('content')
            @include('layouts.footer')
        </main>
          
        @yield('scripts')
        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>

        <script>
            var ctx = document.getElementById("chart-bars").getContext("2d");

            new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                label: "Sales",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: false,
                backgroundColor: "#fff",
                data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                legend: {
                    display: false,
                }
                },
                interaction: {
                intersect: false,
                mode: 'index',
                },
                scales: {
                y: {
                    grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    },
                    ticks: {
                    suggestedMin: 0,
                    suggestedMax: 500,
                    beginAtZero: true,
                    padding: 15,
                    font: {
                        size: 14,
                        family: "Inter",
                        style: 'normal',
                        lineHeight: 2
                    },
                    color: "#fff"
                    },
                },
                x: {
                    grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false
                    },
                    ticks: {
                    display: false
                    },
                },
                },
            },
            });


            var ctx2 = document.getElementById("chart-line").getContext("2d");

            var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
            gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

            var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

            gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
            gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

            new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#cb0c9f",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                },
                {
                    label: "Websites",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#3A416F",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    fill: true,
                    data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                    maxBarThickness: 6
                },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                legend: {
                    display: false,
                }
                },
                interaction: {
                intersect: false,
                mode: 'index',
                },
                scales: {
                y: {
                    grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5]
                    },
                    ticks: {
                    display: true,
                    padding: 10,
                    color: '#b2b9bf',
                    font: {
                        size: 11,
                        family: "Inter",
                        style: 'normal',
                        lineHeight: 2
                    },
                    }
                },
                x: {
                    grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [5, 5]
                    },
                    ticks: {
                    display: true,
                    color: '#b2b9bf',
                    padding: 20,
                    font: {
                        size: 11,
                        family: "Inter",
                        style: 'normal',
                        lineHeight: 2
                    },
                    }
                },
                },
            },
            });
        </script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script src="{{ asset('assets/js/buttons.js') }}"></script>
        <script src="{{ asset('assets/js/soft-ui-dashboard.min.js') }}"></script>
        <script>
            const user_id = {{ Auth::id() }};
        </script>

    </body>

</html>
