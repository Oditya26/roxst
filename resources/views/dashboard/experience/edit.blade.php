@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('experience.index')}}" class="btn btn-secondary"><< Back</a></div>
    <form action="{{route('experience.update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-4">
            <label for="tittle" class="form-label">Image Name</label>
            <input
                type="text"
                class="form-control"
                name="tittle"
                id="tittle"
                aria-describedby="helpId"
                placeholder="Image Name"
                value="{{$data->judul}}"
            />
        </div>
        <div class="mb-4">
            <label for="tittle" class="form-label">Project Name</label>
            <input
                type="text"
                class="form-control"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Project Name"
                value="{{$data->info1}}"
            />
        </div>
        <div class="mb-4">
            <div class="row">
                <div class="col-auto">Date Start</div>
                <div class="col-auto">
                    <input type="date"
                    class="form-control form-control-sm"
                    name="tgl_mulai"
                    placeholder="dd/mm/yyyy"
                    value="{{$data->tgl_mulai}}">
                </div>
                <div class="col-auto">Date End</div>
                <div class="col-auto">
                    <input type="date"
                    class="form-control form-control-sm"
                    name="tgl_akhir"
                    placeholder="dd/mm/yyyy"
                    value="{{$data->tgl_akhir}}">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Description</label>
            <textarea class="form-control summernote" id="content" rows="5" name="content">
            {{$data->info2}}
            </textarea>
        </div>
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        
    </form>
    
@endsection