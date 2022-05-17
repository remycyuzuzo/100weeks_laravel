@extends('admin.layouts.main')

@section('page-title', __("New $personnel_type registration"))

@section('main-contents')
<span class="text-muted"><i class="fas fa-question-circle"></i> fill the form as required</span>
<div class="form py-3">
    <form action="/users/{{ $personnel_type }}/new" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="grouped-fields">
                    <h3 class="title"><i class="fas fa-user-circle"></i> Personal information</h3>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fname">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="First name" value="{{ old('fname') }}" name="fname" id="fname" data-required>
                            @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Last name</label>
                            <input type="text" class="form-control" placeholder="Last name" value="{{ old('lname') }}" id="lname" name="lname">
                            @error('lname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="idcard">ID card / Passport number</label>
                            <input type="number" class="form-control" placeholder="ID card number" id="idcard" name="idcard" value="{{ old('idcard') }}">
                            @error('idcard')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tel">Telephone number <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" placeholder="Telephone number" id="tel" name="tel" data-required  value="{{ old('tel') }}">
                            @error('tel')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Physical address" id="address" name="address" data-required value="{{ old('address') }}">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender <span class="text-danger">*</span></label>
                        <fieldset class="py-2">
                            <input type="radio" name="gender" value="F" id="radioFemale"> <label for="radioFemale">Female</label>
                            <input type="radio" name="gender" id="radioMale" value="M"> <label for="radioMale">Male</label>
                        </fieldset>
                        @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <div class="box grouped-fields bg-light p-2">
                    <h3 class="title"><i class="fas fa-lock"></i> Login cledentials</h3>
                    <div class="form-group">
                        <label for="email">Email address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="email" placeholder="Email address of the administrator" data-required name="email" value="{{ old('email') }}">
                        @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password <small class="text-muted bg-light px-2"><i class="fas fa-question-circle"></i> If you leave this empty, this user will receive a message for setting their password </small></label>
                        <input type="password" class="form-control" id="password" placeholder="password" name="password">
                        @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
            </div>
            <input type="hidden" name="submit_new_coach" value="true">

            <div class="form-group">
                <label for="accept" class="d-block"><input type="checkbox" id="accept"> I agree that every info I filled is correct</label>
                <label for="stayOnThisPage" class="d-block"><input type="checkbox" id="stayOnThisPage"> stay on this page after submitting data</label>
            </div>

            @csrf
            <input type="hidden" name="type" value="{{ $personnel_type }}">

            <div class="submit-btn">
                <button type="button" class="btn btn-outline-danger">Cancel</button>
                <button type="submit" class="btn btn-primary" name="send"><i class="fas fa-save"></i> Submit</button>
            </div>

            <div class="my-3">
                <div class="result" data-result></div>
            </div>
        </div>

    </form>
</div>
@endsection

{{-- Page dependent CSS or JS --}}
@section('css')
    
@endsection

@section('js')
    
@endsection