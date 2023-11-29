@extends('layouts.tem')
<title>Tenan</title>
@section('content')
    <h1 class="h3 mb-2 text-gray-800">List Tenan</h1>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-3">
        <div class="card-header py-2">

            <br>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Tenan</th>
                            <th>Nama Tenan</th>
                            <th>Hp</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @if ($sa->count() > 0)
                            @foreach ($sa as $rs)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $rs->KodeTenan }}</td>
                                    <td class="align-middle">{{ $rs->NamaTenan }}</td>
                                    <td class="align-middle">{{ $rs->HP }}</td>


                                </tr>
                            @endforeach
                        @else
                        @endif


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
