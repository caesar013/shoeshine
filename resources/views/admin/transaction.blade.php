@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div id="success"></div>
    <div class="container-fluid mt-3">
        <div class="table-responsive">
            <div>
                <table class="table align-items-center table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort">No.</th>
                            <th scope="col" class="sort">User</th>
                            <th scope="col" class="sort">Arrived</th>
                            <th scope="col" class="sort">Shoe</th>
                            <th scope="col" class="sort">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- handled by ajax - fetch() --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Show Transaction Modal -->
    <div class="modal fade" id="modal_show_transaction" tabindex="-1" role="dialog"
        aria-labelledby="modal_show_transactionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_show_transactionLabel">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="closeModal('modal_show_transaction')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"
                        onclick="closeModal('modal_show_transaction')">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!--End- Show Transaction Modal -->

    {{-- Edit Transaction Modal --}}
    <div class="modal fade" id="modal_edit_transaction" tabindex="-1" role="dialog"
        aria-labelledby="modal_show_transactionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_edit_transactionLabel">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="closeModal('modal_edit_transaction')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="errorEdit"></div>
                    <div class="form-group mb-3">
                        <input type="hidden" id="edit_id">
                        <label for="edit_status_id">Status</label>
                        <select name="status" id="edit_status_id" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary update_transaction" data-dismiss="modal"
                        onclick="closeModal('modal_edit_transaction')">OK</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End- Edit Transaction Modal --}}
@endsection

@section('js')
    <script>
        function closeModal(idModal) {
            $('#' + idModal).modal('hide');
        }

        $(document).ready(function() {

            fetch();

            function fetch() {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('dashboard.admin.fetchDataTransactions') }}",
                    dataType: 'json',
                    success: function(data) {
                        if (!data) {
                            $('tbody').html('');
                            $("tbody").append(`
                            <tr>
                                <td colspan="5" class="text-center">Data tidak ada</td>
                            </tr>
                            `);

                        } else {
                            $('tbody').html('');
                            $.each(data, function(foo, bar) {
                                $("tbody").append(`
                                <tr>
                                    <td>` + (foo + 1) + `</td>
                                    <td>` + bar.user + `</td>
                                    <td>` + bar.tanggal + `</td>
                                    <td>` + bar.shoe + `</td>
                                    <td>` + bar.status + `</td>
                                    <td>
                                        <button type="button" class="btn btn-info info_btn"
                                           data-transaction_id="` + bar.transaction_id + `" data-order_id="` + bar
                                    .order_id + `"><i class="ni ni-tablet-button"></i> Show</button>
                                        <button type="button" class="btn btn-primary edit_transaction"
                                           data-transaction_id="` + bar.transaction_id + `" data-order_id="` + bar
                                    .order_id + `"><i class="ni ni-tablet-button"></i> Edit</button>
                                </tr>
                                `);
                            });
                        }
                    }
                });
            }

            $(document).on('click', '.info_btn', function(e) {
                e.preventDefault();
                var order_id = $(this).attr('data-order_id');
                $.ajax({
                    type: "GET",
                    url: "/dashboard/transaction/orderData/" + order_id,
                    dataType: "json",
                    success: function(data) {
                        $('#modal_show_transactionLabel').text('Detail Transaction');
                        $('.modal-body').html('');
                        $('.modal-body').append(
                            `
                            <div>
                            <label for=""><strong>Shoe</strong></label><br>
                            <span>` + data.shoe + `</span>
                            </div>
                            <br><br>
                            <div>
                            <label for=""><strong>Service</strong></label><br>
                            <span>` + data.service + `</span>
                            </div>
                            `
                        );
                        $('#modal_show_transaction').modal('show');
                    }
                });
            });

            $(document).on('click', '.edit_transaction', function(e) {
                e.preventDefault();
                var transaction_id = $(this).attr('data-transaction_id');
                var order_id = $(this).attr('data-order_id');
                $('#modal_edit_transactionLabel').html('Edit Transaction');
                $('#modal_edit_transaction').modal('show');
                $.ajax({
                    type: 'GET',
                    url: '/dashboard/admin/transaction/' + transaction_id + '/edit',
                    dataType: "json",
                    success: function(response) {
                        if (response.status) {
                            $.each(response.status_choices, function(foo, bar) {
                                $('#edit_status_id').append(`<option value="` + bar.id +
                                    `">` + bar.name + `</option>`);
                            })
                            $('#edit_id').val(transaction_id);
                            $('#edit_status_id').val(response.status_id);
                        } else {
                            $('#errorEdit').html('');
                            $('#errorEdit').addClass('alert alert-danger');
                            $('#errorEdit').text(response.error);
                        }
                    }
                });
            });

            $(document).on('click', '.update_transaction', function(e) {
                e.preventDefault();
                var transaction_id = $('#edit_id').val();
                var status_id = $('#edit_status_id').val();
                var data_trans = {
                    'status_id': status_id,
                    'transaction_id': transaction_id
                };
                $.ajax({
                    type: 'PUT',
                    url: '/dashboard/admin/transaction/'+transaction_id,
                    data: data_trans,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status) {
                            $('#success').html('');
                            $('#success').addClass('alert alert-success');
                            $('#success').text(response.message);
                            $('#modal_edit_shoes').modal('hide');
                            fetch();
                        } else {
                            $('#sucess').html('');
                            $('#sucess').addClass('alert alert-danger');
                            $('#sucess').text(response.error);
                        }
                    }
                });
            });
        });
    </script>
@endsection
