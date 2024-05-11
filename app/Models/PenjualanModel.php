<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\Penjualan as  Authenticatable;


class PenjualanModel extends Model
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
    use HasFactory;
    protected $table = 'm_t_penjualan'; //mendefiniskan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'penjualan_id'; //mendefiniskan primary key dari tabel yang digunakan

    protected $fillable = ['user_id', 'pembeli', 'penjualan_kode', 'penjualan_tanggal', 'image'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }
    protected function image(): Attribute
    {
        return new Attribute(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
}
