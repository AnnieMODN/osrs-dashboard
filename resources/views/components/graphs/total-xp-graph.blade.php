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
}" class="w-full">
    <div x-ref="chart" class="rounded-lg bg-white px-2 py-4 shadow-sm lg:p-8"></div>
</div>
