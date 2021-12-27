<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function price_histories()
    {
        return $this->hasMany(PriceHistory::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function our_category()
    {
        return $this->belongsTo(OurCategory::class);
    }

    public function parent_category()
    {
        return $this->belongsTo(ParentCategory::class);
    }

     public function  email_alerts(){

        return $this->hasMany(EmailAlert::class);
    }

     public function  favourite_ads(){

        return $this->hasMany(FavouriteAd::class);
    }


    public function  characters(){

        return $this->belongsToMany(Character::class);
    }

    public function  closures(){

        return $this->belongsToMany(Closure::class);
    }

    public function color_maps(){

        return $this->belongsToMany(ColorMap::class);
    }
    
    public function dress_lengths(){

        return $this->belongsToMany(DressLength::class);
    }

    public function dress_styles(){

        return $this->belongsToMany(DressStyle::class);
    }

    public function embellishments(){

        return $this->belongsToMany(Embellishment::class);
    }

    public function fabric_types(){

        return $this->belongsToMany(FabricType::class);
    }

    public function features(){

        return $this->belongsToMany(Feature::class);
    }

    public function fit_types(){

        return $this->belongsToMany(FitType::class);
    }

    public function garment_cares(){

        return $this->belongsToMany(GarmentCare::class);
    }

    public function materials(){

        return $this->belongsToMany(Material::class);
    }

     public function necklines(){

        return $this->belongsToMany(Neckline::class);
    }

     public function occasions(){

        return $this->belongsToMany(Occasion::class);
    }

     public function patterns(){

        return $this->belongsToMany(Pattern::class);
    }

     public function size_maps(){

        return $this->belongsToMany(SizeMap::class);
    }

    public function sleeve_lengths(){

        return $this->belongsToMany(SleeveLength::class);
    }

    public function sleeve_types(){

        return $this->belongsToMany(SleeveType::class);
    }

    public function themes(){

        return $this->belongsToMany(Theme::class);
    }

     public function collars(){

        return $this->belongsToMany(Collar::class);
    }

     public function fastening_types(){

        return $this->belongsToMany(FasteningType::class);
    }

     public function cuff_styles(){

        return $this->belongsToMany(CuffStyle::class);
    }
     public function seasons(){

        return $this->belongsToMany(Season::class);
    }


     public function offer_type(){

        return $this->belongsTo(OfferType::class);
    }

    public function  product_color_sizes(){

        return $this->hasMany(ProductColorSize::class);
    }

}
