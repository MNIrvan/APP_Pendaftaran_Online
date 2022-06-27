<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{
       public function getSubMenu()
    {
        $query = "
        SELECT      `user_sub_menu`.*, `user_menu`.`menu`
        FROM        `user_sub_menu` JOIN `user_menu`
        ON          `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function deleteMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('admin', ['id' => $id]); 
    }

    public function getMenuById($id)
    {
        $query = "
        SELECT      `user_sub_menu`.*, `user_menu`.`menu`
        FROM        `user_sub_menu` JOIN `user_menu`
        ON          `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";
        $query = $this->db->query($query)->result_array();
    }

    public function editSubmenu()
    {
        $data = [
            "dashboard" => $this->input->post('dashboard', true),
            "my profile" => $this->input->post('my profile', true),
            "edit profile" => $this->iputt->post('edit profile', true),
            "menu management" => $this->input->post('menu management', true),
            "submenu management" => $this->input->post('submenu managemnet', true),
            "role" => $this->input->post('role', true),
            "change password" => $this->input->post('change password', true)
        ];
        $this->db->where('id', $this->input->POST('id'));
        $this->db->update('submenu', $data);
    }

    public function Editmenu($id)
    {
        
    }
}