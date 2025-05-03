<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'description',
        'image',
        'content',
        'tags'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function getReadingTimeAttribute()
    {
        $words = str_word_count(strip_tags($this->content));
        $minutes = ceil($words / 200); // Ortalama okuma hızı: dakikada 200 kelime
        return $minutes;
    }

    public function getPopularTagsAttribute()
    {
        $allTags = Blog::pluck('tags')->filter()->flatten();
        $tagArray = [];
        
        foreach ($allTags as $tags) {
            $tagList = explode(',', $tags);
            foreach ($tagList as $tag) {
                $tag = trim($tag);
                if (!empty($tag)) {
                    if (!isset($tagArray[$tag])) {
                        $tagArray[$tag] = 1;
                    } else {
                        $tagArray[$tag]++;
                    }
                }
            }
        }

        arsort($tagArray);
        return array_slice(array_keys($tagArray), 0, 10);
    }
} 