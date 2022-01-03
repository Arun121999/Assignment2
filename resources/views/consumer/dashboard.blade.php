@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success invisible"></div>
            <div class="card">
                <div class="card-header bg-info text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        {{ __('Welcome to the Consumer Dashboard') }}                    
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    $('.toggle-class').change(function(){
            $status = $(this).prop('checked') == true ? 1 : 0; 
            $doctor_id = $(this).data('id'); 
             
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('doctor.updateStatus') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": $doctor_id,
                    "status": $status,
                },
                success: function(data){
                  if(data.status==200){
                        $('.alert-success').removeClass('invisible');
                        $('.alert-success').html(data.message);
                        setTimeout(function(){ 
                            $('.alert-success').addClass('invisible');
                        }, 5000);
                  }
                }
            });
        })
</script>
@endpush
@endsection
