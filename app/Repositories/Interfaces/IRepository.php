<?php

namespace App\Repositories\Interfaces;

interface IRepository
{
    /**
     * Get all
     * @return void
     */
    public function getAll();
    /**
     * Count model
     * @return void
     */
    public function count();
    /**
     * Get model by id
     * @param mixed $id
     * @return void
     */
    public function get($id);
    /**
     * Update model by id
     * @param mixed $id
     * @param mixed $data
     * @return void
     */
    public function update($id, $data);
    /**
     * Detele model
     * @param mixed $id
     * @return void
     */
    public function delete($id);
    /**
     * add model
     * @param mixed $data
     * @return void
     */
    public function add($data);
}
