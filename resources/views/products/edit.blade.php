@extends('dashboard_layouts.master')
@section('css')

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
<div class="card card-statistics mb-30">
    <div class="card-body">
        <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('product.index') }}">رجوع</a>
        <form action="{{route('product.update',$product->id)}}" method="post" >
            {{-- {{csrf_field()}} --}}
            @csrf
            @method('put')
            <div class="row " style=" display: block;">
                <div class="col-lg-6">
                    <label>اسم القسم <span style="color:rgb(199, 8, 8)">*</span></label>
                    <input class="form-control " name="product_name"  type="text" value="{{ $product->product_name }}">
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <button class="btn btn-primary " type="submit">تاكيد</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')

@endsection
