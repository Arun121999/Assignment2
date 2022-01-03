@extends('layouts.sign')
@section('content')
<!-- Pre-loader end -->
<section class="login-block">
   <!-- Container-fluid starts -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <form method="POST" action="{{ route('register') }}" class="md-float-material form-material">
               {{csrf_field()}}
               <input type="hidden" name="role_id" value="2">
               <div class="text-center">
                  <img src="{{ asset('assets/images/logo.png') }}" alt="logo.png">
               </div>
               <div class="auth-box card">
                  <div class="card-block">
                     <div class="row m-b-20">
                        <div class="col-md-12">
                           <h3 class="text-center txt-primary">Sign up</h3>
                        </div>
                     </div>
                     <div class="form-group form-primary">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus placeholder="Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        {{ $message }}
                        </span>
                        @enderror
                        <span class="form-bar"></span>
                     </div>

                      <div class="form-group form-primary">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        {{ $message }}
                        </span>
                        @enderror
                        <span class="form-bar"></span>
                     </div>
                     
                    
                     <div class="form-group form-primary">
                        <input id="mobile" type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" placeholder="Mobile Number">
                        @error('mobile_number')
                        <span class="invalid-feedback" role="alert">
                        {{ $message }}
                        </span>
                        @enderror
                        <span class="form-bar"></span>
                     </div>
                     

                     <div class="form-group form-primary">
                        <label for="male">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control"> 
                        @error('date_of_birth')
                        <span class="invalid-feedback" role="alert">
                        {{ $message }}
                        </span>
                        @enderror
                        <span class="form-bar"></span>
                     </div>
                     <div class="form-group form-primary">
                        <input type="radio" value="Male" id="male" name="gender">
                        <label for="male">Male</label>
                        <input type="radio" value="Female" id="female" name="gender">
                        <label for="female">Female</label>  
                        @error('gender')
                        <span class="invalid-feedback" role="alert">
                        {{ $message }}
                        </span>
                        @enderror
                        <span class="form-bar"></span>
                     </div>
                     <div class="form-group form-primary">
                        <select name="state_id" class="form-control @error('state') is-invalid @enderror" autocomplete="off">
                           <option value="">--Select State--</option>
                           @foreach($states as $state)
                           <option value="{{ $state->state_id }}">{{ $state->state_title }}</option>
                           @endforeach
                        </select>
                        @error('state_id')
                        <span class="invalid-feedback" role="alert">
                        {{ $message }}
                        </span>
                        @enderror
                        <span class="form-bar"></span>
                     </div>
                     <div class="form-group form-primary">
                        <select name="city_id" class="form-control @error('city') is-invalid @enderror" autocomplete="off">
                           <option value="">--Select City--</option>
                        </select>
                        @error('city_id')
                        <span class="invalid-feedback" role="alert">
                        {{ $message }}
                        </span>
                        @enderror
                        <span class="form-bar"></span>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group form-primary">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                              {{ $message }}
                              </span>
                              @enderror
                              <span class="form-bar"></span>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group form-primary">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                              <span class="form-bar"></span>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="row m-t-25 text-left">
                        <div class="col-md-12">
                            <div class="checkbox-fade fade-in-primary">
                                <label>
                                    <input type="checkbox" value="">
                                    <span class="cr"><i
                                            class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                    <span class="text-inverse">I read and accept <a href="#">Terms &amp;
                                            Conditions.</a></span>
                                </label>
                            </div>
                        </div> -->
                     <!-- <div class="col-md-12">
                        <div class="checkbox-fade fade-in-primary">
                            <label>
                                <input type="checkbox" value="">
                                <span class="cr"><i
                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                <span class="text-inverse">Send me the <a href="#!">Newsletter</a>
                                    weekly.</span>
                            </label>
                        </div>
                        </div> -->
                     <!-- </div> -->
                     <div class="row m-t-30">
                        <div class="col-md-12">
                           <button type="submit"
                              class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign
                           up as doctor</button>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <p class="text-inverse text-center">Already have an account? <a href="{{route('login')}}"><b class="f-w-600">login</b></a></p>
                        </div>
                     </div>
                     <hr />
                     <div class="row">
                        <div class="col-md-10">
                           <p class="text-inverse text-left m-b-0">Thank you.</p>
                           <p class="text-inverse text-left"><a href="../index.html"><b class="f-w-600">Back
                              to website</b></a>
                           </p>
                        </div>
                        <div class="col-md-2">
                           <img src="{{ asset('assets/images/auth/Logo-small-bottom.png') }}"
                              alt="small-logo.png">
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <!-- end of col-sm-12 -->
      </div>
      <!-- end of row -->
   </div>
   <!-- end of container-fluid -->
</section>
@push('script')
<script>
   $( "select[name='state_id']" ).change(function () {
       var stateID = $(this).val();
       if(stateID) {
           $.ajax({
               url: "{{ route('get-cities') }}",
               type: "POST",
               dataType: "json",
               data: {
                   "_token": "{{ csrf_token() }}",
                   'id':stateID
               },
               success: function(data) {
                   $('select[name="city_id"]').empty();
                   $.each(data, function(key, value) {
                       $('select[name="city_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                   });
               }
           });
   
   
       }else{
           $('select[name="city"]').empty();
       }
   });
</script>
@endpush
@endsection