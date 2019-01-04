@extends('admin.master.app')

@section('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
@stop

@section('content')
    <div class="container">
        <h1 class="text-center">HDTuto - Laravel DataTables Tutorial Example</h1>
        <table class="table table-bordered" id="users-table">
            <thead>
                <tr>
                    <th>SlNo</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th>Updated At</th>

                </tr>

            </thead>

        </table>

    </div>
@stop
@section('scripts')

    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" defer></script>

    <script src="//cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js" defer></script>
    <script>

jQuery(function() {

        jQuery('#users-table').DataTable({

            processing: true,

            serverSide: true,

            ajax: '{!! route('get.posts') !!}',

            columns: [

                { data: 'id', name: 'id' },

                { data: 'name', name: 'name' },

                { data: 'email', name: 'email' },

                { data: 'created_at', name: 'created_at' },

                { data: 'updated_at', name: 'updated_at' }

            ]

        });

    });

    </script>
    @stop