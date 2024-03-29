<div x-data="{
    init() {
            console.log('init total xp graph');
            let chart = new ApexCharts(this.$refs.chart, this.options);
            chart.render();
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
}"
    class="w-full rounded-lg bg-white/5 p-4 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 lg:p-8">
    <div x-ref="chart" class="rounded-lg bg-white px-2 py-4 text-black shadow-sm lg:p-8"></div>
</div>
