<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use CakeDC\Users\Model\Table\UsersTable;

/**
 * Application specific Users Table with non plugin conform field(s)
 */
class MyUsersTable extends UsersTable
{


    /**
     * Custom finder to filter active users
     *
     * @param \Cake\ORM\Query $query Query object to modify
     * @return \Cake\ORM\Query
     */
    public function findActive(Query $query)
    {
        $query->where([$this->aliasField('is_active') => 1]);

        return $query;
    }
}
