<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
                                <form action="' . route('delete-blog', $data->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <a href="' . url('blog/edit/' . $data->id) . '" ><i class="ik ik-edit-2 f-16 mr-15 text-green"></i></a>
                                    <button type="submit" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                                        <i class="ik ik-trash-2 f-16 text-red"></i>
                                    </button>
                                </form>
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
            return view('pages.cms.blogs.create');
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'     => 'required | string ',
            'content'  => 'required | string ',
            'category'  => 'required | string ',
            'image_url'  => 'string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        try {
            if ($request->file('image_url') != null) {
                $blog = Blog::create([
                    'title'     => $request->title,
                    'content'   => $request->content,
                    'category'  => $request->category,
                    'image_url' => $request->file('image_url')->store('assets/blog/image', 'public'),
                    'slug'      => Str::slug($request->title)
                ]);
            } else {
                $blog = Blog::create([
                    'title'     => $request->title,
                    'content'   => $request->content,
                    'category'  => $request->category,
                    'slug'      => Str::slug($request->title)
                ]);
            }

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

    public function edit($id)
    {
        try {
            $blog = Blog::find($id);
            if ($blog) {
                return view('pages.cms.blogs.edit', compact('blog'));
            } else {
                return redirect('blogs')->with('error', 'Blog not found!');
            }
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'     => 'required | string ',
            'content'  => 'required | string ',
            'category'  => 'required | string ',
            'image_url'  => 'string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        try {
            $blog = Blog::find($id);
            if ($blog) {
                if ($request->file('image_url') != null) {
                    $blog->update([
                        'title'     => $request->title,
                        'content'   => $request->content,
                        'category'  => $request->category,
                        'image_url' => $request->file('image_url')->store('assets/blog/image', 'public'),
                        'slug'      => Str::slug($request->title)
                    ]);
                } else {
                    $blog->update([
                        'title'     => $request->title,
                        'content'   => $request->content,
                        'category'  => $request->category,
                        'slug'      => Str::slug($request->title)
                    ]);
                }

                return redirect('blogs')->with('success', 'Blog updated!');
            } else {
                return redirect('blogs')->with('error', 'Failed to update blog! Try again.');
            }
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function delete($id)
    {
        try {
            $blog = Blog::find($id);
            if ($blog) {
                $blog->delete();
                return redirect('blogs')->with('success', 'Blog deleted!');
            } else {
                return redirect('blogs')->with('error', 'Failed to delete blog! Try again.');
            }
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }
}
