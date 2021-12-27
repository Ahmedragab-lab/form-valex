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
					{{-- <div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div> --}}
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
<div class="card card-statistics mb-30">
    <div class="card-body">
        <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('section.index') }}">رجوع</a>
        <form action="{{route('section.update',$section->id)}}" method="post" >
            {{-- {{csrf_field()}} --}}
            @csrf
            @method('put')
            <div class="row " style=" display: block;">
                <div class="col-lg-6">
                    <label>اسم القسم <span style="color:rgb(199, 8, 8)">*</span></label>
                    <input class="form-control " name="section_name"  type="text" value="{{ $section->section_name }}">
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
