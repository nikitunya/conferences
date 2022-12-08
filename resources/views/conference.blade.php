@extends('dashboard')

@section('content')
    <div class="w-100">
        <h2 class="mt-3">Conference Management</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Conference Management</li>
            </ol>
        </nav>
        <div class="mt-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-md-6">Conference Management</div>
                        <div class="col col-md-6">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="conference_table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Address</th>
                                <th>Participants</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        {{--var table = $('conference_table').DataTable({--}}
        {{--   processing:true,--}}
        {{--   serverSide:true,--}}
        {{--   ajax:'{{route("conference.fetch_all")}}',--}}
        {{--    columns:[--}}
        {{--        {--}}
        {{--            data: 'title',--}}
        {{--            name: 'title'--}}
        {{--        },--}}
        {{--        {--}}
        {{--            data: 'description',--}}
        {{--            name: 'description'--}}
        {{--        },--}}
        {{--        {--}}
        {{--            data: 'conference_date',--}}
        {{--            name: 'conference_date'--}}
        {{--        },--}}
        {{--        {--}}
        {{--            data: 'address',--}}
        {{--            name: 'address'--}}
        {{--        },--}}
        {{--        {--}}
        {{--            data: 'participants',--}}
        {{--            name: 'participants'--}}
        {{--        },--}}
        {{--        {--}}
        {{--            data: 'action',--}}
        {{--            name: 'action',--}}
        {{--            orderable: false--}}
        {{--        }--}}
        {{--    ]--}}
        {{--});--}}
    </script>
@stop
