@extends('LayoutMaster.template_dashboard')
@section('content_dashboard')
    {{-- add-dog --}}
    
    {{-- @if ($errors->any())
        <div class="alert alert-danger">Du lieu khong hop le vui long nhap lai</div>
    @endif --}}
    <h1>Them cun cung</h1> <br>

    <form action="" method="post">
        {{-- <input type="number" placeholder="enter number" class="form-control" name="id"> <br> --}}
        <input type="text" placeholder="enter name" class="form-control" name="dogname">
       {{--  @error('namedog')
            <span style="color:red;">{{$message}} </span>
        @enderror --}}<br>

        <input type="text" placeholder="enter nquoc gia" class="form-control" name="quocgia">
       {{--  @error('quocgia')
            <span style="color:red;">{{$message}} </span>
        @enderror --}}<br>

        <input type="text" placeholder="enter do nguy hiem" class="form-control"name="dodanger">
        {{-- @error('dodanger')
        <span style="color:red;">{{$message}} </span>
        @enderror --}}<br>

        <input type="text" placeholder="enter do hoat dong" class="form-control"name="doactivity">
        {{-- @error('doactivity')
        <span style="color:red;">{{$message}} </span>
        @enderror --}}<br>

        <input type="text" placeholder="enter do sua" class="form-control"name="dosua">
        {{-- @error('dosua')
        <span style="color:red;">{{$message}} </span>
        @enderror --}}<br>

        <input type="text" placeholder="enter do thong minh" class="form-control"name="dosmart">
        {{-- @error('dosmart')
        <span style="color:red;">{{$message}} </span>
        @enderror --}}<br>

        <input type="text" placeholder="enter type long" class="form-control"name="typelong">
        {{-- @error('typelong')
        <span style="color:red;">{{$message}} </span>
        @enderror --}}<br>

        <input type="date" placeholder="enter number" class="form-control"name="date_at">
        {{-- @error('date_at')
        <span style="color:red;">{{$message}} </span>
        @enderror --}}<br>
        
        <button type="submit" class="btn btn-primary">Them Dog</button>
        <a href="{{route('all_category_dog')}} " class="btn btn-warning">Quai lai</a>
        @csrf
    </form>
@endsection
