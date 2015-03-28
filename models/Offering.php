<?php namespace Acme\Crm\Models;

use Model;

/**
 * Offering Model
 */
class Offering extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_crm_offerings';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}