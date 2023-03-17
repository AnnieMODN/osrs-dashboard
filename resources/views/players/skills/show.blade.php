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
    <div class="relative min-h-screen bg-blue-200 bg-center sm:flex sm:items-center sm:justify-center">
        <div class="//max-w-7xl mx-auto w-3/4 p-6 lg:p-8">
            <div class="mb-6 flex justify-center">
                <p>OSRS Dashboard</p>
            </div>

            {{-- @dd($skillGraphData) --}}

            <div class="grid grid-cols-2 space-x-4">
                <div x-data="{
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
                                    name: '{{ ucfirst($skill) }} XP',
                                    data: {{ Js::from($skillXpGraphData) }},
                                }],
                                xaxis: {
                                    type: 'datetime',
                                },
                                yaxis: {
                                    labels: {
                                        formatter: function(val, opt) {
                                            return Intl.NumberFormat('en-GB', {
                                                    notation: 'compact',
                                                    maximumFractionDigits: 2
                                                })
                                                .format(val);
                                        }
                                    }
                                },
                                dataLabels: {
                                    formatter: function(val, opt) {
                                        return Intl.NumberFormat('en-GB', {
                                                notation: 'compact',
                                                maximumFractionDigits: 2
                                            })
                                            .format(val);
                                    }
                                }
                            }
                        }
                }" class="w-full">
                    <div x-ref="chart" class="rounded-lg bg-white p-8 shadow-sm"></div>
                </div>

                <div x-data="{
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
                                    name: '{{ ucfirst($skill) }} Rank',
                                    data: {{ Js::from($skillRankGraphData) }},
                                }],
                                xaxis: {
                                    type: 'datetime',
                                },
                                yaxis: {
                                    labels: {
                                        formatter: function(val, opt) {
                                            return Intl.NumberFormat('en-GB', {
                                                    notation: 'compact',
                                                    maximumFractionDigits: 2
                                                })
                                                .format(val);
                                        }
                                    }
                                },
                                dataLabels: {
                                    formatter: function(val, opt) {
                                        return Intl.NumberFormat('en-GB', {
                                                notation: 'compact',
                                                maximumFractionDigits: 2
                                            })
                                            .format(val);
                                    }
                                }
                            }
                        }
                }" class="w-full">
                    <div x-ref="chart" class="rounded-lg bg-white p-8 shadow-sm"></div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
