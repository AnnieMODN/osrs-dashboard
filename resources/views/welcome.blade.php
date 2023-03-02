<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')


        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-blue-200">
            <div class="//max-w-7xl w-3/4 mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <p>OSRS Dashboard</p>
                </div>

                <div class="grid grid-cols-3 mt-16">
                    <div class="bg-white rounded-md shadow-sm p-8">
                        <p class="text-2xl">LunaarSky</p>
                        <p class="w-full font-bold text-3xl">Total Level: {{ $latestStatSnapshot->overall_level }}/<span>2277</span></p>
                    </div>
                </div>

                <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div
                        x-data="{
                            init() {
                                let chart = new ApexCharts(this.$refs.chart, this.options)

                                chart.render()
                            },
                            get options() {
                                return {
                                    chart: { type: 'area', toolbar: false },
                                    tooltip: {
                                        marker: false,
                                    },
                                    series: [{
                                        name: 'Total XP',
                                        data: {{ Js::from($totalXPGraphData) }},
                                    }],
                                    xaxis: {
                                        type: 'datetime',
                                    }
                                }
                            }
                        }"
                        class="w-full"
                    >
                        <div x-ref="chart" class="rounded-lg bg-white p-8 shadow-sm"></div>
                    </div>

                    <div class="bg-white rounded-lg p-8 w-full h-auto row-span-2 shadow-sm">
                        <div class="flex flex-col font-bold text-xl mb-6">Stats</div>
                        @foreach ($statLevels as $key => $level)
                            <p>{{ $key }}: {{ Js::from($level) }}/<span class="font-bold">99</span></p>
                        @endforeach
                    </div>
                     

                    <div
                        x-data="{
                            init() {
                                let chart = new ApexCharts(this.$refs.chart, this.options)

                                {{-- var chart = new ApexCharts(document.querySelector('#chart'), options);
                                chart.render(); --}}

                                chart.render()
                            },
                            get options() {
                                return {
                                    chart: { type: 'polarArea', toolbar: false },
                                    tooltip: {
                                        marker: false,
                                    },
                                    stroke: {
                                        colors: ['#fff']
                                    },
                                    fill: {
                                        opacity: 0.8
                                    },
                                    responsive: [{
                                        breakpoint: 1,
                                        options: {
                                            chart: {
                                                width: 200
                                            },
                                            legend: {
                                                position: 'bottom'
                                            }
                                        }
                                    }],
                                    series: {{ Js::from(array_values($statLevels)) }},
                                    labels: {{ Js::from(array_keys($statLevels)) }},
                                }
                            }
                        }"
                        class="w-full"
                    >
                        <div x-ref="chart" class="rounded-lg bg-white p-8 shadow-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
