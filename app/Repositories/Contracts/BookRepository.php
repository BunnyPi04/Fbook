<?php

namespace App\Repositories\Contracts;

use App\Eloquent\Book;

interface BookRepository extends AbstractRepository
{
    public function getData($data = [], $with = [], $dataSelect = ['*']);
    public function store($data = []);
    public function find($id);
    public function update($id, $data = []);
    public function destroy($id);
    public function getCategory();
}
