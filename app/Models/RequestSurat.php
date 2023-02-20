<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class RequestSurat extends Model
{
    use HasFactory;

    protected $table = 'requestsurat';

    protected $guarded = [];

    public function daftar_surat(): BelongsTo
{
    return $this->belongsTo(DaftarSurat::class, 'daftarsurat_id');
}
}
