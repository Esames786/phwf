<?php





function get_role($id, $column)
{

    $query = \App\role::where('id', $id)->first();
    return $query->$column;
}

function get_user($id, $column)
{

    $query = \App\role::where('id', $id)->first();
    return $query->$column;

}

?>
