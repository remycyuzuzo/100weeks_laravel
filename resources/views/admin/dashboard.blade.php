@extends('admin.layouts.main')

@section('page-title', __('Dashboard'))

@section('main-contents')
    <div class="summary-cards">
        <div class="title mb-3">
            <h3>
                {{__('System Snapshot')}}
            </h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="card">
                    <div class="card-body">                        
                        <div><b>7</b> {{__('beneficiaries registered')}}</div>
                        <span>
                            <a href="#">{{__('view more')}} <i class="fas fa-arrow-right"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="card">
                    <div class="card-body">                        
                        <div><b>5</b> {{__('parishes')}}</div>
                        <span>
                            <a href="#">{{__('view more')}} <i class="fas fa-arrow-right"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="card">
                    <div class="card-body">
                        <div class=""><b>13</b> {{__('VSLAs')}}</div>
                        <span>
                            <a href="#">{{__('view more')}} <i class="fas fa-arrow-right"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="card">
                    <div class="card-body">
                        <div><b>2</b> {{__('users')}}</div>
                        <span>
                            <a href="#">{{__('view more')}} <i class="fas fa-arrow-right"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div><!-- ./row -->
    </div><!-- ./summary-cards -->
@endsection

{{-- Page dependent CSS or JS --}}
@section('css')
    
@endsection

@section('js')
    
@endsection