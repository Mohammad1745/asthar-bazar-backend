<?php


namespace App\Http\Repositories;


class Repository
{
    /**
     * @var
     */
    private $model;

    /**
     * Repository constructor.
     * @param $model
     */
    public function __construct ($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function all ()
    {
        return $this->model->all();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create (array $data)
    {
        return $this->model->create( $data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function update (int $id, array $data)
    {
        return $this->model->where( ['id' => $id])->update( $data);
    }

    /**
     * @param array $where
     * @param array $data
     * @return mixed
     */
    public function updateWhere (array $where, array $data)
    {
        return $this->model->where( $where)->update( $data);
    }

    /**
     * @param array $where
     * @param array $data
     * @return mixed
     */
    public function updateOrCreate (array $where, array $data)
    {
        return $this->model->updateOrCreate( $where, $data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function delete (int $id)
    {
        return $this->model->where(['id' => $id])->delete();
    }

    /**
     *  @param array $where
     * @return mixed
     */
    public function deleteWhere (array $where)
    {
        return $this->model->where( $where)->delete();
    }

    /**
     * @param array $where
     * @param array $fields
     * @return mixed
     */
    public function firstWhere (array $where, array $fields=[])
    {
        return count($fields) ?
            $this->model->select($fields)->where( $where)->first():
            $this->model->where( $where)->first();
    }

    /**
     * @param array $where
     * @param array $fields
     * @return mixed
     */
    public function lastWhere (array $where, array $fields=[])
    {
        return count($fields) ?
            $this->model->select($fields)->where( $where)->orderby('created_at', 'desc')->first():
            $this->model->where( $where)->orderby('created_at', 'desc')->first();
    }

    /**
     * @param array $where
     * @param string $field
     * @return mixed
     */
    public function pluckWhere (array $where, string $field)
    {
        return $this->model->where( $where)->pluck($field);
    }

    /**
     * @param array $where
     * @param array $fields
     * @return mixed
     */
    public function getWhere (array $where, array $fields=[])
    {
        return count($fields) ?
            $this->model->select($fields)->where( $where)->get():
            $this->model->where( $where)->get();
    }

    /**
     * @param array $whereNotIn
     * @param array $where
     * @param array $fields
     * @return mixed
     */
    public function getWhereNotIn (array $whereNotIn, array $where=[], array $fields=[])
    {
        $collections = count($fields) ?
            $this->model->select($fields):
            $this->model;
        $collections = count($where) ?
            $collections->where( $where):
            $collections;

        return $collections->whereNotIn($whereNotIn['field'],$whereNotIn['array'])->get();
    }

    /**
     * @param array $where
     * @param int $pagination
     * @param array $fields
     * @return mixed
     */
    public function paginateWhere (array $where, int $pagination=PAGINATE_SMALL, array $fields=[])
    {
        return count($fields) ?
            $this->model->select($fields)->where( $where)->paginate($pagination):
            $this->model->where( $where)->paginate($pagination);
    }

    /**
     * @param array $where
     * @return mixed
     */
    public function countWhere (array $where)
    {
        return $this->model->where( $where)->count();
    }

    /**
     * @param array $where
     * @param string $field
     * @return mixed
     */
    public function sumWhere (array $where, string $field)
    {
        return $this->model->where( $where)->sum( $field);
    }
}
