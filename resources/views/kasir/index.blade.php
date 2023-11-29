@extends('layouts.tem')
<title>Kasir</title>
@section('content')
    <h1 class="h3 mb-2 text-gray-800">List Kasir</h1>
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
                            <th>ID Kasir</th>
                            <th>Nama kasir</th>
                            <th>Hp</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @if ($sa->count() > 0)
                            @foreach ($sa as $rs)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $rs->KodeKasir }}</td>
                                    <td class="align-middle">{{ $rs->Nama }}</td>
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
