@extends('Admin.layout.app')

@section('title','Add order')

@section('content')

<form method='post' action="" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputEmail4d">Order Name</label>
            <input type="text" name="name" class="form-control   is-invalid " id="inputEmail4d" value="">
        </div>

    </div>
    {{-- @error('name')
        <div class="alert alert-danger">  </div>
    @enderror --}}
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputPassword4">Custommer Name</label>
            <input type="text" name="code" class="form-control  is-invalid "
                id="inputPassword4" value="">
            {{-- @error('code')
                <div class="alert alert-danger">  </div>
            @enderror --}}
        </div>

        <div class="form-group col-md-4">
            <label for="inputAddress">Location</label>
            <input type="text" name="price" class="form-control  is-invalid"
                id="inputAddress" placeholder="eg." value="">
            {{-- @error('price')
                <div class="alert alert-danger"> </div>
            @enderror --}}
        </div>

        <div class="form-group col-md-4">
            <label for="inputAddress2">Quantity</label>
            <input type="number" name="catigory" class="form-control  is-invalid"
                id="inputAddress2" placeholder="ex meels , juice" value="">
            {{-- @error('quantity')
                <div class="alert alert-danger">  </div>
            @enderror --}}
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputStates">Status</label>
            <select name="status" id="inputStates" class="form-control  is-invalid">
                <option  value="1">Active</option>
                <option   value="0">Not Active</option>
            </select>
            {{-- @error('status')
                <div class="alert alert-danger"> {{ $message }} </div>
            @enderror --}}
        </div>

        <div class="form-group col-md-4">
            <label for="inputStateq">Price</label>
            <input type="number" name="price" class="form-control  is-invalid"
            id="inputAddress2" placeholder="ex meels , juice" value="">
            {{-- @error('subcategory_id')
                <div class="alert alert-danger"> {{ $message }} </div>
            @enderror --}}
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <textarea name="description" class="form-control  is-invalid " id="" cols="30"
                rows="10"></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputEmail4">Image</label>
            <input type="file" name="image" class="form-control  is-invalid " id="inputEmail4">
        </div>
        {{-- @error('image')
            <div class="alert alert-danger"> {{ $message }} </div>
        @enderror --}}
    </div>
    <button type="submit" class="btn btn-primary" name="add" value='add'>Add order</button>
{{-- <button type="submit" class="btn btn-outline-primary" name="add" value='add&new'>Add & New</button> --}}
</form>
@endsection
