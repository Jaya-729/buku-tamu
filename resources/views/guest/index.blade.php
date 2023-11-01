@extends('layouts.main')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama tamu</th>
        <th scope="col">Tanggal Checkin</th>
        <th scope="col">Tanggal Checkout</th>
        <th scope="col">Petugas Checkin</th>
        <th scope="col">Petugas Checkout</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($guests as $guest)
      <tr>
       <th scope="row">{{ $loop->iteration }}</th> {{--  di isi dengan nomor urut --}}
         <td>{{ $guest->nama_tamu }}</td> {{--diisi dengan nama tamu --}}
         <td>{{ $guest->tanggal_checkin }}</td> {{--di isi dengan tanggal checkin --}}
        <td>
          @if ($guest->tanggal_checkout != null)
              {{ $guest->tanggal_checkout }} 
              {{-- jika tanggal checkout tidak kosong maka tampikan tanggal checkout --}}
          @else
            <a href="/checkout" class="btn btn-sm btn-outline-success">Checkout</a>
            {{-- jika tanggal checkout kosong --}}
          @endif
        </td>{{-- di isi dengan tanggal checout --}}
        <td></td> {{-- di isi dengan petugas checkin --}}
        <td></td>{{-- di isi dengan petugas checkout --}}
        <td>
          @if ($guest->tanggal_checkout != null)
              Kunjungan selesai 
              {{-- jika tanggal checkout tidak kosong maka tampikan tanggal checkout --}}
          @else
            Tamu sedang berkunjung
            {{-- jika tanggal checkout kosong --}}
          @endif
        </td>{{-- di isi dengan status tamu --}}
        <td>
          <a href="/detail" class="btn btn-sm btn-outline-success">Details</a>
        </td>{{-- di isi dengan button detail / tombol detail --}}
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection