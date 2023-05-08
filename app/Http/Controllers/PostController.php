<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        [
            'id' => 1,
            'title' => 'First Post',
            'posted_by' => 'John Doe',
            'created_at' => '2023-05-07',
        ],
        [
            'id' => 2,
            'title' => 'Second Post',
            'posted_by' => 'Jane Smith',
            'created_at' => '2023-05-08',
        ],
    ];

    public function index()
    {
        return view('posts.index', ['posts' => $this->posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = [
            'id' => count($this->posts) + 1,
            'title' => $request->input('title'),
            'posted_by' => $request->input('posted_by'),
            'created_at' => now()->toDateString(),
        ];

        $this->posts[] = $post;

        return redirect()->route('home');
    }

    public function show($id)
    {
        $post = $this->findPostById($id);
        return view('posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = $this->findPostById($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = $this->findPostById($id);

        $post['title'] = $request->input('title');
        $post['posted_by'] = $request->input('posted_by');
        $post['created_at'] = now()->toDateString();

        $this->posts[$id - 1] = $post;

        return redirect()->route('posts.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        unset($this->posts[$id - 1]);

        return redirect()->route('home');
    }

    private function findPostById($id)
    {
        foreach ($this->posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }

        return null;
    }
}