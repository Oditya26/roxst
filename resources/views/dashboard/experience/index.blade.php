@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Portofolio</p>
    <div class="pd-3"><a href="{{route('experience.create')}}" class="btn btn-primary">+ Add Portofolio</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Image Name</th>
                    <th>Project Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->info1}}</td>
                    <td>{{$item->tgl_mulai_indo}}</td>
                    <td>{{$item->tgl_akhir_indo}}</td>
                    <td>
                        <a href="{{route('experience.edit', $item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <form onsubmit="return confirm('Do you sure want to delete data?')" action="{{route('experience.destroy',$item->id)}}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
    </div>   
@endsection
