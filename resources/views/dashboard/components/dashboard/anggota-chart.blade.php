@push('scripts')
    <script>
        if ($("#user_type_bar").length) {
            const chart = echarts.init(document.getElementById("user_type_bar"));

            chart.setOption({
                grid: {
                    zlevel: 0,
                    x: 50,
                    x2: 50,
                    y: 20,
                    y2: 20,
                    borderWidth: 0,
                    backgroundColor: "rgba(0,0,0,0)",
                    borderColor: "rgba(0,0,0,0)"
                },
                tooltip: {
                    trigger: "axis",
                    axisPointer: {
                        type: "shadow",
                        lineStyle: {
                            color: "rgba(0,0,0,.5)",
                            width: 1
                        },
                        shadowStyle: {
                            color: "rgba(0,0,0,.1)"
                        }
                    }
                },
                legend: {
                    data: []
                },
                toolbox: {
                    orient: "vertical",
                    show: true,
                    showTitle: true,
                    color: ["#bdbdbd", "#bdbdbd", "#bdbdbd", "#bdbdbd"],
                    feature: {
                        mark: {
                            show: false
                        },
                        dataZoom: {
                            show: true,
                            title: {
                                dataZoom: "Data Zoom",
                                dataZoomReset: "Reset Zoom"
                            }
                        },
                        dataView: {
                            show: false,
                            readOnly: true
                        },
                        magicType: {
                            show: true,
                            title: {
                                bar: "Bar",
                                line: "Area",
                                stack: "Stacked Bar",
                                tiled: "Tiled Bar"
                            },
                            type: ["bar", "line", "stack", "tiled"]
                        },
                        restore: {
                            show: false
                        },
                        saveAsImage: {
                            show: true,
                            title: "Save as Image"
                        }
                    }
                },
                calculable: true,
                xAxis: [{
                    type: "category",
                    boundaryGap: false,
                    data: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                        "Nov", "Dec",
                    ],
                    axisLine: {
                        show: true,
                        onZero: true,
                        lineStyle: {
                            color: "#98a6ad",
                            type: "solid",
                            width: "2",
                            shadowColor: "rgba(0,0,0,0)",
                            shadowBlur: 5,
                            shadowOffsetX: 3,
                            shadowOffsetY: 3
                        }
                    },
                    axisTick: {
                        show: false
                    },
                    axisLabel: {
                        color: "#98a6ad"
                    },
                    splitLine: {
                        show: false,
                        lineStyle: {
                            color: "#fff",
                            type: "solid",
                            width: 0,
                            shadowColor: "rgba(0,0,0,0)"
                        }
                    }
                }],
                yAxis: [{
                    type: "value",
                    splitLine: {
                        show: false,
                        lineStyle: {
                            color: "fff",
                            type: "solid",
                            width: 0,
                            shadowColor: "rgba(0,0,0,0)"
                        }
                    },
                    axisLabel: {
                        show: false
                    },
                    axisTick: {
                        show: false
                    },
                    axisLine: {
                        show: false,
                        onZero: true,
                        lineStyle: {
                            color: "#98a6ad",
                            type: "solid",
                            width: "0",
                            shadowColor: "rgba(0,0,0,0)",
                            shadowBlur: 5,
                            shadowOffsetX: 3,
                            shadowOffsetY: 3
                        }
                    }
                }],
                series: [{
                        name: "Peminjaman",
                        type: "bar",
                        smooth: true,
                        symbol: "none",
                        symbolSize: 2,
                        showAllSymbol: true,
                        barWidth: 10,
                        barGap: "10%",
                        itemStyle: {
                            normal: {
                                color: "#64c5b1",
                                borderWidth: 2,
                                borderColor: "#64c5b1",
                                areaStyle: {
                                    color: "#64c5b1",
                                    type: "default"
                                }
                            }
                        },
                        data: {!! json_encode($peminjamanChart) !!},
                    },
                    {
                        name: "Pengembalian",
                        type: "bar",
                        smooth: true,
                        symbol: "none",
                        symbolSize: 2,
                        showAllSymbol: true,
                        barWidth: 10,
                        barGap: "10%",
                        itemStyle: {
                            normal: {
                                color: "#f1f1f1",
                                borderWidth: 2,
                                borderColor: "#f1f1f1",
                                areaStyle: {
                                    color: "#f1f1f1",
                                    type: "default"
                                }
                            }
                        },
                        data: {!! json_encode($pengembalianChart) !!},
                    }
                ]
            });
        }
    </script>
@endpush

<div class="col-xl-8">
    <div class="card-box">
        <h4 class="header-title mb-4">Jumlah Peminjaman dan Pengembalian Buku</h4>

        <div class="chart-container" dir="ltr">
            <div class="" style="height:280px" id="user_type_bar"></div>
        </div>
    </div>
</div>
