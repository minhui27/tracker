<?php

namespace PragmaRX\Tracker\Vendor\Laravel\Models;

class EventLog extends Base {

	protected $table = 'tracker_events_log';

	protected $fillable = array(
		'event_id',
		'class_id',
	    'log_id',
	);

	public function log()
	{
		return $this->belongsTo($this->getConfig()->get('log_model'));
	}

	public function event()
	{
		return $this->belongsTo($this->getConfig()->get('event_model'));
	}

	public function systemClass()
	{
		return $this->belongsTo($this->getConfig()->get('system_class_model'),'class_id');
	}
}
