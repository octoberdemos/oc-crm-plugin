<?php namespace Acme\Crm\Models;

use Model;

/**
 * Note Model
 */
class Note extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_crm_notes';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'opportunity' => ['Acme\Crm\Models\Opportunity'],
        'owner' => ['Backend\Models\User'],
    ];

}