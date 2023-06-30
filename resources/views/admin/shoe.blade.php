@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <!-- Add Shoes Modal -->
    <div class="modal fade" id="add_shoes_modal" tabindex="-1" role="dialog" aria-labelledby="add_shoes_modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_shoes_modalLabel">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="errorAdd"></div>
                    <div class="form-group mb-3">
                        <label for="user">User ID</label>
                        <select name="user" id="user" class="user_id form-control">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->username }} - {{ $user->name }}</option>
                            @endforeach
                        </select>
                        <label for="brand">Brand</label>
                        <input type="text" class="brand form-control" id="brand" value=""
                            required>
                        <label for="color">Color</label>
                        <input type="text" class="color form-control" id="color" value=""
                            required>
                        <label for="model">Model</label>
                        <input type="text" class="model form-control" id="model" value=""
                            required>
                        <label for="material">Material</label>
                        <input type="text" class="material form-control" id="material" value=""
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_shoes">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--End- Add Shoes Modal -->

    <!-- Edit Shoes Modal -->
    <div class="modal fade" id="modal_edit_shoes" tabindex="-1" role="dialog" aria-labelledby="modal_edit_shoesLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_edit_shoesLabel">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="closeModal('modal_edit_shoes')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="errorEdit"></div>
                    <div class="form-group mb-3">
                        <input type="hidden" id="edit_id">
                        <input type="hidden" id="edit_user_id">
                        <label for="brand">Brand</label>
                        <input type="text" class="brand form-control" id="edit_brand" value="" required>
                        <label for="color">Color</label>
                        <input type="text" class="color form-control" id="edit_color" value="" required>
                        <label for="model">Model</label>
                        <input type="text" class="model form-control" id="edit_model" value="" required>
                        <label for="material">Material</label>
                        <input type="text" class="material form-control" id="edit_material" value="" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="closeModal('modal_edit_shoes')">Close</button>
                    <button type="button" class="btn btn-primary update_shoe">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!--End- Edit Shoes Modal -->

    <!-- Delete Shoes Modal -->
    <div class="modal fade" id="modal_delete_shoes" tabindex="-1" role="dialog"
        aria-labelledby="modal_delete_shoesLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_delete_shoesLabel">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="closeModal('modal_delete_shoes')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="delete_id">
                    <h3>Are you sure you want to delete this data?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal"
                        onclick="closeModal('modal_delete_shoes')">Close</button>
                    <button type="button" class="btn btn-primary proceed_delete_shoe">Yes, delete</button>
                </div>
            </div>
        </div>
    </div>
    <!--End- Delete Shoes Modal -->

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div id="success" class="mt-2"></div>
                <div class="card">
                    <div class="card-header align-items-center">
                        <span><b>Shoes</b></span>
                        <span class="float-right"><button type="button" href="" class=" btn btn-primary"
                                data-toggle="modal" data-target="#add_shoes_modal">
                                + Add Shoes
                            </button> </span>
                    </div>
                    <div class="card-body">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Brand</th>
                                    <th>Color</th>
                                    <th>Material</th>
                                    <th>Model</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- handled by ajax --}}
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
            $("#" + idModal).modal("hide");
        }

        $(document).ready(function() {

            fetchShoes();


            function fetchShoes() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('dashboard.admin.fetchDataShoes') }}",
                    dataType: "json",
                    success: function(data) {
                        $('#add_shoes_modalLabel').html('Add Shoes');
                        $('tbody').html("");
                        $.each(data, function(key, item) {
                            $('tbody').append(`
                                <tr>
                                    <td>` + (key + 1) + `</td>
                                    <td>` + item.user + `</td>
                                    <td>` + item.shoe_brand + `</td>
                                    <td>` + item.shoe_color + `</td>
                                    <td>` + item.shoe_material + `</td>
                                    <td>` + item.shoe_model + `</td>
                                    <td>
                                            <button type="button" class="edit_shoe btn btn-primary btn-sm" value="` +
                                item.shoe_id + `">Edit</button>
                                            <button type="button" class="delete_shoe btn btn-danger btn-sm" value="` +
                                item.shoe_id + `">Delete</button>
                                    </td>
                                </tr>`);
                        });
                    }
                });
            }

            $(document).on('click', '.delete_shoe', function(e) {
                e.preventDefault();
                let shoe_id = $(this).val();
                $('#delete_id').val(shoe_id);
                $('#modal_delete_shoesLabel').text('Delete Warning!!!');
                $('#modal_delete_shoes').modal('show');
            });

            $(document).on('click', '.proceed_delete_shoe', function(e) {
                e.preventDefault();
                let shoe_id = $('#delete_id').val();

                $.ajax({
                    type: 'DELETE',
                    url: '/dashboard/admin/shoe/' + shoe_id,
                    success: function(res) {
                        if (res.status) {
                            $('#success').html("");
                            $('#success').addClass('alert alert-success');
                            $('#success').text(res.message);
                            $('#modal_delete_shoes').modal('hide');
                            fetchShoes();
                        } else {
                            $('#success').html("");
                            $('#success').addClass('alert alert-danger');
                            $('#success').text(res.error);
                            $('#modal_delete_shoes').modal('hide');
                            fetchShoes();
                        }
                    }
                });
            });

            $(document).on('click', '.edit_shoe', function(e) {
                e.preventDefault();
                let shoe_id = $(this).val();
                $("#modal_edit_shoesLabel").html('Edit Shoes');
                $('#modal_edit_shoes').modal('show');
                var editUrl = "/dashboard/admin/shoe/"+shoe_id+"/edit";
                $.ajax({
                    type: "GET",
                    url: editUrl,
                    success: function(response) {
                        if (response.status) {
                            $('#edit_brand').val(response.shoe.brand);
                            $('#edit_color').val(response.shoe.color);
                            $('#edit_material').val(response.shoe.material);
                            $('#edit_model').val(response.shoe.model);
                            $('#edit_id').val(shoe_id);
                            $('#edit_user_id').val(response.shoe.user_id);
                        } else {
                            $('#success').html('');
                            $('#success').addClass('alert alert-danger');
                            $('#success').text(response.message);
                        }
                    }
                });
            });

            $(document).on('click', '.update_shoe', function(e) {
                e.preventDefault();

                let shoe_id = $("#edit_id").val();

                let shoes = {
                    'user_id': $('#edit_user_id').val(),
                    'id': $('#edit_id').val(),
                    'brand': $('#edit_brand').val(),
                    'model': $('#edit_model').val(),
                    'material': $('#edit_material').val(),
                    'color': $('#edit_color').val(),
                };

                $.ajax({
                    type: 'PUT',
                    url: '/dashboard/admin/shoe/' + shoe_id,
                    data: shoes,
                    dataType: 'json',
                    success: function(res) {
                        if (res.status) {
                            $('#success').html('');
                            $('#success').addClass('alert alert-success');
                            $('#success').text(res.message);
                            $('#modal_edit_shoes').modal('hide');
                            fetchShoes();
                        } else {
                            $('#errorEdit').html('');
                            $('#errorEdit').addClass('alert alert-danger');
                            $('#errorEdit').text(res.error);
                        }
                    }
                });
            });

            $(document).on('click', '.add_shoes', function(e) {
                e.preventDefault();
                var shoe = {
                    'user_id': $('.user_id').val(),
                    'brand': $('.brand').val(),
                    'color': $('.color').val(),
                    'model': $('.model').val(),
                    'material': $('.material').val(),
                };

                $.ajax({
                    type: "POST",
                    url: "{{ route('dashboard.admin.shoe.store') }}",
                    data: shoe,
                    dataType: "json",
                    success: function(response) {
                        if (response.status) {
                            $('#success').addClass('alert alert-success');
                            $('#success').text(response.message);
                            closeModal("add_shoes_modal");
                            fetchShoes();
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
