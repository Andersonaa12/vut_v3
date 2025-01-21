<?php

/* 
use Illuminate\Contracts\Auth\MustVerifyEmail; */
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $guard_name = 'web';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'brand_id',
        'license',
        'first_name',
        'middle_name',
        'first_surname',
        'second_surname',
        'date_of_birth',
        'phone_number',
        'telephone_extension',
        'cell_number',
        'profile_photo',
        'signature_file',
        'web_site',
        'active',
        'email',
        'email_alternative',
        'user_name',
        'password',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        // Ajusta el orden según prefieras (nombre + apellidos, o apellidos + nombres)
        // En este ejemplo: nombre, segundo nombre, primer apellido, segundo apellido.
        $fullName = trim(
            ($this->first_name ?? '') . ' ' .
            ($this->middle_name ? $this->middle_name . ' ' : '') .
            ($this->first_surname ?? '') . ' ' .
            ($this->second_surname ?? '')
        );

        // Retornar con mayúsculas/minúsculas si lo deseas
        // return Str::title($nombreCompleto);

        return $fullName;
    }
}
