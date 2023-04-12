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
                    name: 'Total Rank',
                    data: {{ Js::from($totalRankGraphData) }},
                }],
                xaxis: {
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        formatter: function(val, opt) {
                            if (val < 0) {
                                val = 0;
                            }
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
                        if (val < 0) {
                            val = 0;
                        }
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
    class="w-full p-4 text-white rounded-lg shadow-sm bg-white/5 ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6 lg:p-8">
    <div x-ref="chart" class="px-2 py-4 text-black bg-white rounded-lg shadow-sm lg:p-8"></div>
</div>
