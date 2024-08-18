<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $subject
 * @property string $body
 * @property int $send_count
 */
class Email extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['subject', 'body', 'send_count'];
}
