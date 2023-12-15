<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.cms.blogs.index');
    }

    public function getBlogList(Request $request)
    {
        $data = Blog::get();

        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                if (Auth::user()->can('manage_content')) {
                    return '<div class="table-actions">
                                    <a href="' . url('blog/' . $data->id) . '" ><i class="ik ik-edit-2 f-16 mr-15 text-green"></i></a>
                                    <a href="' . url('blog/delete/' . $data->id) . '"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                </div>';
                } else {
                    return '';
                }
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        try {
            $roles = Role::pluck('name', 'id');
            return view('pages.cms.blogs.create', compact('roles'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function store(Request $request)
    {
        // create blog
        $validator = Validator::make($request->all(), [
            'title'     => 'required | string ',
            'content'  => 'required | string ',
            'category'  => 'required | string ',
            'image_url'  => 'string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
        try {
            // store blog
            $blog = Blog::create([
                'title'     => $request->title,
                'content'  => $request->content,
                'category'  => $request->category,
                'image_url'    => $request->image_url
            ]);

            if ($blog) {
                return redirect('blogs')->with('success', 'New blog created!');
            } else {
                return redirect('blogs')->with('error', 'Failed to create new blog! Try again.');
            }
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }
}
