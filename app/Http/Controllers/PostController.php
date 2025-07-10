// app/Http/Controllers/PostController.php
use App\Models\Post;

public function index()
{
    $posts = Post::all();
    return view('posts.index', compact('posts'));
}
