<?php

namespace App\Http\Controllers;

use App\Models\SiteReview;
use Illuminate\Http\Request;

class ReviewAdminAll extends Controller
{
    public function index($id = null)
    {
        $data['admindata'] = SiteReview::get();

        return view('admin.sitereview.list', $data);
    }
}
