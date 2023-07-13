<?php

namespace App\Http\Controllers;

use App\Helper\RedirectHelper;
use App\Models\Tag;
use App\Models\Technology;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create() {
//        select('amount')->where('user_id', auth()->id())->where('status','accepted')->get()
//        $data['datas'] = Tag::where('user_id', auth()->id())->get();
        $data['datas'] = Tag::orderby('id', 'desc')->get();
//        return $datas;
        return view('admin.industry.tag', $data);
    }


    public function store(Request $request) {
//        return auth()->id();
        $message = '<strong>Congratulations!!!</strong> Tag Successfully ';
        if ($request->has('id')) {
            $tag = Tag::find($request->id);

            $rules['name'] = 'required|string|unique:' . with(new Tag())->getTable() . ',name,' . $request->id;
            $rules['status'] = 'required|string';
            $message = $message . ' updated';
        } else {
            $tag = new Tag();

            $rules['name'] = 'required|string|unique:' . with(new Tag)->getTable() . ',name';
            $rules['status'] = 'required|string';
            $message = $message . ' created';
        }
        $request->validate($rules);
        try {
            $tag->name = $request->name;
            $tag->status = $request->status;
            // return $tag;
            if ($tag->save()) {
                return RedirectHelper::routeSuccess('admin.tag.create', $message);
            }
            return RedirectHelper::backWithInput();
        } catch (QueryException $e) {
//            return $e;
            return RedirectHelper::backWithInputFromException();
        }

    }


    public function destroy(Request $request) {
        $id = $request->post('id');
        try {
            $technology = Tag::find($id);
            if ($technology->delete()) {
                return 'success';
            }
        } catch (\Exception $e) {
        }
    }

    public function ajaxUpdateStatus(Request $request) {
        if ($request->isMethod("POST")) {
            $id = $request->post('id');
            $postStatus = $request->post('status');
            $status = strtolower($postStatus);
            $technology = Tag::find($id);
            if ($technology->update(['status' => $status])) {
                return "success";
            }
        }
    }
}
