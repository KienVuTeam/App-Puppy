@extends('LayoutMaster.template_dashboard')
@section('content_dashboard')
        {{-- dog  --}}
        <style>
            h1{
                border-bottom:2px solid #000;
            }
            .mydown{
                color:red;
                font-size: 1.5em;
            }
            .myup{
                color:rgb(56, 220, 62);
            }
            /* th,td{
                border: 2px solid #000;
            } */
        </style>
        
       {{--  @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}} </div>
        @endif --}}
        <h1>Danh sach Dog</h1> <hr>

        <br>
        <a href="{{route('add_category_dog')}}  " class="btn btn-primary">Them cun cung</a>

        @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}} </div>
        @endif
        <table class="table table-bodered">
            <thead>
                <tr>
                    <th width="5%">Stt</th>
                    <th>Ten Dog</th>
                    <th>Quocgia</th>
                    <th>Do nguy hiem</th>
                    <th>Do hoat dong</th>
                    <th>Do sua</th>
                    <th>Do thong minh</th>
                    <th>Loai long</th>
                    <th>Trang thai </th>
                    <th>Ngay post</th>
                    <th width="5%">Sua</th>
                    {{-- <th width="5%">Xoa</th> --}}

                </tr>
            </thead>
            <tbody>
                @if (!empty($all_category_dog))
                    @foreach ($all_category_dog as $key=>$val)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$val->dogname}} </td>
                        <td>{{$val->quocgia}} </td>
                        <td>{{$val->dodanger}}</td>
                        <td>{{$val->doactivity}} </td>
                        <td>{{$val->dosua}} </td>
                        <td>{{$val->dosmart}} </td>
                        <td>{{$val->typelong}} </td>
                        {{--  echo '<a href="#"><i class="fa fa-thumbs-up"></i> </a>'; --}}
                        {{-- echo '<a href="#"> <i class="fa fa-thumbs-down"></i> </a>';  --}}
                        <td>{{-- 0:on 
                              -- 1:off  --}}
                            <?php
                            if($val->category_status == 0){
                            ?>   
                                <a href="{{route('unactive_category_dog',['cate_id'=>$val->id])}}  {{-- {{URL::to('/active_category_dog/'.$val->id)}} --}} "><i class="fa fa-thumbs-up myup"></i> </a>
                            <?php
                            }else{
                            ?>
                                <a href="{{route('active_category_dog',['cate_id'=>$val->id])}}"> <i class="fa fa-thumbs-down mydown"></i> </a>
                            <?php
                            }    
                            ?>
                        </td>
                        <td>{{$val->create_at}} </td>
                        <td>
                            <a href="{{-- {{route('getEdit', ['id'=>$val->id])}} --}} " {{-- class="btn btn-warning btn-sm" --}}> <i class="fa fa-pencil-square-o text-success text-activite"></i> <i class="fa fa-times text-danger text"></i></a>
                            {{-- <a onclick = "return confirm ('Ban co chac chan muon xoa?')" href="{{route('delete',['id'=>$val->id])}} " class="btn btn-danger btn-sm">Xoa</a> --}}
                        </td>
                        
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <td>Khong co du lieu</td>
                        </tr>
                    @endif 
        </table>
            
@endsection
