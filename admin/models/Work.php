<?php

use Admin\Models\AdminModel;

class Work extends AdminModel
{

    protected $table = 'works';


    public function find($id)
    {
        return $this->db
            ->from($this->table)
            ->where('id', $id)
            ->get()
            ->row();
    }

    public function all($paginate = [])
    {
        $this->setFilter();
        $this->setPaginate($paginate);

        return $this->db
            ->from($this->table)
            ->where('language', $this->language)
            ->order_by("order", 'asc')
            ->order_by("id", 'asc')
            ->get()
            ->result();
    }


    public function count()
    {
        $this->setFilter();

        return $this->db
            ->from($this->table)
            ->where('language', $this->language)
            ->count_all_results();
    }


    public function insert($data = array())
    {
        $this->db->insert($this->table, array(
            'title' => $this->input->post('title'),
            'site' => $this->input->post('site'),
            'link' => $this->input->post('link'),
            'detail' => $this->input->post('detail'),
            'image' => $data['image']->name,
            'order' => $this->makeLastOrder(),
            'language' => $this->language
        ));

        $insertId = $this->db->insert_id();

        if ($insertId > 0) {
            return $this->find($insertId);
        }

        return false;
    }



    public function update($record, $data = array())
    {
        $this->db
            ->where('id', $record->id)
            ->update($this->table, array(
                'title' => $this->input->post('title'),
                'site' => $this->input->post('site'),
                'link' => $this->input->post('link'),
                'detail' => $this->input->post('detail'),
                'image' => $data['image']->name,
            ));

        if ($this->db->affected_rows() > 0) {
            return $this->find($record->id);
        }

        return false;
    }



    public function delete($data)
    {
        return parent::delete($this->table, $data);
    }


    public function order($ids)
    {
        return parent::order($this->table, $ids);
    }


} 