<?php
namespace cdn\Models;
use cdn\User;
use Illuminate\Database\Eloquent\Model;
class Branch extends Model
{
    protected $table = 'branches';
    protected $fillable = [
    	'branchnumber',
		'branchname',
		'logo'
    ];   


    public function user()
	{
		return $this->belongsTo('cdn\User', 'id');
	}
    public function branch()
	{
		return $this->belongsTo('cdn\Models\Branch', 'branchnumber');
    }

	public function branches(Branch $branchname)
	{
    		return $this->hasMany('cdn\Models\Branch', 'branchnumber');
   	}

    
    public function getBranch()
    {
    	if ($this->branchnumber && $this->branchname) {
    		return "{$this->branchnumber} {$this->branchname}";
    	}
    	
    	if ($this->branchname) {
    		return $this->branchname;
    	}
    	return null;
    }
    
    public function getBranchName()
    {
    	return $this->getBranch() ?: $this->branchname;
    }

    public function getBranchNumber()
    {
    	return $this->getBranchName() ?: $this->branchnumber;
	}
	
	public function getLogo($logo)
	{
		return $this->logo;
	}
  

}
