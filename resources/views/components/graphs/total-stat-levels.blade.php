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