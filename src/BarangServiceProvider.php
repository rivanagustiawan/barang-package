<?php 

namespace Rivan\Barang;


use Illuminate\Support\ServiceProvider;

class BarangServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views','barang');
    }
    public function register()
    {

    }
}

?>