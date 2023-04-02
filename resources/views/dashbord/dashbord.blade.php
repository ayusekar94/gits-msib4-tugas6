@extends('dashbord.layout.main')

@section('content')
<main>
    <div class="container-fluid px-3">
        <h1 class="mt-1">Dashboard</h1>
        
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Jumlah User</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white"><i class="fas fa-user fa-2x text-gray-300"></i></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Jumlah Categori</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white"><i class="fas fa-book-open fa-2x text-gray-300"></i></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $category }}</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Jumlah Product</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white"><i class="fas fa-book-open fa-2x text-gray-300"></i></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $products }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection