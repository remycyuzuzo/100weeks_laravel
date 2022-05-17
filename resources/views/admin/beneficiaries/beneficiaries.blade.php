@extends('admin.layouts.main')

@section('page-title', __('Beneficiaries'))

@section('main-contents')
        <div class="table-responsive">
            <table class="table table-hover" id="beneficiariesTable">
                <thead>
                    <th>#</th>
                    <th>name</th>
                    <th>Parish</th>
                    <th>VSLA</th>
                    <th></th>
                </thead>
                <tbody>
                        <tr data-beneficiary_id="1">
                            <td>1</td>
                            <td><a href="">Nyirantama Mathilde</a></td>
                            <td>Ruhengeri</td>
                            <td>VSLA_001</td>
                            <td><button class="btn btn-sm btn-light"><i class="fas fa-edit"></i> edit</button></td>
                        </tr>
                </tbody>
            </table>
        </div>
    
@endsection

{{-- Page dependent CSS or JS --}}
@section('css')
    
@endsection

@section('js')
    
@endsection