<?php
namespace App\Repositories;
use App\Models\Blog;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\IBlogRepository;
class BlogRepository extends BaseRepository implements IBlogRepository {
    /**
     * Constructor for blogRepository
     * @param \App\Models\Blog $blog
     */
    public function __construct(Blog $blog) {
        $this->_model = $blog;
    }
}