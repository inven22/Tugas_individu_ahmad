@extends('layouts.tem')
<title>Data Barang</title>
@section('content')    
<h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
<br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-3">
                        <div class="card-header py-2">
                            <a href="{{ route('barang.add') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
                        <br>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0%">
                                    <thead>
                                        <tr>
<th>No</th>
<th>ID Brang</th>
<th>Nama Barang</th>
<th>Satuan</th> 
<th>Harga Satuan</th> 
<th>Stok</th> 
<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @if($sa->count() > 0)
                @foreach($sa as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->KodeBarang }}</td>
                        <td class="align-middle">{{ $rs->NamaBarang }}</td>
                        <td class="align-middle">{{ $rs->Satuan }}</td>
                        <td class="align-middle">Rp.{{ $rs->HargaSatuan }}</td>
                        <td class="align-middle">{{ $rs->Stok }} barang</td>
                     
                       
                      
                   
                        <td class="align-middle">
                                  
                
                                    <a href="{{ route('barang.edit', $rs->KodeBarang) }}" class="btn btn-sm btn-success">Edit data</a>
                                    <a href="{{ URL::to('delete/'.$rs->KodeBarang) }}" class="btn btn-sm btn-danger" id="delete" class="middle-align">Delete</a>
                                    
                                </td>
                     
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