<?php

namespace Minhquan\Asm\Models;

use Minhquan\Asm\Model;

class Category extends Model {
    protected $table = 'categories';
    protected $columns = [
        'name',
    ];
}