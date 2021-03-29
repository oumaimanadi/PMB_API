<?php

namespace App\Search\SearchParametre;

class Author  
{
    //Search for a notices based on the author.
    public static function apply($builder, $value)
    {
        $builder
        ->leftjoin('responsability','notices.notice_id','responsability.responsability_notice')
        ->leftjoin('authors','responsability.responsability_author','authors.author_id',)
        ->where('authors.author_name','like','%'.$value.'%');

        return $builder;
    }
}