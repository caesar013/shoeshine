@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-body pb-3">
                        <h2 style="color: white">Order Page</h2>
                    </div>
                </div>
            </div>
        </div>
        <br><br>


        <div id="success" class="mt-2"></div>
        <div class="card bg-gradient-secondary shadow">
            <input type="hidden" name="transaction_id" value="" id="transaction_id">
            <div class="form-group">
                <label for="shoe" class="form-control-label ml-3 mt-3">User</label>
                <select class="form-control ml-3" type="text" id="user" style="width: 1158px">
                    @forelse ($users as $user_foo => $user_bar)
                        <option value="{{ $user_bar->id }}">{{ $user_bar->username }} - {{ $user_bar->name }}</option>
                    @empty
                        <option value="">NO Users. PLEASE INPUT FIRST</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="shoe" class="form-control-label ml-3 mt-3">Shoe</label>
                <select class="form-control ml-3 " type="text" id="shoe" style="width: 1158px">

                </select>
            </div>
            <div class="form-group">
                <label for="service" class="form-control-label ml-3 mt-3">Service</label>
                <select class="form-control ml-3" type="text" id="service" style="width: 1158px">
                    @forelse ($services as $service_foo => $service_bar)
                        <option value="{{ $service_bar->id }}">{{ $service_bar->name }} - {{ $service_bar->price }}</option>
                    @empty
                        <option value="">NO SERVICE. PLEASE CONTACT THE ADMIN</option>
                    @endforelse
                </select>
            </div>
            <br>
            <div class="row justify-content-end">
                <div class="col-lg-3 ">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary ml-3 add_order_btn" style="color: #f4f5f7"><b>+ Add
                                New Order</b></button>
                    </div>
                    {{-- <div class="form-group ">
                        <button type="button" class="btn btn-success ml-3" style="color: #f4f5f7"><b>Submit</b></button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        jQuery(document).ready(function() {

            $('#shoe').select2();

            $('#user').on('change', function(e) {
                var user_id = e.target.value;
                $.ajax({
                    type: "POST",
                    url: "{{ route('dashboard.admin.order.fetchShoes') }}",
                    data: {
                        data_id: user_id
                    },
                    success: function(response) {
                        if (response.shoes) {
                            $('#shoe').empty();
                            $.each(response.shoes, function(foo, bar) {
                                $('#shoe').append('<option value="' + bar.id +
                                    '">' + bar.brand + ' - ' + bar.color +
                                    '</option>');
                            });
                        } else {
                            $('#shoe').append(
                                '<option value="">No Shoes Found for this user</option>'
                            );
                        }
                    }
                });
            });


            $(document).on('click', '.add_order_btn', function(e) {
                e.preventDefault();

                var order = {
                    'transaction_id': $('#transaction_id').val(),
                    'service_id': $('#service').val(),
                    'shoe_id': $('#shoe').val()
                };

                $.ajax({
                    type: 'POST',
                    url: '{{ route('dashboard.order.store') }}',
                    data: order,
                    dataType: 'json',
                    success: function(res) {
                        if (res.status) {
                            $("#success").html("");
                            $("#success").addClass('alert alert-info');
                            $("#success").text(res.message);
                        } else {
                            $("#success").html("");
                            $("#success").addClass('alert alert-danger');
                            $("#success").text(res.error);
                        }
                    }
                });
            });

        });
    </script>
@endsection
