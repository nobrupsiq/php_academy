<?php

// Principio da responsabilidade unica
// Toda classe deve ter um e somente um motivo para mudar. A classe precisa ter apenas uma responsabilidade


class User {
    public function set_name() {}
    public function get_name() {}
}

class User_DB {
    public function add_user(User $user) {}
    public function update_user(User $user) {}
    public function delete_user(User $id) {}
}
