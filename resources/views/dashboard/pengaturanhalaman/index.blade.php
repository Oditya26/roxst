@extends('dashboard.layout')

@section('konten')
    <form action="{{route('pengaturanhalaman.update')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2">About</label>
            <div class="col-sm-6">
                <select class="form-select form-select-sm mb-3" name="_halaman_about">
                    <option selected>-Choose-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_halaman_about')==$item->id?'selected':' '}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Service 1</label>
            <div class="col-sm-6">
                <select class="form-select form-select-sm mb-3" name="_service_1">
                    <option selected>-Choose-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_service_1')==$item->id?'selected':' '}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Service 2</label>
            <div class="col-sm-6">
                <select class="form-select form-select-sm mb-3" name="_service_2">
                    <option selected>-Choose-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_service_2')==$item->id?'selected':' '}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Service 3</label>
            <div class="col-sm-6">
                <select class="form-select form-select-sm mb-3" name="_service_3">
                    <option selected>-Choose-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_service_3')==$item->id?'selected':' '}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Step 1</label>
            <div class="col-sm-6">
                <select class="form-select form-select-sm mb-3" name="_step_1">
                    <option selected>-Choose-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_step_1')==$item->id?'selected':' '}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Step 2</label>
            <div class="col-sm-6">
                <select class="form-select form-select-sm mb-3" name="_step_2">
                    <option selected>-Choose-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_step_2')==$item->id?'selected':' '}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Step 3</label>
            <div class="col-sm-6">
                <select class="form-select form-select-sm mb-3" name="_step_3">
                    <option selected>-Choose-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_step_3')==$item->id?'selected':' '}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Step 4</label>
            <div class="col-sm-6">
                <select class="form-select form-select-sm mb-3" name="_step_4">
                    <option selected>-Choose-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_step_4')==$item->id?'selected':' '}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Step 5</label>
            <div class="col-sm-6">
                <select class="form-select form-select-sm mb-3" name="_step_5">
                    <option selected>-Choose-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_step_5')==$item->id?'selected':' '}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Step 6</label>
            <div class="col-sm-6">
                <select class="form-select form-select-sm mb-3" name="_step_6">
                    <option selected>-Choose-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_step_6')==$item->id?'selected':' '}}>{{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        
    </form>
    
@endsection
