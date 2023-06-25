@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt-3">
        <div class="table-responsive">
            <div>
                <table class="table align-items-center table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort">No.</th>
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

    <!-- Show Order Modal -->
    <div class="modal fade" id="modal_show_order" tabindex="-1" role="dialog" aria-labelledby="modal_show_orderLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_show_orderLabel">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="closeModal('modal_show_order')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content_modal">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="closeModal('modal_show_order')">Close</button>
                    <button type="button" class="btn btn-primary proceed_delete_shoe">Yes, delete</button>
                </div>
            </div>
        </div>
    </div>
    <!--End- Show Order Modal -->
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
                    url: "{{ route('dashboard.fetchDataTransactions') }}",
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
                                    <td>` + bar.tanggal + `</td>
                                    <td>` + bar.shoe + `</td>
                                    <td>` + bar.status + `</td>
                                    <td>
                                        <button type="button" class="btn btn-info info_btn"
                                           data-transaction_id="`+bar.transaction_id+`" data-order_id="`+bar.order_id+`"><i class="ni ni-tablet-button"></i> Show</button>
                                    </td>
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
                var transaction_id = $(this).attr('data-transaction_id');
                $.ajax({
                    type: "GET",
                    url: "/dashboard/transaction/orderData/" + transaction_id + "/" + order_id,
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        $('#modal_show_orderLabel').text('Detail Order');
                        $('.content_modal').html('');
                        // $('.content_modal').append(
                        //     `
                        //     <label for="">Shoe</label>
                        //     <span>`+bar.shoe+`</span>
                        //     <label for="">Service</label>
                        //     <span></span>
                        //     <label for="">Price</label>
                        //     <span></span>
                        //     `
                        // );
                    }
                });
            });
        });
    </script>
@endsection
