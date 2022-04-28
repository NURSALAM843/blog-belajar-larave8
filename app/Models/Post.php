<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use phpDocumentor\Reflection\PseudoTypes\False_;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title','excerpt','body'];
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false ){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //           ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        //versi callback
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        // $query->when($filters['author'] ?? false, function($query, $author){
        //     return $query->whereHas('author', function($query) use ($author){
        //         $query->where('username', $author);
        //     });
        // });

        //Arrow Function
        $query->when($filters['author'] ?? false, fn($query, $author)=>
            $query->whereHas('author', fn($query)=>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTO(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}

