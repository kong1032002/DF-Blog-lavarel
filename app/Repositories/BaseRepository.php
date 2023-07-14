<?php

namespace App\Repositories;

use App\Repositories\Interfaces\IRepository;

abstract class BaseRepository implements IRepository
{
    protected $_model;
    /**
     * Get all Model
     * @return mixed
     */
    public function getAll() {
        return $this->_model->all();
    }
    /**
     * Count model
     * @return mixed
     */
    public function count() {
        return $this->_model->count();
    }
    /**
     * Get model by id
     * @param mixed $id
     * @return mixed
     */
    public function get($id) {
        return $this->_model->find($id);
    }
    /**
     * Update model
     * @param mixed $id
     * @param mixed $data
     * @return mixed
     */
    public function update($id, $data) {
        return $this->_model->find($id)->update($data);
    }
    /**
     * Delete model
     * @param mixed $id
     * @return mixed
     */
    public function delete($id){
        return $this->_model->find($id)->delete();
    }
    /**
     * Add new model
     * @param mixed $data
     * @return mixed
     */
    public function add($data) {
        return $this->_model->create($data);
    }
}
