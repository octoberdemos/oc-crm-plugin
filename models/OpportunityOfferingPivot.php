<?php namespace Acme\Crm\Models;

use October\Rain\Database\Pivot;

/**
 * Pivot Model
 */
class OpportunityOfferingPivot extends Pivot
{

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'owner' => ['Backend\Models\User']
    ];

}