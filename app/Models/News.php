<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews(){
        return DB::table($this->table)->get();
    }

    public function getOneNews($id){
        return DB::table($this->table)->find($id);
    }

    public function getNews_CategoryName($name)
    {
        return DB::table($this->table)
            ->join('categories', 'categories.id', '=', "{$this->table}.category_id")
            ->select("{$this->table}.*", 'categories.title as categoryTitle')
            ->where('categories.title', '=', $name)
            ->get();
    }
}
