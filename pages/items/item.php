<?php

    require_once('functions.php');

    $item_id = (isset($_GET['id']) ? addslashes($_GET['id']) : '');
    $name = (isset($_GET['name']) ? addslashes($_GET['name']) : '');

    if ($item_id != "" && is_numeric($item_id)) {
        if ($discovered_items_only == TRUE) {
            $query = "SELECT * FROM $items_table, discovered_items WHERE $items_table.id='" . $item_id . "' AND discovered_items.item_id=$items_table.id";
        } else {
            $query = "SELECT * FROM $items_table WHERE id='" . $item_id . "'";
        }
        $query_result = db_mysql_query($query);
        if (mysql_num_rows($query_result) == 0) {
            header("Location: items.php");
            exit();
        }
        $item_db_data = mysql_fetch_array($query_result);
        $name = $item_db_data["name"];
    } elseif ($name != "") {
        if ($discovered_items_only == TRUE) {
            $query = "SELECT * FROM $items_table, discovered_items WHERE $items_table.`name` like '$name' AND discovered_items.item_id=$items_table.id";
        } else {
            $query = "SELECT * FROM $items_table WHERE name like '$name'";
        }
        $query_result = db_mysql_query($query);
        if (mysql_num_rows($query_result) == 0) {
            header("Location: items.php?iname=" . $name . "&isearch=true");
            exit();
        } else {
            $item_db_data = mysql_fetch_array($query_result);
            $item_id = $item_db_data["id"];
            $name = $item_db_data["name"];
        }
    } else {
        header("Location: items.php");
        exit();
    }


    $item = $item_db_data;
    $page_title = strip_underscores($item['Name']);

    $item_data = return_item_stat_box($item, 0);
    $item_icon = return_item_icon_from_icon_id($item['icon'], 25);

    $content = display_header('<h2>' . $item_icon . ' ' . $item['Name'] . '</h2>');
    $content .= display_row($item_data . '<br>');
    $content .= return_where_item_foraged($item_id);
    $content .= return_where_item_used_trade_skills($item_id);
    $content .= return_where_item_result_trade_skill($item_id);
    $content .= return_where_item_sold($item_id);
    $content .= return_where_item_ground_spawn($item_id);
    $content .= $where_item_ground_spawn;

    $print_buffer .= display_table($content);

?>
