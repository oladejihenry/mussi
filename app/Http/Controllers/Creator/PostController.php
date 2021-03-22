<?php

namespace App\Http\Controllers\Creator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Auth;
use Image;
use Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ='All Post';
        $post = Auth::user()->post()->latest()->paginate(15);
        $category = Category::all();
        $pcount = Post::count();
        return view('creator.all-post', ['title'=>$title,'post'=>$post, 'category' => $category, 'pcount' => $pcount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all();
        $title = "Add New Post";
        return view('creator.create', compact('title'))->with(['cat' => $cat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:10',
            'body' => 'required|min:20',
            'category' => 'required',
        ]);

        $cover = $request->file('image');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getClientOriginalName(),  File::get($cover));

        $postc=auth()->user()->post()->create($request->all());
        $postc->category()->attach($request->category);

        
        $postc->image = $cover->getClientOriginalName();
        $postc->save();

        return redirect('/creator/all-posts')->with('success','Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->id == Post::find($id)->user->id)
        {
            $post = Post::findorFail($id);
            $title = "Edit Post";
            return view('creator.edit', compact('post', 'title'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findorFail($id);

        

        $user = auth()->user();
        $oldPicture = $user->image;

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->price = $request->input('price');
        $post->youtube = $request->input('youtube');
        $post->phone_number = $request->input('phone_number');
      
        

        $post->update($request->all());

        Storage::disk('public')->delete($oldPicture);

     

        return redirect('/creator/all-posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorFail($id);
        $post->delete();
        return redirect('/creator/all-posts');
    }

    public function trashed()
    {
        $post = Post::onlyTrashed()->paginate(15);
        $title = 'Trashed Bin';
        return view ('creator.post-bin', compact('title'))->with('post',$post);
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        return redirect('/creator/contents-bin');
    }

    Public function delete($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->forceDelete();

        return redirect('/creator/contents-bin');
    }

    private function storeImage($post)
    {
        if (request()->has('image')){
            $original = request()->file('image')->getClientOriginalName();

            $post->update([
                'image' => request()->file('image')->storeAs('uploads', $original),
            ]);

            $image = Image::make(request()->file('image'));
            Storage::disk('public')->put('uploads', $image->stream(), 'public');
            $image = Storage::disk('public')->temporaryUrl("uploads", Carbon::now()->addMinutes(5));
            $image = 'http://localhost/images';
        }
    }
}
