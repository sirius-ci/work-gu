<?php


class Work extends  CI_Model
{

    /**
     * Tüm kayıtları döndürür
     *
     * @param int|null $limit
     * @return mixed
     */
    public function all($limit = null)
    {
        if ($limit != null) {
            $this->db->limit($limit);
        }

        $results = $this->db
            ->from('works')
            ->where('language', $this->language)
            ->get()
            ->result();

        return $results;
    }
}