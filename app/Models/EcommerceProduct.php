<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcommerceProduct extends Model
{
    use HasFactory;

    public function photos()
    {
        return $this->hasMany(Product_Photo::class, 'ecommerce_product_id', 'id');
    }

    public static function getAllProductsModel()
    {
        // Utiliza el método with para cargar la relación photos
        $allProducts = EcommerceProduct::with('photos')->paginate(12);

        // Devuelve el producto
        return $allProducts;
    }


    public static function getProductBySlugModel($slug)
    {
        // Utiliza el método firstOrFail para obtener el primer producto que coincida con el slug
        $product = EcommerceProduct::where('slug', $slug)->with('photos')->firstOrFail();

        // Otras acciones que quieras realizar con el producto...

        // Devuelve el producto
        return $product;
    }
}
