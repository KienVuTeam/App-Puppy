<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* use */
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryDog extends Controller
{
    //
    public function add_category_dog(){
        $title='trang them dog';
        return view('Dashboard.add_category_dog', compact('title'));
    }

    public function all_category_dog(){
        $title='trang hien thi Dog';
        $all_category_dog = DB::table('category_dog')->get();
        $maneger_category_dog = view('Dashboard.all_category_dog', compact('title'))->with('all_category_dog', $all_category_dog);
        return $maneger_category_dog;/* view('Dashboard.all_category_dog')->with('Dashboard.all_category_dog', $maneger_category_dog); */
    }

    public function post_category_dog(Request $request){
        $data =array();
        /* $data['id']= $request->id; */
        $data['dogname']=$request->dogname;
        $data['quocgia']=$request->quocgia;
        $data['dodanger']=$request->dodanger;
        $data['doactivity']=$request->doactivity;
        $data['dosua']=$request->dosua;
        $data['dosmart']=$request->dosmart;
        $data['typelong']=$request->typelong;
        $data['create_at']=$request->create_at;

        /* echo'<pre>';
        print_r($data);
        echo '</pre>'; */
        DB::table('category_dog')->insert($data);
        /* Session::put('msg','Them danh muc Dog thanh cong!'); */
        return Redirect()->route('all_category_dog')->with('msg', 'Them danh muc Dog!');
    }
/* active & non active */
        public function active_category_dog($cate_id){
            DB::table('category_dog')->where('id', $cate_id)->update(['category_status'=>0]);
            return Redirect()->route('all_category_dog')->with('msg', 'Thay doi trang thai active thanh cong');
        }

        public function unactive_category_dog($cate_id){
            DB::table('category_dog')->where('id', $cate_id)->update(['category_status'=>1]);
            return Redirect()->route('all_category_dog')->with('msg', 'Thay doi trang thai unactive thanh cong!');
        }
/* end! */
}
