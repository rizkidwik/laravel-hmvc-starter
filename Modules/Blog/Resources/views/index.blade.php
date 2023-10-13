@extends('layout::layouts.layout')

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-bordered data-table">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Name</th>

                    <th>Email</th>

                    <th width="100px">Action</th>

                </tr>

            </thead>

            <tbody>

            </tbody>

        </table>
    </div>
</div>

@endsection

@push('after-script')
    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('blog.table') }}",
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'id',
                        searchable: false,
                        orderable:false,
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endpush
