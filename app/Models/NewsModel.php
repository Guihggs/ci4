<?php

namespace App\Models;
use CodeIgniter\Model;

class NewsModel extends Model {

    protected $table = 'news';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'slug', 'body'];
    protected $useSoftDeletes = true;
    
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';


    public function getNews($id = null) {
        if ($id === null) {
            return $this->findAll();
        }

       

        return $this->asArray()->where(['id' => $id])->first();
    }
}