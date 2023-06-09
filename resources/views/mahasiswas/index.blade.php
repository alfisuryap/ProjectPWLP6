@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div><br>

                <form class="form-left my-2" method="get" action="{{ route('search') }}">
                        <div class="form-group w-70 mb-3">
                            <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Nama">
                            <button type="submit" class="btn btn-primary mb-1">Search</button>
                            <a class="btn btn-success right" href="{{ route('mahasiswas.create') }}" style="margin-left:8cm"> Input Mahasiswa</a>
                        </div>
                </form>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        
        <table class="table table-bordered">
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>No Handphone</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($mahasiswas as $Mahasiswa)
            <tr>
        
                <td>{{ $Mahasiswa->Nim }}</td>
                <td>{{ $Mahasiswa->Nama }}</td>
                <td><img width="100px" src="{{asset('storage/'.$Mahasiswa->Foto)}}"></td>
                <td>{{ $Mahasiswa->Kelas->nama_kelas }}</td>
                <td>{{ $Mahasiswa->Jurusan }}</td>
                <td>{{ $Mahasiswa->No_Handphone }}</td>
                <td>{{ $Mahasiswa->Email }}</td>
                <td>{{ $Mahasiswa->Tanggal_Lahir }}</td>
                <td>
                <form action="{{ route('mahasiswas.destroy',$Mahasiswa->Nim) }}" method="POST">
        
                    <a class="btn btn-info" href="{{ route('mahasiswas.show',$Mahasiswa->Nim) }}">Show</a>
                    
                    <a class="btn btn-primary" href="{{ route('mahasiswas.edit',$Mahasiswa->Nim) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>

                    <a class="btn btn-warning" href="{{ route('nilai',$Mahasiswa->Nim) }}">Nilai</a>
                </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $mahasiswas->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>

@endsection