<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    const TABLE = 'tags';

    protected $table = self::TABLE;
    protected $fillable = [
        'name','slug',
    ];

    public function name(): string{
        return $this->name;
    }
    public function slug(): string{
        return $this->slug;
    }
    public static function search($search){
        return empty($search)
            ? static::query()
            : static::query()->where('id', 'like', '%'. $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%')
            ->orWhere('slug', 'like', '%' . $search . '%');
    }

}
