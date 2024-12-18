<?php

class Items_model extends Crud_model {

    private $table = null;

    function __construct() {
        $this->table = 'items';
        parent::__construct($this->table);
    }

    function get_details($options = array()) {
        $items_table = $this->db->dbprefix('items');
        $order_items_table = $this->db->dbprefix('order_items');
        $where = "";
        $id = get_array_value($options, "id");
        if ($id) {
            $where .= " AND $items_table.id=$id";
        }

        $search = get_array_value($options, "search");
        if ($search) {
            $search = $this->db->escape_str($search);
            $where .= " AND ($items_table.title LIKE '%$search%' OR $items_table.description LIKE '%$search%')";
        }

        $show_in_client_portal = get_array_value($options, "show_in_client_portal");
        if ($show_in_client_portal) {
            $where .= " AND $items_table.show_in_client_portal=1";
        }

        $extra_select = "";
        $login_user_id = get_array_value($options, "login_user_id");
        if ($login_user_id) {
            $extra_select = ", (SELECT COUNT($order_items_table.id) FROM $order_items_table WHERE $order_items_table.deleted=0 AND $order_items_table.order_id=0 AND $order_items_table.created_by=$login_user_id AND $order_items_table.item_id=$items_table.id) AS added_to_cart";
        }

        $limit_query = "";
        $limit = get_array_value($options, "limit");
        if ($limit) {
            $offset = get_array_value($options, "offset");
            $limit_query = "LIMIT $offset, $limit";
        }

        $sql = "SELECT $items_table.* $extra_select
        FROM $items_table
        WHERE $items_table.deleted=0 $where
        ORDER BY $items_table.title ASC
        $limit_query";
        return $this->db->query($sql);
    }

}
