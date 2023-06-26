@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <!-- Add Services Modal -->
    <div class="modal fade" id="modal_add_services" tabindex="-1" role="dialog" aria-labelledby="modal_add_servicesLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_add_servicesLabel">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="errorAdd"></div>
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="name form-control" id="name" value="{{ old('name') }}"
                            required>
                        <label for="price">Price</label>
                        <input type="number" class="price form-control" id="price" value="{{ old('price') }}"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_service">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End- Add Services Modal -->

    <!-- Edit Services Modal -->
    <div class="modal fade" id="modal_edit_services" tabindex="-1" role="dialog" aria-labelledby="modal_edit_servicesLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_edit_servicesLabel">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('modal_edit_services')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="errorEdit"></div>
                    <div class="form-group mb-3">
                        <input type="hidden" id="edit_id">
                        <label for="name">Name</label>
                        <input type="text" class="name form-control" id="edit_name" value="" required>
                        <label for="price">Price</label>
                        <input type="number" class="price form-control" id="edit_price" value="" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal('modal_edit_services')">Close</button>
                    <button type="button" class="btn btn-primary update_service">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!--End- Edit Services Modal -->

    <!-- Delete Services Modal -->
    <div class="modal fade" id="modal_delete_services" tabindex="-1" role="dialog" aria-labelledby="modal_delete_servicesLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_delete_servicesLabel">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('modal_delete_services')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="delete_id">
                    <h3>Are you sure you want to delete this data?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal"
                        onclick="closeModal('modal_delete_services')">Close</button>
                    <button type="button" class="btn btn-primary proceed_delete_service">Yes, delete</button>
                </div>
            </div>
        </div>
    </div>
    <!--End- Delete Services Modal -->

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div id="success" class="mt-2"></div>
                <div class="card">
                    <div class="card-header align-items-center">
                        <span><b>Services</b></span>
                        <span class="float-right"><button type="button" href="" class=" btn btn-primary"
                                data-toggle="modal" data-target="#modal_add_services">
                                + Add Service
                            </button> </span>
                    </div>
                    <div class="card-body">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>

        function closeModal(idModal) {
            $('#'+idModal).modal('hide');
        }

        $(document).ready(function() {

            fetch();


            function fetch() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('dashboard.admin.fetchDataServices') }}",
                    dataType: "json",
                    success: function(data) {
                        $('#modal_add_servicesLabel').html('Add Service');
                        $('tbody').html("");
                        $.each(data.services, function(foo, bar) {
                            $('tbody').append(`
                                <tr>
                                    <td>` + (foo+1) + `</td>
                                    <td>` + bar.name + `</td>
                                    <td>` + bar.price + `</td>
                                    <td>
                                            <button type="button" class="edit_service btn btn-primary btn-sm" value="` +
                                bar.id + `">Edit</button>
                                            <button type="button" class="delete_service btn btn-danger btn-sm" value="` +
                                bar.id + `">Delete</button>
                                    </td>
                                </tr>`);
                        })
                    }
                });
            }

            $(document).on('click', '.delete_service', function(e) {
                e.preventDefault();
                let service_id = $(this).val();
                $('#delete_id').val(service_id);
                $('#modal_delete_servicesLabel').text('Delete Warning!!!');
                $('#modal_delete_services').modal('show');
            });

            $(document).on('click', '.proceed_delete_service', function(e) {
                e.preventDefault();
                let service_id = $('#delete_id').val();

                $.ajax({
                    type: 'DELETE',
                    url: '/dashboard/admin/service/' + service_id,
                    success: function(res) {
                        if (res.status) {
                            $('#success').html("");
                            $('#success').addClass('alert alert-success');
                            $('#success').text(res.message);
                            $('#modal_delete_services').modal('hide');
                            fetch();
                        } else {
                            $('#success').html("");
                            $('#success').addClass('alert alert-danger');
                            $('#success').text(res.error);
                            $('#modal_delete_services').modal('hide');
                            fetch();
                        }
                    }
                });
            });

            $(document).on('click', '.edit_service', function(e) {
                e.preventDefault();
                let service_id = $(this).val();
                $("#modal_edit_servicesLabel").html('Edit Services');
                $('#modal_edit_services').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/dashboard/admin/service/" + service_id + "/edit",
                    success: function(response) {
                        if (response.status) {
                            $('#edit_name').val(response.service.name);
                            $('#edit_price').val(response.service.price);
                            $('#edit_id').val(service_id);
                        } else {
                            $('#success').html('');
                            $('#success').addClass('alert alert-danger');
                            $('#success').text(response.message);
                        }
                    }
                });
            });

            $(document).on('click', '.update_service', function(e) {
                e.preventDefault();

                let service_id = $("#edit_id").val();

                let data = {
                    'id': $('#edit_id').val(),
                    'name': $('#edit_name').val(),
                    'price': $('#edit_price').val(),
                };

                $.ajax({
                    type: 'PUT',
                    url: '/dashboard/admin/service/' + service_id,
                    data: data,
                    dataType: 'json',
                    success: function(res) {
                        if (res.status) {
                            $('#success').html('');
                            $('#success').addClass('alert alert-success');
                            $('#success').text(res.message);
                            $('#modal_edit_service').modal('hide');
                            fetch();
                        } else {
                            $('#errorEdit').html('');
                            $('#errorEdit').addClass('alert alert-danger');
                            $('#errorEdit').text(res.error);
                        }
                    }
                });
            });

            $(document).on('click', '.add_service', function(e) {
                e.preventDefault();
                var shoe = {
                    'name': $('.name').val(),
                    'price': $('.price').val(),
                };

                $.ajax({
                    type: "POST",
                    url: "{{ route('dashboard.admin.service.store') }}",
                    data: shoe,
                    dataType: "json",
                    success: function(response) {
                        if (response.status) {
                            $('#success').addClass('alert alert-success');
                            $('#success').text(response.message);
                            $('#modal_add_services').modal('hide');
                            fetch();
                        } else {
                            $('#errorAdd').addClass('alert alert-danger');
                            $('#errorAdd').text(response.error);
                        }
                    }
                });
            });
        });
    </script>
@endsection
