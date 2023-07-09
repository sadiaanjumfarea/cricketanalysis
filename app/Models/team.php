<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Team extends Model
{
    protected $fillable = ['name', 'user_id'];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cricketers()
    {
        return $this->belongsToMany(Cricketer::class);
    }

}
