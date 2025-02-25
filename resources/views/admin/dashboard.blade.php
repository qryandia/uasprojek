@extends('layouts.master_admin')

@section('title', 'halaman utama admin')

@section('isi')

<div class="" >
    <div class="d-flex">
        <div class="colkiri col-lg-4 container-fluid position-fixed" style="background-color: 0B3D91; height: 100vh; width: auto; padding-top: 90px;">
            <p class="fw-bold pt-4" style="color: #7BC6FA; font-size: 13px">Profil</p>
            <div class="d-flex flex-row mb-3">
                <img src="{{ asset('img/user1.svg') }}" width="40" height="42" alt="">
                <div class="p-2 fw-bold" style="color: #FFFFFF;">Admin ALC Gampengrejo</div>
            </div>

            <p class="fw-bold pt-4" style="color: #7BC6FA; font-size: 13px">Menu</p>
            <div class="d-flex flex-row mb-3 align-self-center">
                <img src="{{ asset('img/menuda.svg') }}" width="26" height="26" alt="">
                <div class="p-1 ps-2" style="color: #FFFFFF;">Dashboard</div>
            </div>

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/pendaftar.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('datadaftar') }}" class="p-1 ps-2 gak-garis">Data Pendaftar</a>
            </div>

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/posting1.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('admin.postingan') }}" class="p-1 ps-2 gak-garis">Data Postingan</a>
            </div>


            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/keluar.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('login') }}" class="p-1 ps-2 gak-garis">Keluar</a>
            </div>
        </div>

        <!-- sebelah kiri -->
        <div class="colkanan col-lg-8 flex-grow-1" style="margin-left: 22%; padding: 20px; padding-top: 100px;">
            <div class="container mb-4">
                <div class="card mb-4" style="width: 20%; height: auto; padding:10px;">
                    <div class="" style="">
                        <img src="{{ asset('img/pendaftaranjumlah.svg') }}" style="width: 20px; height: 20px;" alt=""> <span class="kecil">Total Pendaftar</span>
                    </div>
                    
                    <div style="">
                        <h5 class="warna fw-bold pt-2">{{ $totalPendaftar }} Pendaftar</h5>
                    </div>
                </div>






                <h3 class="fw-bold" align='left'>Data Pendaftar Kelas</h3>
                <div class="card-body">
                    <div id="chartProduk" class="mb-0 mt-0" style="display: block"></div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            <script type="text/javascript">
                var labelProduk = {!! json_encode($dataLabel) !!};
                var stokProduk = {!! json_encode($dataStock) !!};
                var options = {
                    series: [{
                        name: 'Pendaftar Kelas',
                        data: stokProduk
                    }],
                    chart: {
                        type: 'bar',
                        height: 350
                    },
                    legend: {
                        show: false
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded',
                            distributed: true
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        title: {
                            text: 'Kelas'
                        },
                        categories: labelProduk
                    },
                    yaxis: {
                        title: {
                            text: '(Jumlah Pendaftar)'
                        }
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return val + " orang"
                            }
                        }
                    }
                };
                var chart = new ApexCharts(document.querySelector("#chartProduk"), options);
                chart.render();
            </script>
        </div>
        <!-- akhir kiri -->
    </div>

</div>

@endsection