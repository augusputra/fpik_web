<?php
        
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventModel extends Model
{
    use SoftDeletes;

    protected $table = 'events';


    //Join Produk dengan AdminUser

    //  public function getAdminUsers()
    // {
    //     return $this->belongsTo('App\Models\Setting\AdminUsersModel', 'id_admin');
//    }


    //Join Produk dengan PenggunaPonsel

    // public function getPenggunaPonsel()
    // {
    //     return $this->belongsTo('App\Models\Setting\PenggunaPonselModel', 'id_pengguna');
    // }


}
 ?>