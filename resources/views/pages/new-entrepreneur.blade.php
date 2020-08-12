@extends('layouts.site')
@section('title', 'New Entrepreneur')

@section('content')
    <div class="container">
        <div class="row form-head-padding">
            <div class="col-sm-8">
                <p>Please fill the details of Entrepreneurs <span class="mandatory">(*All fields are mandatory)</span></p>
            </div>

            <div class="col-sm-4">
                <p><span class="float-right"><a href="javascript:history.go(-1)">Cancel</a></span></p>
            </div>
        </div>

        <div class="form-padding">
            <form class="validate-form" action="{{ route('entrepreneur.store') }}" method="post">
                @csrf
                <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group validate-input" data-validate = "Required Field">
                            <input class="form-control input100" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter entrepreneur name'" placeholder='Enter entrepreneur name'>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group validate-input" data-validate = "Required Field">
                            <input class="form-control input100 numeric_number" name="contact" id="contact" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact number'" placeholder='Enter contact number'>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group validate-input" data-validate = "abc@example.com">
                            <input class="form-control input100" name="email" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email'>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group validate-input" data-validate = "Required Field">
                            <input class="form-control input100" name="business" id="business" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter business name'" placeholder='Enter business name'>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group validate-input" data-validate = "Required Field">
                            <input class="form-control input100" name="address" id="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter address'" placeholder='Enter address'>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group validate-input" data-validate = "Required Field">
                            <textarea class="form-control w-100 input100" name="description" id="description" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Description'" placeholder='Enter Description'></textarea>
                        </div>
                    </div>

                    <div class="col-sm-2 form-group">
                        <button class="btn btn-custom" type="submit">SUBMIT</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

@endsection