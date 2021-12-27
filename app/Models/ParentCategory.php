<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    use HasFactory;

    public function our_categories(){

    	return $this->hasMany(OurCategory::class);
    }

    public function sub_parent_categories(){
    	
    	return $this->hasMany(ParentCategory::class, 'main_category_id');
    }

    public function materials(){

    	return $this->hasMany(Material::class);
    }

    public function dress_lengths(){

    	return $this->hasMany(DressLength::class);
    }

    public function sleeve_lengths(){

    	return $this->hasMany(SleeveLength::class);
    }

     public function occasions(){

    	return $this->hasMany(Occasion::class);
    }

    public function patterns(){

    	return $this->hasMany(Pattern::class);
    }

    public function dress_styles(){

    	return $this->hasMany(DressStyle::class);
    }

    public function themes(){

    	return $this->hasMany(Theme::class);
    }

    public function necklines(){
    	
    	return $this->hasMany(Neckline::class);
    }

    public function features(){
    	
    	return $this->hasMany(Feature::class);
    }

    public function closures(){
    	
    	return $this->hasMany(Closure::class);
    }

    public function garment_cares(){
    	
    	return $this->hasMany(GarmentCare::class);
    }

    public function embellishments(){

    	return $this->hasMany(Embellishment::class);
    }

     public function sleeve_types(){

    	return $this->hasMany(SleeveType::class);
    }

    public function characters(){

    	return $this->hasMany(Character::class);
    }

    public function fit_types(){

    	return $this->hasMany(FitType::class);
    }

     public function products(){

    	return $this->hasMany(Product::class);
    }

    public function fabric_types(){

        return $this->hasMany(FabricType::class);
    }

    public function fastening_types(){

        return $this->hasMany(FasteningType::class);
    }

    public function cuff_styles(){

        return $this->hasMany(CuffStyle::class);
    }

    public function collars(){

        return $this->hasMany(Collar::class);
    }
}
