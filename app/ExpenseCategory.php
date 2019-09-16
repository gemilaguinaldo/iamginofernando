<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    protected $table      = 'expense_categ';
    protected $primaryKey = 'expense_categ_id';

    public function getExpense()  {
        return $this->hasMany('Expense','expense_id');
    }
}
