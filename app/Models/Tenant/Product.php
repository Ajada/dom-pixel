<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'amount',
        'image_url',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getPriceAttribute($value)
    {
        if (is_string($value) && preg_match('/^R\$\s\d{1,3}(?:\.\d{3})*(?:,\d{2})?$/', $value)) {
            $value = str_replace(['R$', '.', ','], ['', '', '.'], $value);
        }
    
        return 'R$ ' . number_format(floatval($value), 2, ',', '.');
    }
}
