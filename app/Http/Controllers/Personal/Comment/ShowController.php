<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Comment $comment)
    {
        return view('admin.tag.show', compact('comment'));
    }
}
