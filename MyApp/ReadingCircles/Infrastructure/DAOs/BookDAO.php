<?php

namespace MyApp\ReadingCircles\Infrastructure\DAOs;

use Illuminate\Database\Eloquent\Model;

class BookDAO extends Model
{
    protected $primaryKey = 'book_id';
    protected $table = 'books';
    protected $guarded = [
        'book_id',
    ];

    public function queryById(int $id)
    {
        return $this->where('book_id', $id)->first();
    }

    public function queryByIsbn(string $isbn)
    {
        return $this->where('book_isbn', $isbn)->first();
    }
}
