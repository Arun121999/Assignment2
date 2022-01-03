@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert d-none"></div>
            <div class="card">
                <div class="card-header bg-dark text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    

                    <table class="table">
                        <tr class="bg-secondary text-white">
                            <th>Sr. No</th>
                            <th>Name</th>
                            <th>Email</th>
                           
                            <th>Actions</th>
                        </tr>
                        @forelse($doctor as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->name ?? 'N/A' }}</td>
                            <td>{{ $data->email ?? 'N/A' }}</td>
                            
                            <td>                        <input data-id="{{$data->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $data->is_approved==1 ? 'checked' : '' }}>
</td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center text-danger" colspan="4">No records Found</td>
                        </tr>
                        @endforelse
                    </table>
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
                        $('.alert').removeClass('d-none');
                        $('.alert').addClass(data.alert_class);
                        $('.alert').html(data.message);
                        setTimeout(function(){ 
                            $('.alert').addClass('d-none');
                            $('.alert').removeClass(data.alert_class);
                        }, 2000);
                  }
                }
            });
        })
</script>
@endpush
@endsection
