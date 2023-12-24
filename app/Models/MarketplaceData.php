<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketplaceData extends Model
{
    use HasFactory;

    public $table = 'marketplace_data_table';

    protected $fillable = ['product', 'category', 'company', 'price', 'contact'];

}
