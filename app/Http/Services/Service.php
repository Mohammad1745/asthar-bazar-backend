<?php


namespace App\Http\Services;


class Service
{
    /**
     * @var
     */
    private $repository;

    /**
     * BaseService constructor.
     * @param $repository
     */
    public function __construct ($repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function all ()
    {
        return $this->repository->all();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create (array $data)
    {
        return $this->repository->create( $data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function update (int $id, array $data)
    {
        return $this->repository->update( $id, $data);
    }

    /**
     * @param array $where
     * @param array $data
     * @return mixed
     */
    public function updateWhere (array $where, array $data)
    {
        return $this->repository->updateWhere( $where, $data);
    }

    /**
     * @param array $where
     * @param array $data
     * @return mixed
     */
    public function updateOrCreate (array $where, array $data){
        return $this->repository->updateOrCreate( $where, $data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function delete (int $id) {
        return $this->repository->delete( $id);
    }

    /**
     * @param array $where
     * @return mixed
     */
    public function deleteWhere (array $where)
    {
        return $this->repository->deleteWhere( $where);
    }

    /**
     * @param array $where
     * @param array $fields
     * @return mixed
     */
    public function firstWhere (array $where, array $fields=[])
    {
        return $this->repository->firstWhere( $where, $fields);
    }

    /**
     * @param array $where
     * @param array $fields
     * @return mixed
     */
    public function lastWhere (array $where, array $fields=[])
    {
        return $this->repository->lastWhere( $where, $fields);
    }

    /**
     * @param array $where
     * @param string $field
     * @return mixed
     */
    public function pluckWhere (array $where, string $field)
    {
        return $this->repository->pluckWhere( $where, $field);
    }

    /**
     * @param array $where
     * @param array $fields
     * @return mixed
     */
    public function getWhere (array $where, array $fields=[])
    {
        return $this->repository->getWhere( $where, $fields);
    }

    /**
     * @param array $whereNotIn
     * @param array $where
     * @param array $fields
     * @return mixed
     */
    public function getWhereNotIn (array $whereNotIn, array $where=[], array $fields=[])
    {
        return $this->repository->getWhereNotIn( $whereNotIn, $where, $fields);
    }

    /**
     * @param array $where
     * @param int $pagination
     * @param array $fields
     * @return mixed
     */
    public function paginateWhere (array $where, int $pagination=PAGINATE_SMALL, array $fields=[])
    {
        return $this->repository->paginateWhere( $where, $pagination,$fields);
    }
    /**
     * @param array $where
     * @return mixed
     */
    public function countWhere (array $where)
    {
        return $this->repository->countWhere( $where);
    }

    /**
     * @param array $where
     * @param string $field
     * @return mixed
     */
    public function sumWhere (array $where, string $field)
    {
        return $this->repository->sumWhere( $where, $field);
    }
}
