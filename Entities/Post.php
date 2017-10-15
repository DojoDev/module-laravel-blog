<?php

namespace DojoDev\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','description'];

    protected function getAuthorAttribute(){
    	return 'Raffael Nunes';
    }
}
