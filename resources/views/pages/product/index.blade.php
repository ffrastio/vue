@extends('layouts.default')

@section('title', 'Product Page')

@section('content')
    <div class="container-fluid orders ">
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Barang</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Peminjaman</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->type }}</td>
                                            <td>@currency($item->price)</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>
                                                @if ($item->is_loan == false)
                                                    Bisa
                                                @else
                                                    Tidak Bisa
                                                @endif
                                            </td>
                                            <td>
                                                {{-- <a href="{{ route('product.gallery', $item->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fa fa-picture-o"></i>
                                                </a> --}}
                                                <a href="{{ route('product.edit', $item->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('product.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center p-5">Data barang belum tersedia</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
