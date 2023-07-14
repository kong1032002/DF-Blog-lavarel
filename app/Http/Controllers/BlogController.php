<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\IBlogRepository;
use Exception;

class BlogController extends Controller
{
    protected $blogRepo;
 
    /**
     * Constructor for controller
     * @param \App\Repositories\Interfaces\IBlogRepository $blogRepo
     */
    public function __construct(IBlogRepository $blogRepo) {
         $this->blogRepo = $blogRepo;
    }
    /**
     * Get all Blog
     * @return void
     */
    public function index()
    {
        return $this->blogRepo->getAll();
    }
    /**
     * Get blog by id
     * @param mixed $id
     * @return void
     */
    public function getById($id)
    {
        return $this->blogRepo->get($id);
    }
    /**
     * Add new blog
     * @return Exception
     */
    public function add()
    {
        try {
            $data = [
                'title' => request()->title,
                'des' => request()->des,
                'detail' => request()->detail,
                'category' => request()->category,
                'public' => request()->public,
                'data_public' => request()->data_public,
                'position' => json_encode(request()->position),
                'thumbs' => request()->thumbs
            ];
            return $this->blogRepo->add($data);
        } catch (Exception $ex) {
            return $ex;
        }
    }
    /**
     * Update blog
     * @param mixed $id
     * @return void
     */
    public function update($id)
    {
        $data = [
            'title' => request()->title,
            'des' => request()->des,
            'detail' => request()->detail,
            'category' => request()->category,
            'public' => request()->public,
            'data_public' => request()->data_public,
            'position' => json_encode(request()->position),
            'thumbs' => request()->thumbs
        ];
        return $this->blogRepo->update($id, $data);
    }
    /**
     * Delete blog
     * @param mixed $id
     * @return void
     */
    public function delete($id)
    {
        return $this->blogRepo->delete($id);
    }
}
