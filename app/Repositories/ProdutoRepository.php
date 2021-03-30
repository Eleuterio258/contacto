<?php

namespace App\Repositories;

use App\Models\Produto;

class ProdutoRepository
{
    /**
     * @var Produto
     */
    protected $produto;

    /**
     * PostRepository constructor.
     *
     * @param Post $produto
     */
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    /**
     * Get all posts.
     *
     * @return Post $produto
     */
    public function getAll()
    {
        return $this->produto->get();
    }

    /**
     * Get post by id
     *
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->produto->where('id', $id)->get();
    }

    /**
     * Save Post
     *
     * @param $data
     * @return Post
     */
    public function save($data)
    {
        $produto = new $this->produto;

        $produto->title = $data['title'];
        $produto->description = $data['description'];

        $produto->save();

        return $produto->fresh();
    }

    /**
     * Update Post
     *
     * @param $data
     * @return Post
     */
    public function update($data, $id)
    {

        $produto = $this->produto->find($id);

        $produto->title = $data['title'];
        $produto->description = $data['description'];

        $produto->update();

        return $produto;
    }

    /**
     * Update Post
     *
     * @param $data
     * @return Post
     */
    public function delete($id)
    {

        $produto = $this->produto->find($id);
        $produto->delete();

        return $produto;
    }

}
