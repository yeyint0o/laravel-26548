<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = $this->books();

        return view('books.index', [
            'title' => '本棚',
            'owner' => '山田',
            'books' => $books,
        ]);
    }

    public function show($id)
    {
        $books = $this->books();

        if (! isset($books[$id])) {
            abort(404);
        }

        return view('books.show', ['book' => $books[$id]]);
    }

    private function books()
    {
        return [
            1 => ['title' => '吾輩は猫である', 'author' => '夏目漱石', 'price' => 660],
            2 => ['title' => '走れメロス',     'author' => '太宰治',   'price' => 440],
            3 => ['title' => '銀河鉄道の夜',   'author' => '宮沢賢治', 'price' => 1100],
        ];
    }
}