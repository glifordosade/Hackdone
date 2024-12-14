
@extends('baseLayout.NavbarMasyarakat')

@section('konten')


    <!-- Keranjang Section -->
    <div class="container my-4">
        <h3 class="fw-bold">Keranjang</h3>
        <!-- Toko Section -->
        <div class="row">
            <!-- Keranjang Kiri -->
            <div class="col-md-8">
                <div class="border p-3 rounded">
                    <!-- Pilih Semua -->
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <input type="checkbox" checked> <span class="fw-bold ms-2">Pilih Semua (3)</span>
                        </div>
                        <span class="text-primary fw-bold">Hapus</span>
                    </div>
                    <!-- Produk List -->
                    <div class="border-top pt-3">
                        <!-- Toko -->
                        <h6><input type="checkbox" checked> <span class="fw-bold ms-2">Toko Bu Mega</span></h6>
                        <!-- Item 1 -->
                        <div class="d-flex justify-content-between align-items-center border-bottom py-3">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" checked class="me-3">
                                <img src="img/kentang3.jpg" class="rounded me-3" alt="Jagung" style="width: 150px; height:150px">
                                <div>
                                    <h6 class="mb-1 fw-bold">Kentang</h6>
                                    <p class="mb-0 text-muted small">Penjual: Bu Mega<br>Lokasi: Kota Padang</p>
                                    <p class="fw-bold text-success mb-0">Rp.20.000</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-secondary btn-sm">-</button>
                                <span class="mx-2">2</span>
                                <button class="btn btn-outline-secondary btn-sm">+</button>
                                <i class="bi bi-trash text-danger ms-3"></i>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="d-flex justify-content-between align-items-center border-bottom py-3">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" checked class="me-3">
                                <img src="img/cabe2.jpg" class="rounded me-3" alt="Cabai Merah" style="width: 150px; height:150px">
                                <div>
                                    <h6 class="mb-1 fw-bold">Cabai Merah</h6>
                                    <p class="mb-0 text-muted small">Penjual: Bu Mega<br>Lokasi: Kota Padang</p>
                                    <p class="fw-bold text-success mb-0">Rp.68.000</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-secondary btn-sm">-</button>
                                <span class="mx-2">1</span>
                                <button class="btn btn-outline-secondary btn-sm">+</button>
                                <i class="bi bi-trash text-danger ms-3"></i>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="d-flex justify-content-between align-items-center py-3">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" checked class="me-3">
                                <img src="img/kubis.jpg" class="rounded me-3" alt="Cabai Hijau" style="width: 150px; height:150px">
                                <div>
                                    <h6 class="mb-1 fw-bold">Kubis</h6>
                                    <p class="mb-0 text-muted small">Penjual: Bu Mega<br>Lokasi: Kota Padang</p>
                                    <p class="fw-bold text-success mb-0">Rp.68.000</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-secondary btn-sm">-</button>
                                <span class="mx-2">1</span>
                                <button class="btn btn-outline-secondary btn-sm">+</button>
                                <i class="bi bi-trash text-danger ms-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ringkasan Pesanan -->
            <div class="col-md-4">
                <div class="border p-3 rounded">
                    <h5 class="fw-bold">Order Summary</h5>
                    <div class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span>Rp.156.000</span>
                    </div>
                    <div class="d-flex justify-content-between my-2">
                        <span>Delivery Fee</span>
                        <span>Rp.10.000</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between fw-bold">
                        <span>Total</span>
                        <span>Rp.166.000</span>
                    </div>
                    <button class="btn btn-success w-100 mt-3">
                        Lakukan Pembayaran <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
