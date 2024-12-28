<div class="row">

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom ">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class="mdi mdi-account-group avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Jumlah Anggota
                    </p>
                    <h3 class="font-weight-medium my-2">
                        <span data-plugin="counterup">{{ number_format($anggotaCount) }}</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class="mdi mdi-book-open-page-variant avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Jumlah Buku</p>
                    <h3 class="font-weight-medium my-2">
                        <span data-plugin="counterup">{{ number_format($bukuCount) }}</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom ">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class="mdi mdi-library-shelves avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Jumlah Kategori
                        Buku</p>
                    <h3 class="font-weight-medium my-2">
                        <span data-plugin="counterup">{{ number_format($kategoriCount) }}</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card-box widget-box-two widget-two-custom ">
            <div class="media">
                <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                    <i class="mdi mdi-bookmark-check avatar-title font-30 text-white"></i>
                </div>

                <div class="wigdet-two-content media-body">
                    <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Jumlah Peminjaman
                    </p>
                    <h3 class="font-weight-medium my-2">
                        <span data-plugin="counterup">{{ number_format($peminjamanCount) }}</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

</div>
