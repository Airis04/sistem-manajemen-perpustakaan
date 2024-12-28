@push('scripts')
    <script>
        if ($("#platform_type_dates_donut").length && {{ count($topKategori) }} >= 5) {
            const chart = echarts.init(document.getElementById("platform_type_dates_donut"));

            chart.setOption({
                timeline: {
                    show: true,
                    data: ["current"],
                    label: {
                        formatter: function(value) {
                            return value ? value.slice(0, 5) : null;
                        }
                    },
                    x: 10,
                    y: null,
                    x2: 10,
                    y2: 0,
                    width: 250,
                    height: 50,
                    backgroundColor: "rgba(0,0,0,0)",
                    borderColor: "#eaeaea",
                    borderWidth: 0,
                    padding: 5,
                    controlPosition: "left",
                    autoPlay: true,
                    loop: true,
                    playInterval: 2000,
                    lineStyle: {
                        width: 1,
                        color: "#bdbdbd",
                        type: ""
                    }
                },
                options: [{
                    color: ["#d4d4d4", "#64c5b1", "#414b4f", "#ee4b82", "#45bbe0"],
                    title: {
                        text: "",
                        subtext: ""
                    },
                    tooltip: {
                        trigger: "item",
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        show: false,
                        x: "left",
                        orient: "vertical",
                        padding: 0,
                        data: ["{{ $topKategori[0]->name }}", "{{ $topKategori[1]->name }}",
                            "{{ $topKategori[2]->name }}", "{{ $topKategori[3]->name }}",
                            "{{ $topKategori[4]->name }}"
                        ]
                    },
                    toolbox: {
                        show: true,
                        color: ["#bdbdbd", "#bdbdbd", "#bdbdbd", "#bdbdbd"],
                        feature: {
                            mark: {
                                show: false
                            },
                            dataView: {
                                show: false,
                                readOnly: true
                            },
                            magicType: {
                                show: true,
                                type: ["pie", "funnel"],
                                option: {
                                    funnel: {
                                        x: "10%",
                                        width: "80%",
                                        funnelAlign: "center",
                                        max: 50
                                    },
                                    pie: {
                                        roseType: "none"
                                    }
                                }
                            },
                            restore: {
                                show: false
                            },
                            saveAsImage: {
                                show: true
                            }
                        }
                    },
                    series: [{
                        name: "Kategori",
                        type: "pie",
                        radius: [20, "80%"],
                        roseType: "none",
                        center: ["50%", "45%"],
                        width: "50%",
                        itemStyle: {
                            normal: {
                                label: {
                                    show: true
                                },
                                labelLine: {
                                    show: true
                                }
                            },
                            emphasis: {
                                label: {
                                    show: false
                                },
                                labelLine: {
                                    show: false
                                }
                            }
                        },
                        data: [{
                                value: {{ $topKategori[0]->buku_count }},
                                name: "{{ $topKategori[0]->nama_kategori }}"
                            },
                            {
                                value: {{ $topKategori[1]->buku_count }},
                                name: "{{ $topKategori[1]->nama_kategori }}"
                            },
                            {
                                value: {{ $topKategori[2]->buku_count }},
                                name: "{{ $topKategori[2]->nama_kategori }}"
                            },
                            {
                                value: {{ $topKategori[3]->buku_count }},
                                name: "{{ $topKategori[3]->nama_kategori }}"
                            },
                            {
                                value: {{ $topKategori[4]->buku_count }},
                                name: "{{ $topKategori[4]->nama_kategori }}"
                            }
                        ]
                    }]
                }]
            });
        }
    </script>
@endpush

<div class="col-xl-4">
    <div class="card-box">
        <h4 class="header-title mb-4">Kategori Terbaik</h4>

        <div class="chart-container" dir="ltr">
            @if (count($topKategori) >= 5)
                <div class="" style="height:280px" id="platform_type_dates_donut"></div>
            @else
                <div>Data kategori tidak cukup untuk analisis</div>
            @endif
        </div>
    </div>
</div>
