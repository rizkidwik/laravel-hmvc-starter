<?php

namespace Modules\Menu\Entities;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = ['id'];
    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Menu\Database\factories\MenuFactory::new();
    }

    public function subMenus()
    {
        return $this->hasMany(Menu::class, 'main_menu')->where('active', 1);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_menus', 'menu_id', 'role_id');
    }
}
