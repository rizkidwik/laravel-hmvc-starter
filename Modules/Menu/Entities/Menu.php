<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Menu extends Model
{
    use HasFactory,HasUlids;

    protected $guarded = ['id'];
    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Menu\Database\factories\MenuFactory::new();
    }

    public function subMenus()
    {
        return $this->hasMany(Menu::class,'main_menu');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id');
    }
}
