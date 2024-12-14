@extends('baseLayout.NavbarMasyarakat')

@section('konten')

    <!-- Product Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Product Image -->
            <div class="col-md-6">
                <img src="img/kentang2.jpg" class="img-fluid rounded" alt="Product Image">
                <div class="d-flex mt-3">
                    <img src="img/kentang3.jpg" class="img-thumbnail me-2" alt="Image 1" style="width: 160px; height:150px;">
                    <img src="img/kentang4.jpg" class="img-thumbnail me-2" alt="Image 2" style="width: 160px; height:150px;">
                    <img src="img/kentang5.jpg" class="img-thumbnail" alt="Image 3" style="width: 160px; height:150px;">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h4 class="text-success fw-bold">Rp. 10.000</h4>
                <h5 class="fw-bold">Jagung</h5>
                <div class="mb-2">
                    ⭐⭐⭐⭐☆ <span>(150 Reviews)</span>
                    <span class="text-success ms-2">✔ Tersedia</span>
                </div>
                <p>Jagung berkualitas tinggi hasil pertanian dari Sumatera, ditanam di lahan subur dengan perawatan alami...</p>

                <!-- Quantity and Buttons -->
                <div class="d-flex align-items-center mb-3">
                    <button class="btn btn-outline-secondary">-</button>
                    <span class="mx-2">2</span>
                    <button class="btn btn-outline-secondary">+</button>
                    <h5 class="ms-4 fw-bold text-success">Rp. 20.000</h5>
                </div>
                <button class="btn btn-outline-success me-2">+ Keranjang</button>
                <button class="btn btn-success">Beli</button>
            </div>
        </div>

        <!-- Review Section -->
        <div class="row mt-5">
            <!-- Write Review -->
            <div class="col-md-6">
                <h5>Write a Review</h5>
                <form>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="col-2">
                            <input type="number" class="form-control" placeholder="0/10">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger mt-3">Submit</button>
                </form>
            </div>

            <!-- Reviews -->
            <div class="col-md-6">
                <h5>Reviews</h5>
                <!-- Review 1 -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title mb-0">John Smith</h6>
                            <span class="badge bg-danger">9/10</span>
                        </div>
                        <p class="card-text"><strong>Amazing Product.</strong> Lorem ipsum dolor sit amet...</p>
                    </div>
                </div>
                <!-- Review 2 -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title mb-0">Debra Anderson</h6>
                            <span class="badge bg-danger">8/10</span>
                        </div>
                        <p class="card-text"><strong>Highly Recommended!</strong> Lorem ipsum dolor sit amet...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
