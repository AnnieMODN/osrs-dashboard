<div x-data="{
    init() {
            let chart = new ApexCharts(this.$refs.chart, this.options)

            chart.render()
        },
        get options() {
            return {
                chart: {
                    height: 350,
                    type: 'bar',
                    toolbar: false
                },
                plotOptions: {
                    bar: {
                        columnWidth: '45%',
                        distributed: true,
                    }
                },
                tooltip: {
                    marker: false,
                },
                stroke: {
                    colors: ['#fff']
                },
                fill: {
                    opacity: 0.8
                },
                legend: {
                    show: false,
                },
                series: {{ Js::from(array_values($statLevels)) }},
                labels: {{ Js::from(array_keys($statLevels)) }},
            }
        }
}" class="hidden w-full md:block">
    <div x-ref="chart" class="rounded-lg bg-white p-8 shadow-sm"></div>
</div>

{{-- var options = {
          series: [{
          data: [21, 22, 10, 28, 16, 21, 13, 30]
        }],
          chart: {
          height: 350,
          type: 'bar',
          events: {
            click: function(chart, w, e) {
              // console.log(chart, w, e)
            }
          }
        },
        colors: colors,
        plotOptions: {
          bar: {
            columnWidth: '45%',
            distributed: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        legend: {
          show: false
        },
        xaxis: {
          categories: [
            ['John', 'Doe'],
            ['Joe', 'Smith'],
            ['Jake', 'Williams'],
            'Amber',
            ['Peter', 'Brown'],
            ['Mary', 'Evans'],
            ['David', 'Wilson'],
            ['Lily', 'Roberts'],
          ],
          labels: {
            style: {
              colors: colors,
              fontSize: '12px'
            }
          }
        }
        };
 --}}
