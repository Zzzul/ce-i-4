<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Posts;
use Hermawan\DataTables\DataTable;

class PostController extends BaseController
{
    protected $post_model;

    public function __construct()
    {
        $this->post_model = new Posts();
    }

    public function index()
    {
        if(request()->isAJAX())
        {
            return DataTable::of($this->post_model)
                ->add('article_view', function($data) {
                    return view('admin/post/include/item', compact('data'));
                })
                ->toJson();
        }

        return view('admin/post/index');
    }

    public function new()
    {
        $title = 'Edit Post';
        return view('admin/post/new', compact('title'));
    }

    public function create()
    {
        // dd($this->request->getVar());
        $this->post_model->save($this->request->getVar());

        return redirect()->to(url_to('Admin\PostController::index'))->with('success', 'Post created successfully');
    }

    public function edit($uuid)
    {
        $post = $this->post_model->where('uuid', $uuid)->first();
        $title = 'Edit Post';

        if(!$post)
        {
            return redirect()->to(url_to('Admin\PostController::index'));
        }

        return view('admin/post/edit', compact('post', 'title'));
    }

    public function update($uuid)
    {
        $this->post_model->where('uuid', $uuid)->set($this->request->getVar())->update();

        return redirect()->to(url_to('Admin\PostController::index'))->with('success', 'Post updated successfully');
    }

    public function delete($uuid)
    {
        $this->post_model->where('uuid', $uuid)->delete();

        session()->setFlashdata('success', 'Post deleted successfully');

        return response()->setJSON([
            'success' => true,
            'message' => 'Post deleted successfully'
        ]);
    }

    public function show($id)
    {
        $post = $this->post_model->find($id);

        return view('admin/post/show', compact('post'));
    }
}
